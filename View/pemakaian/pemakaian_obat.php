<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <h4></h4>
    <p>Jam Digital: <b><span id="jam" style="font-size:24"></span></b></p>
    <h1 class="h3 mt-0 mb-0 text-gray-800">Data Permintaan Obat</h1>
    <p class="mb-0">Berikut adalah halaman Permintaan</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Cover Page</h6>
            <button type="button" class="btn btn-outline-success block" data-bs-toggle="modal"
                data-bs-target="#border-less">
                Tambah Data
            </button>
            <!-- BorderLess Modal Modal -->
            <div class="modal fade text-left modal-lg centered" id="border-less" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Data Pemakaian</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row match-height">
                                <div class="col-md-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Form Input</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form action="" class="form form-horizontal" id="formpemakaian"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>NIK</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input list="datalist" id="emp" name="emp"
                                                                    class="form-control">
                                                                <datalist id="datalist">
                                                                    <option value=""> - </option>
                                                                    
                                                                </datalist>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Nama Karyawan</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select class="form-control" name="nama"
                                                                    id="nama">

                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Section</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select class="form-control" name="section"
                                                                    id="section">

                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Keluhan</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="keluhan"
                                                                    class="form-control" name="keluhan"
                                                                    placeholder="Masukan Keluhan sakit"
                                                                    style="text-transform:uppercase;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Jenis Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select type="text" name="jns_obat" id="jns_obat"
                                                                    class="form-control" required>
                                                                    <option value=""> - </option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Jumlah</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="number" id="jumlah"
                                                                    class="form-control" name="jumlah"
                                                                    placeholder="Masukan Jumlah Obat">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Tanggal Pemakaian</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="date" id="tgl_pemakaian"
                                                                    class="form-control" name="tgl_pemakaian">
                                                            </div>
                                                            <div class="col-sm-12 d-flex justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1" name="simpan"
                                                                    id="simpanp"
                                                                    onclick="return confirm('Apakah data yang anda masukkan sudah benar?')">Submit</button>
                                                                <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                data-bs-target="#border-less2">
                Tambah Data Manual
            </button>
            <!-- BorderLess Modal Modal -->
            <div class="modal fade text-left modal-lg centered" id="border-less2" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Data Pemakaian</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row match-height">
                                <div class="col-md-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Form Input</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal" id="formpemakaianm" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>NIK</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="empm"
                                                                    class="form-control" name="emp"
                                                                    placeholder="Masukan NIK">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Nama</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="namam"
                                                                    class="form-control" name="nama"
                                                                    placeholder="Masukan Nama"
                                                                    style="text-transform:uppercase;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Section</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="sectionm"
                                                                    class="form-control" name="section"
                                                                    placeholder="Masukan Nama Section"
                                                                    style="text-transform:uppercase;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Keluhan</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="keluhanm"
                                                                    class="form-control" name="keluhan"
                                                                    placeholder="Masukan Keluhan sakit"
                                                                    style="text-transform:uppercase;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Jenis Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select type="text" name="jns_obat" id="jns_obatm"
                                                                    class="form-control" required>
                                                                    <option value=""> - </option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Jumlah</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="number" id="jumlahm"
                                                                    class="form-control" name="jumlah"
                                                                    placeholder="Masukan Jumlah Obat">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Tanggal Pemakaian</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="date" id="tgl_pemakaianm"
                                                                    class="form-control" name="tgl_pemakaian">
                                                            </div>
                                                            <div class="col-sm-12 d-flex justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1" name="simpan"
                                                                    id="simpanpm"
                                                                    onclick="return confirm('Apakah data yang anda masukkan sudah benar?')">Submit</button>
                                                                <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-success block" data-bs-toggle="modal"
                data-bs-target="#border-less3">
                Tambah Data Excel
            </button>
            <!-- BorderLess Modal Modal -->
            <div class="modal fade text-left modal-lg centered" id="border-less3" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Data Dengan Excel</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row match-height">
                                <div class="col-md-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Form Input</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal"
                                                    action="" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>FILE EXCEL</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="file" id="first-name"
                                                                    class="form-control" name="file_excel"
                                                                    placeholder="Masukan Data Alat">
                                                            </div>
                                                            <div class="col-sm-12 d-flex justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1" name="excel"
                                                                    onclick="return confirm('Apakah data yang anda masukkan sudah benar?')">Submit</button>
                                                                <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="showModalButton" class="btn btn-outline-info block">Info</button>
            <div class="modal fade" id="karyawanModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Informasi Karyawan</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Tempatkan informasi karyawan yang dipilih di sini -->
                            <div id="selectedKaryawanInfo"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditPemakaian"
                id="modalupdatepemakaian" title="Ubah Data"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                    height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg> Update Pemakaian</button>
            <!-- BorderLess Modal Modal -->
            <div class="modal fade text-left modal-lg centered" id="modalEditPemakaian" tabindex="-1"
                role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Data Pemakaian</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row match-height">
                                <div class="col-md-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Form Update Pemakaian</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal" id="formuppemakaian"
                                                    action="" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>NIK</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="empm"
                                                                    class="form-control" name="emp"
                                                                    placeholder="Masukan NIK">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Nama</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="namam"
                                                                    class="form-control" name="nama"
                                                                    placeholder="Masukan Nama"
                                                                    style="text-transform:uppercase;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Section</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="sectionm"
                                                                    class="form-control" name="section"
                                                                    placeholder="Masukan Nama Section"
                                                                    style="text-transform:uppercase;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Keluhan</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="keluhanm"
                                                                    class="form-control" name="keluhan"
                                                                    placeholder="Masukan Keluhan sakit"
                                                                    style="text-transform:uppercase;">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Jenis Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select type="text" name="jns_obat" id="jns_obatm"
                                                                    class="form-control" required>
                                                                    <option value=""> - </option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Jumlah</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="number" id="jumlahm"
                                                                    class="form-control" name="jumlah"
                                                                    placeholder="Masukan Jumlah Obat">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Tanggal Pemakaian</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="date" id="tgl_pemakaianm"
                                                                    class="form-control" name="tgl_pemakaian">
                                                            </div>
                                                            <div class="col-sm-12 d-flex justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1" name="simpan"
                                                                    id="simpanpm"
                                                                    onclick="return confirm('Apakah data yang anda masukkan sudah benar?')">Submit</button>
                                                                <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" id="deletepemakaian" title="delete pemakaian"
                class="btn icon btn-outline-danger"><i class="bi bi-trash"></i> Hapus</button>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatables" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Karyawan</th>
                                <th>Section</th>
                                <th>Keluhan</th>
                                <th>Jenis Obat</th>
                                <th>Jumlah</th>
                                <th>Tanggal Permintaan</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="">
            <div class="container-fluid fixed-bottom">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>Copyright &copy; 2023-2024</p>
                    </div>
                    <div class="float-end">
                        <p><a target="_blank" href="http://10.203.68.47:90/iseportal/">PT.Indonesia Stanley
                                Electric</a>. Clinic System</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            var prefix = "<?= $_ENV['ROUTE_PREFIX']?>";
            var dataTable = $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                select: true,
                ajax: prefix+'/pemakaian-obat',
                columns: [{
                        data: 'id_pemakaian',
                        name: 'id_pemakaian',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {
                        data: 'nik',
                        name: 'nik'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'kode_section',
                        name: 'kode_section'
                    },
                    {
                        data: 'keluhan',
                        name: 'keluhan'
                    },
                    {
                        data: 'nama_obat',
                        name: 'nama_obat',
                        searchable: true
                    },
                    {
                        data: 'jumlah',
                        name: 'jumlah'
                    },
                    {
                        data: 'tgl_pemakaian',
                        name: 'tgl_pemakaian'
                    },
                ],
                lengthMenu: [10, 25, 50, 100, <?= $count?>],
                dom: 'Blfrtip',
                // select: true,
                buttons: [{
                        extend: 'copy',
                        text: 'COPY',
                        exportOptions: {
                            columns: ':visible',
                            columnDefs: [{
                                targets: -1,
                                visible: false
                            }]
                        }
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        exportOptions: {
                            columns: ':visible',
                            columnDefs: [{
                                targets: -1,
                                visible: false
                            }]
                        }
                    },
                    {
                        extend: 'print',
                        text: 'CETAK',
                        exportOptions: {
                            columns: ':visible',
                            columnDefs: [{
                                targets: -1,
                                visible: false
                            }]
                        }
                    },
                    {
                        extend: 'csv',
                        text: 'CSV',
                        exportOptions: {
                            columns: ':visible',
                            columnDefs: [{
                                targets: -1,
                                visible: false
                            }]
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'EXCEL',
                        exportOptions: {
                            columns: ':visible',
                            columnDefs: [{
                                targets: -1,
                                visible: false
                            }]
                        }
                    },
                    {
                        extend: 'colvis',
                        text: 'COLUMN VISIBLE',
                        exportOptions: {
                            columns: ':visible',
                            columnDefs: [{
                                targets: -1,
                                visible: false
                            }]
                        }
                    }
                ]
            });
            $('#simpanp').on('click', function(e) {
                e.preventDefault();
                var url = "{{ route('addpemakaian') }}";
                var formData = new FormData($('#formpemakaian')[0]);
                $.ajax({
                    type: 'POST',
                    url: url,
                    processData: false, // Jangan memproses data
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.status === 200) {
                            Swal.fire({
                                title: 'Success',
                                icon: 'success',
                                text: 'Data berhasil ditambah',
                                timerProgressBar: true,
                                timer: 1500,
                            }).then(function() {
                                $('#formaddresin')[0].reset();
                                reloadData();
                            });
                            $('#ics').focus();
                        } else if (response.status === 202) {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: 'Karyawan sudah mengambil PAINKILLA lebih dari 2',
                            });
                        } else if (response.status === 203) {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: 'Karyawan mengambil PAINKILLA lebih dari 1',
                            });
                        } else if (response.status === 204) {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: 'Stock Obat sudah habis',
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: 'Gagal membuat data | Data yang diinput melebihi stock',
                            })
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        Swal.fire({
                            title: 'Error',
                            icon: 'error',
                            text: 'Error dalam melakukan fungsi',
                        })
                    }
                })
            })
            $('#simpanpm').on('click', function(e) {
                e.preventDefault();
                var url = "";
                var formData = new FormData($('#formpemakaianm')[0]);
                $.ajax({
                    type: 'POST',
                    url: url,
                    processData: false, // Jangan memproses data
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.status === 200) {
                            Swal.fire({
                                title: 'Success',
                                icon: 'success',
                                text: 'Data berhasil ditambah',
                                timerProgressBar: true,
                                timer: 1500,
                            }).then(function() {
                                $('#formaddresin')[0].reset();
                                reloadData();
                            });
                            $('#ics').focus();
                        } else if (response.status === 202) {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: 'Karyawan sudah mengambil PAINKILLA lebih dari 2',
                            });
                        } else if (response.status === 203) {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: 'Karyawan mengambil PAINKILLA lebih dari 1',
                            });
                        } else if (response.status === 204) {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: 'Stock Obat sudah habis',
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: 'Gagal membuat data | Data yang diinput melebihi stock',
                            })
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        Swal.fire({
                            title: 'Error',
                            icon: 'error',
                            text: 'Error dalam melakukan fungsi',
                        })
                    }
                })
            })
            $('#showModalButton').on('click', function() {
                var selectedData = dataTable.rows({
                    selected: true
                }).data();
                var modalContent = $('#selectedKaryawanInfo');

                modalContent.empty(); // Kosongkan konten modal sebelum menambahkan informasi baru

                if (selectedData.length > 0) {
                    // Jika ada data yang dipilih, tampilkan informasi dalam modal
                    // var info = '<ul>';
                    // selectedData.each(function (data) {
                    //     info += '<li>' + data.nik + ' - ' + data.nama + ' - ' + data.kode_section + ' - ' + data.nama_obat + ' - ' + data.jumlah + '</li>';
                    // });
                    // info += '</ul>';
                    var info = '<table>';
                    selectedData.each(function(data) {
                        const createdAt = new Date(data
                            .created_at); // Mengonversi string ke objek Date
                        const formattedCreatedAt = createdAt.toLocaleString('en-US', {
                            timeZone: 'Asia/Jakarta',
                            year: 'numeric',
                            month: '2-digit',
                            day: '2-digit',
                            hour: '2-digit',
                            minute: '2-digit',
                            second: '2-digit',
                        });
                        info += '<tr>' + '<td width="35%">' + 'NIK' + '</td>' + '<td width="10%">' +
                            ':' + '</td>' + '<td class="form-control">' + data.nik + '</td>' +
                            '</tr>' + '<tr>' + '<td>' + 'Nama' + '</td>' + '<td>' + ':' + '</td>' +
                            '<td class="form-control">' + data.nama + '</td>' + '</tr>' + '<tr>' +
                            '<td>' + 'Section' + '</td>' + '<td>' + ':' + '</td>' +
                            '<td class="form-control">' + data.kode_section + '</td>' + '</tr>' +
                            '<tr>' + '<td>' + 'Nama Obat' + '</td>' + '<td>' + ':' + '</td>' +
                            '<td class="form-control">' + data.nama_obat + '</td>' + '</tr>' +
                            '<tr>' + '<td>' + 'Jumlah' + '</td>' + '<td>' + ':' + '</td>' +
                            '<td class="form-control">' + data.jumlah + '</td>' + '</tr>' + '<tr>' +
                            '<td>' + 'Tanggal' + '</td>' + '<td>' + ':' + '</td>' +
                            '<td class="form-control">' + data.tgl_pemakaian + '</td>' + '</tr>' +
                            '<tr>' + '<td>' + 'Created' + '</td>' + '<td>' + ':' + '</td>' +
                            '<td class="form-control">' + data.created_by + '</td>' + '</tr>' +
                            '<tr>' + '<td>' + 'Updated' + '</td>' + '<td>' + ':' + '</td>' +
                            '<td class="form-control">' + data.modify_by + '</td>' + '</tr>' +
                            '<tr>' + '<td>' + 'Created at' + '</td>' + '<td>' + ':' + '</td>' +
                            '<td class="form-control">' + formattedCreatedAt + '</td>' + '</tr>';
                    });
                    info += '</table>';
                    modalContent.html(info);
                } else {
                    // Jika tidak ada data yang dipilih, tampilkan pesan kosong
                    modalContent.html('Tidak ada data yang dipilih.');
                }

                $('#karyawanModal').modal('show'); // Tampilkan modal
            });
        });

        $("#emp").change(function() {
            var emp = $("#emp").val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('DataApi') }}",
                data: {
                    _token: csrfToken,
                    emp: emp,
                },
                success: function(data) {
                    var options = '';
                    data.forEach(function(m) {
                        options += "<option value='" + m.nama + "'>" + m.nama + "</option>";
                    });
                    $("#nama").html(options);
                }
            });
        });

        $("#emp").change(function() {
            var sect = $("#emp").val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('DataApiSection') }}",
                data: {
                    _token: csrfToken,
                    emp: sect,
                },
                success: function(data) {
                    var options = '';
                    data.forEach(function(m) {
                        options += "<option value='" + m.kode_section + "'>" + m.kode_section +
                            "</option>";
                    });
                    $("#section").html(options);
                }
            });
        });
    </script>
