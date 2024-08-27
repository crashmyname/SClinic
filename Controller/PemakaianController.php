<?php
namespace Controller;
use Support\Request;
use Support\Validator;
use Support\View;
use Support\CSRFToken;
use Support\Crypto;
use Support\UUID;
use Support\DataTables;
use Model\Obat;
use Model\Stock;
use Model\Pemakaian;

class PemakaianController
{

    public function __construct()
    {
        $this->validator = new Validator();
        $this->pemakaianModel = new Pemakaian();
    }

    public function index()
    {
        View::render('dashboard',[],'navbar/navbar');
    }

    public function pemakaian()
    {
        $title = 'Data Pemakaian Obat';
        if(Request::isAjax()){
            $pemakaian = Pemakaian::query()
            ->select('tb_pemakaian.id_pemakaian','tb_pemakaian.nik','tb_pemakaian.nama','tb_pemakaian.kode_section','tb_pemakaian.keluhan','tb_pemakaian.jenis_obat','tb_obat.id_obat','tb_obat.nama_obat','tb_pemakaian.jumlah','tb_pemakaian.tgl_pemakaian','tb_pemakaian.created_by','tb_pemakaian.created_at','tb_pemakaian.modify_by')
            ->leftJoin('tb_obat','tb_pemakaian.jenis_obat','=','tb_obat.id_obat')
            ->where('tb_pemakaian.deleted_at','=','')
            ->get();
            
            return DataTables::of($pemakaian)->make(true);
        }
        $count = Pemakaian::query()->count();
        View::render('pemakaian/pemakaian_obat',['title'=>$title,'count'=>$count],'navbar/navbar');
    }

    public function importPemakaian($filepath)
    {
        $this->pemakaianModel->importFromFile($filepath);

    }

    public function getUsers()
    {
        if (Request::isAjax()) {
            // $users = $this->userModel->user(); <-- model lama
            // $users = User::all();
            $users = User::query()
            ->select('user_id','uuid','username','email','password')
            ->orderBy('username','asc')
            ->get();
            foreach ($users as &$user) {
                $user['edit_link'] = Crypto::encrypt($user['user_id']);
                $user['delete_link'] = Crypto::encrypt($user['user_id']);
            }
            return DataTables::of($users)->make(true);
        }
    }

    public function userapi()
    {
        $user = $this->userModel->user();
        header('Content-Type: application/json');
        echo json_encode($user);
    }

    public function adduser()
    {
        $token = CSRFToken::generateToken();
        $csrftoken = '<input type="hidden" name="csrf_token" value="'.$token.'">';
        View::render('home',['csrftoken'=>$csrftoken],'layout');
    }

    public function loginapi(Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'email' => $request->email,
                'password' => $request->password
            ];

            $rule = [
                'email' => 'required',
                'password' => 'required'
            ];
            
            $error = $this->validator->validate($data, $rule);
            if ($error) {
                View::render('login', ['errors' => $error]);
            } else {
                $result = $this->userModel->onLogin($data['email'], $data['password']);
                if ($result) {
                    $user = $this->userModel->getUserIdByEmail($data['email']);
                    if ($user) {
                        // Generate token
                        $token = bin2hex(random_bytes(32)); // atau gunakan JWT
                        
                        // Simpan token ke database atau session
                        $_SESSION['token'] = $token;
                        // atau di database:
                        // $this->userModel->saveToken($user['user_id'], $token);
                        
                        // Return token sebagai response
                        header('Content-Type: application/json');
                        echo json_encode(['token' => $token]);
                    }
                } else {
                    echo json_encode(['error' => 'Email atau password salah!!!!!!']);
                }
            }
        }
    }


    public function login(Request $request)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'email' => $request->email,
                'password' => $request->password
            ];
            error_log("Login request data: " . print_r($data, true));
            $rule = [
                'email' => 'required',
                'password' => 'required'
            ];
            $error = $this->validator->validate($data,$rule);
            if($error){
                View::render('login', ['errors' => $error]);
            } else {
                $result = $this->userModel->onLogin($data['email'], $data['password']);
                if($result){
                    $user = $this->userModel->getUserIdByEmail($data['email']);
                    if($user){
                        $_SESSION['user_id'] = $user['user_id'];
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['login_time'] = time();
                    }
                    // View::render('user', ['user'=>$users],'layout');
                    $r = $_ENV['ROUTE_PREFIX'];
                    View::redirectTo($r.'/user');
                } else {
                    $error_m = "gagal login";
                    View::render('login',['error_m'=>$error_m]);
                }
            }
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        $r = $_ENV['ROUTE_PREFIX'];
        View::redirectTo($r.'/login');
    }

    public function store(Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!CSRFToken::validateToken($request->csrf_token)) {
                View::render('errors/505',[]);
            }
            $data = [
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password
            ];
            $rules = [
                'username' => 'required|min:3|max:50',
                'email' => 'required|email',
                'password' => 'required|min:6'
            ];
            $uuid = UUID::generateUuid();

            $errors = $this->validator->validate($data,$rules);

            if(!empty($errors)){
                $user = $this->userModel->user();
                View::render('user', ['errors' => $errors, 'data' => $data, 'user' => $user]);
                return;
            } else {
                // $result = $this->userModel->addUser($data['username'],$uuid, $data['email'], $data['password']);
                $result = User::create([
                    'username' => $data['username'],
                    'uuid' => $uuid,
                    'email' => $data['email'],
                    'password' => password_hash($data['password'], PASSWORD_BCRYPT)
                ]);
                // $result = $this->userModel->addUser($username, $email, $password); <-- jika tidak menggunakan validasi gunakan seperti ini
                if ($result) {
                    $user = $this->userModel->user();
                    View::redirectTo($_ENV['ROUTE_PREFIX'].'/user');
                } else {    
                    echo "Gagal menambahkan user";
                }
            }
        }
    }

    public function getUserId($id)
    {
        $user = $this->userModel->getUserById($id);
        $encryptedUserId = Crypto::encrypt($user['user_id']);
        View::render('edit',['user'=>$user,'encryptedUserId'=>$encryptedUserId],'layout');
    }

    public function update(Request $request,$id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username =$request->username;
            $email =$request->email;
            $password =$request->password;
            if (empty($password)) {
                $password = null;
            } else {
                $password = $request->password;
            }  
            $result = $this->userModel->updateUser($id, $username, $email, $password);
            if ($result) {
                $user = $this->userModel->user();
                View::redirectTo('/mvc/user');
            } else {
                echo "Gagal memperbarui user";
            }
        }
    }

    public function delete($id)
    {
        $result = $this->userModel->deleteUser($id);
        if ($result) {
            $user = $this->userModel->user();
            View::redirectTo('/mvc/user');
        } else {
            echo "Gagal menambahkan user";
        }
    }
}
?>