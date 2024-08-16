<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <h4>
        Hello
    </h4>
    <p>Jam Digital: <b><span id="jam" style="font-size:24"></span></b></p>
    <h1 class="h3 mt-0 mb-0 text-gray-800">Data Obat</h1>
    <p class="mb-0">Berikut adalah halaman Obat</p>
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
                            <h5 class="modal-title">Input Data Obat</h5>
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
                                            <h4 class="card-title">Form Obat</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal" method="post"
                                                    enctype="multipart/form-data" action="">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Nama Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="first-name"
                                                                    class="form-control" name="nama_obat"
                                                                    placeholder="Masukan Nama Obat">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Keluhan</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="first-name"
                                                                    class="form-control" name="keluhan"
                                                                    placeholder="Masukan Nama Keluhan">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Dosis</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="text" id="first-name"
                                                                    class="form-control" name="dosis"
                                                                    placeholder="Masukan Nama dosis">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Jenis</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select type="text" name="jenis" id="jenis"
                                                                    class="form-control" required>
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="Kapsul">Kapsul</option>
                                                                    <option value="Tablet">Tablet</option>
                                                                    <option value="Pcs">Pcs</option>
                                                                    <option value="Box">Box</option>
                                                                    <option value="Fls">Fls</option>
                                                                    <option value="Kolf">Kolf</option>
                                                                    <option value="Botol">Botol</option>
                                                                    <option value="Tube">Tube</option>
                                                                    <option value="Roll">Roll</option>
                                                                    <option value="Pack">Pack</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Factory</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select type="text" name="factory" id="factory"
                                                                    class="form-control" required>
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="1">Factory 1</option>
                                                                    <option value="2">Factory 2</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Foto Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input class="form-control" type="file"
                                                                    id="formFile" name="foto">
                                                            </div>
                                                            <div class="col-sm-12 d-flex justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1" name="simpan"
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
            <!-- </div> -->
            <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                data-bs-target="#border-less5">
                Tambah Stock Obat
            </button>
            <!-- BorderLess Modal Modal -->
            <div class="modal fade text-left modal-lg centered" id="border-less5" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Data Stock</h5>
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
                                            <h4 class="card-title">Form Stock Obat</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal" method="post"
                                                    enctype="multipart/form-data" action="">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Nama Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select type="text" name="id_obat"
                                                                    class="form-control" required>
                                                                    <option value=""> - </option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Stock Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="number" id="first-name"
                                                                    class="form-control" name="stock"
                                                                    placeholder="Masukan Stock Obat">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Harga</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="number" id="first-name"
                                                                    class="form-control" name="harga"
                                                                    placeholder="Masukan Harga">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Factory</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <select type="text" name="factory" id="factory"
                                                                    class="form-control" required>
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="1">Factory 1</option>
                                                                    <option value="2">Factory 2</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Tanggal Masuk Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="date" id="first-name"
                                                                    class="form-control" name="tgl_in_obat">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Tanggal Kadaluwarsa Obat</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <input type="date" id="first-name"
                                                                    class="form-control" name="tgl_kadaluwarsa">
                                                            </div>
                                                            <div class="col-sm-12 d-flex justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1"
                                                                    name="simpanstock"
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Keluhan</th>
                                <th>Stock</th>
                                <th>Jenis</th>
                                <th>Dosis</th>
                                <th>Factory</th>
                                <th>Gambar</th>
                                <th width="100px">ACTION</th>
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
                                Electric</a>.
                            Clinic System</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
        var prefix = "<?= $_ENV['ROUTE_PREFIX']?>";
        var dataTable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: prefix+'/obat',
            columns:[
                {
                    data: 'id_obat',
                    name: 'id_obat',
                    render:function(data, type, row, meta){
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                },
                {data: 'nama_obat', name: 'nama_obat'},
                {data: 'keluhan', name: 'keluhan'},
                {data: 'stock', name: 'stock'},
                {data: 'jenis', name: 'jenis'},
                {data: 'dosis', name: 'dosis'},
                {data: 'factory', name: 'factory'},
                {data: 'foto', name: 'foto'},
                {
                    data: 'id_pemakaian',
                    name: 'action',
                    // orderable: false,
                    render: function(data, type, row) {
                        var editPemakaianRoute = "";
                        return `
                            <a href="${editPemakaianRoute}/${data}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                            <button data-id="${data}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        `;
                    },
                },
            ],
            lengthMenu: [10, 25, 50, 100],
            dom: 'Blfrtip',
            // select: true,
            buttons:[
                {
                    extend: 'copy',
                    text:'COPY',
                    exportOptions:{
                        columns:[0,1,2,3,4,5,6,7]
                    }
                },
                {
                    extend: 'pdf',
                    text:'PDF',
                    exportOptions:{
                        columns:[0,1,2,3,4,5,6,7]
                    }
                },
                {
                    extend: 'print',
                    text:'CETAK',
                    exportOptions:{
                        columns:[0,1,2,3,4,5,6,7]
                    }
                },
                {
                    extend: 'csv',
                    text:'CSV',
                    exportOptions:{
                        columns:[0,1,2,3,4,5,6,7]
                    }
                },
                {
                    extend: 'excel',
                    text:'EXCEL',
                    exportOptions:{
                        columns:[0,1,2,3,4,5,6,7]
                    }
                },
                {
                    extend: 'colvis',
                    text:'COLUMN VISIBLE',
                    exportOptions:{
                        columns:[0,1,2,3,4,5,6,7]
                    }
                }
            ]
        });
    });
    </script>
