<div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <h4>
            hariindo
        </h4>
        <p>Jam Digital: <b><span id="jam" style="font-size:24"></span></b></p>
        <h1 class="h3 mt-0 mb-0 text-gray-800">Data HW</h1>
        <p class="mb-0">Berikut adalah halaman HW</p>
        <!-- @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('update'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('update') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
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
                                <h5 class="modal-title">Input Data HW</h5>
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
                                                    <form class="form form-horizontal" id="add_hw" method="POST"
                                                        enctype="multipart/form-data" action="">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>NIK</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input list="datalist" name="nik" id="emp"
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
                                                                    <label>Tanggal</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="date" id="first-name"
                                                                        class="form-control" name="tanggal">
                                                                </div>
                                                                <div class="col-sm-12 d-flex justify-content-end">
                                                                    <button type="submit" class="btn btn-primary me-1 mb-1"
                                                                        name="simpan" id="btnAddHW">Submit</button>
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
                                                    <form class="form form-horizontal" id="add_hwm"
                                                        action="" method="POST"
                                                        enctype="multipart/form-data">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>NIK</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="first-name"
                                                                        class="form-control" name="nik"
                                                                        placeholder="Masukan NIK">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Nama</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="first-name"
                                                                        class="form-control" name="nama"
                                                                        placeholder="Masukan Nama">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Section</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="first-name"
                                                                        class="form-control" name="section"
                                                                        placeholder="Masukan Nama Section">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Tanggal</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="date" id="first-name"
                                                                        class="form-control" name="tanggal">
                                                                </div>
                                                                <div class="col-sm-12 d-flex justify-content-end">
                                                                    <button type="submit"
                                                                        class="btn btn-primary me-1 mb-1" name="simpan"
                                                                        id="btnAddHWM">Submit</button>
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
                                                    <form class="form form-horizontal" action=""
                                                        method="post" id='filehw' enctype="multipart/form-data">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>FILE EXCEL</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="file" id="first-name"
                                                                        class="form-control" name="importhw" required>
                                                                </div>
                                                                <div class="col-sm-12 d-flex justify-content-end">
                                                                    <button type="submit"
                                                                        class="btn btn-primary me-1 mb-1" name="excel"
                                                                        id='importHw'>Submit</button>
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
                <button class="btn btn-outline-warning" data-bs-toggle="modal" id="modalupdatehw" title="Ubah Data"><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path
                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd"
                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg> Update HW</button>
                <!-- BorderLess Modal Modal -->
                <div class="modal fade text-left modal-lg centered" id="modalEditHw" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Data HW</h5>
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
                                                <h4 class="card-title">Form HW</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form class="form form-horizontal" id="formuphw" action=""
                                                        method="POST" enctype="multipart/form-data">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>NIK</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="nik"
                                                                        class="form-control" name="nik"
                                                                        value="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Nama Karyawan</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="namahw"
                                                                        class="form-control" name="nama"
                                                                        value="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Section</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="sectionhw"
                                                                        class="form-control" name="section"
                                                                        value="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Tanggal</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="date" id="tanggalhw"
                                                                        class="form-control" name="tanggal"
                                                                        value="">
                                                                </div>
                                                                <div class="col-sm-12 d-flex justify-content-end">
                                                                    <button type="submit"
                                                                        class="btn btn-primary me-1 mb-1" name="update"
                                                                        id="btnUpdatehw">Submit</button>
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
                <button type="submit" id="deletehw" title="delete hw" class="btn icon btn-outline-danger"><i
                        class="bi bi-trash"></i> Hapus</button>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Karyawan</th>
                                    <th>Section</th>
                                    <th>Tanggal</th>
                                    <th>Bulan</th>
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
                var prefix = '<?= $_ENV['ROUTE_PREFIX']?>';
                var dataTable = $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    select: true,
                    ajax: prefix+'/data-hw',
                    columns: [{
                            data: 'id_hw',
                            name: 'id_hw',
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: "nik",
                            name: "nik"
                        },
                        {
                            data: "nama",
                            name: "nama"
                        },
                        {
                            data: "section",
                            name: "section"
                        },
                        {
                            data: "tanggal",
                            name: "tanggal"
                        },
                        {
                            data: "tanggal",
                            name: "tanggal",
                            render: function(data, type, row) {
                                var date = new Date(data);
                                var month = date.toLocaleString('default', {
                                    month: 'long'
                                });
                                return month;
                            }
                        },
                        // {
                        //     data: 'id_hw',
                        //     name: 'id_hw',
                        //     // orderable: false,
                        //     render: function(data, type, row) {
                        //         var editPemakaianHW = "" + '/' + row.id_hw;
                        //         var csrf = '@csrf';
                        //         return `
                //                 <button data-id="${data}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                //             `;
                        //         console.log(data);
                        //     },
                        // },
                    ],
                    lengthMenu: [10, 25, 50, 100, 100000],
                    dom: 'Blfrtip',
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
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#modalupdatehw').on('click', function(e) {
                    var select = dataTable.rows({
                        selected: true
                    }).data();
                    var modalHW = $('#selectedData');
                    var nik = $('#nik');
                    var nama = $('#namahw');
                    var section = $('#sectionhw');
                    var tanggal = $('#tanggalhw');
                    modalHW.empty();
                    if (select.length > 0) {
                        nik.val(select[0].nik);
                        nama.val(select[0].nama);
                        section.val(select[0].section);
                        tanggal.val(select[0].tanggal);
                        $('#modalEditHw').modal('show');
                    } else {
                        Swal.fire({
                            icon: 'info',
                            title: 'Info',
                            text: 'No data selected.',
                        });
                    }
                });
                $('#btnUpdatehw').on('click', function(e) {
                    var select = dataTable.rows({
                        selected: true
                    }).data();
                    e.preventDefault();
                    if (select.length == 0) {
                        Swal.fire({
                            title: 'Error',
                            icon: 'error',
                            text: 'Tidak ada data yang dipilih!',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                        });
                        return;
                    }
                    var row = select[0];
                    var idHW = row.id_hw;
                    var editPemakaianHW = "" + '/' + idHW;
                    var formID = '#formuphw';
                    console.log(idHW);
                    Swal.fire({
                        title: 'Update',
                        icon: 'warning',
                        text: 'Apakah yakin data ingin diubah?',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Update!!',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var formHW = new FormData($(formID)[0]);
                            $.ajax({
                                type: 'POST',
                                url: editPemakaianHW,
                                data: formHW,
                                contentType: false,
                                processData: false,
                                dataType: 'json',
                                success: function(response) {
                                    console.log(response);
                                    console.log('CSRF Token:', $(
                                            'meta[name="csrf-token"]')
                                        .attr(
                                            'content'));
                                    if (response.status === 'success') {
                                        Swal.fire({
                                            title: 'success',
                                            icon: 'success',
                                            text: 'Data berhasil diupdate',
                                            showConfirmButton: false,
                                            timer: 1500,
                                            timerProgressBar: true,
                                        })
                                        reloadData();
                                    } else {
                                        Swal.fire({
                                            title: 'error',
                                            icon: 'Error',
                                            text: 'Data gagal diupdate',
                                            showConfirmButton: false,
                                            timer: 1500,
                                            timerProgressBar: true,
                                        })
                                    }
                                },
                                error: function(error) {
                                    console.error(error);
                                    Swal.fire({
                                        title: 'Error',
                                        icon: 'error',
                                        text: 'Terjadi kesalahan saat memperbarui data',
                                        showConfirmButton: false,
                                        timer: 1500,
                                        timerProgressBar: true,
                                    });
                                }
                            })
                        }
                    })
                });

                function validateForm(formId) {
                    var nik = $('#formuphw input[name=nik]').val();
                    var nama = $('#formuphw input[name=nama]').val();
                    var section = $('#formuphw input[name=section]').val();
                    var tanggal = $('#formuphw input[name=tanggal]').val();

                    if (nik && nama && section && tanggal) {
                        return true;
                    } else {
                        return false;
                    }
                }
                $('#deletehw').on('click', function(e) {
                    var select = dataTable.rows({
                        selected: true
                    }).data();
                    if (select.length > 0) {
                        Swal.fire({
                            title: 'Delete',
                            icon: 'warning',
                            text: 'Yakin ingin dihapus?',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, Hapus!!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                select.each(function(data) {
                                    const idHW = data.id_hw;
                                    $.ajax({
                                        type: 'DELETE',
                                        url: "" + '/' + idHW,
                                        data: {
                                            _token: ''
                                        },
                                        success: function(response) {
                                            if (response.status === 'success') {
                                                // Swal.fire({
                                                //     title: 'Success',
                                                //     icon: 'success',
                                                //     text: 'Data Berhasil dihapus',
                                                //     timer: 1500,
                                                //     timerProgressBar: true,
                                                // });
                                                const Toast = Swal.mixin({
                                                    toast: true,
                                                    position: "top-end",
                                                    showConfirmButton: false,
                                                    timer: 1500,
                                                    timerProgressBar: true,
                                                });
                                                Toast.fire({
                                                    icon: 'success',
                                                    title: 'Success',
                                                    text: 'Data berhasil dihapus',
                                                });
                                                reloadData();
                                            } else {
                                                Swal.fire({
                                                    title: 'error',
                                                    icon: 'error',
                                                    text: 'Data gagal dihapus',
                                                    timer: 1500,
                                                    timerProgressBar: true,
                                                })
                                            }
                                        }
                                    })
                                })
                            }
                        })
                    } else {
                        Swal.fire({
                            title: 'info',
                            icon: 'info',
                            text: 'No Data selected',
                        });
                    }
                });
                $('#btnAddHW').on('click', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Input',
                        text: 'Are you sure want input HW?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Submit',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'POST',
                                url: '',
                                data: $('#add_hw').serialize(),
                                dataType: 'json',
                                success: function(response) {
                                    console.log(response);
                                    console.log('CSRF Token:', $('meta[name="csrf-token"]')
                                        .attr(
                                            'content'));
                                    if (response.status === 'success') {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success',
                                            text: 'Input data HW successfully',
                                            showConfirmButton: false,
                                            timer: 1000,
                                            timerProgressBar: true,
                                        });
                                        reloadData();
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: 'Failed input HW',
                                        });
                                    }
                                },
                                error: function(error) {
                                    console.error(error)
                                }
                            })
                        }
                    })
                })
                $('#btnAddHWM').on('click', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Input',
                        text: 'Are you sure want input HW?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Submit',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'POST',
                                url: '',
                                data: $('#add_hwm').serialize(),
                                dataType: 'json',
                                success: function(response) {
                                    console.log(response);
                                    console.log('CSRF Token:', $('meta[name="csrf-token"]')
                                        .attr(
                                            'content'));
                                    if (response.status === 'success') {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success',
                                            text: 'Input data HW successfully',
                                            showConfirmButton: false,
                                            timer: 1000,
                                            timerProgressBar: true,
                                        });
                                        reloadData();
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: 'Failed input HW',
                                        });
                                    }
                                },
                                error: function(error) {
                                    console.error(error)
                                }
                            })
                        }
                    })
                })

                function reloadData() {
                    dataTable.ajax.reload();
                }
                $('#importHw').on('click', function(e) {
                    e.preventDefault();
                    var formImport = new FormData($('#filehw')[0]);
                    console.log(formImport);
                    if (formImport == '' || formImport == null) {
                        Swal.fire({
                            icon: 'error',
                            text: 'File not found',
                            title: 'Error'
                        });
                    } else {
                        $.ajax({
                            type: 'POST',
                            url: '',
                            data: formImport,
                            contentType: false,
                            processData: false,
                            enctype: 'multipart/form-data',
                            dataType: 'json',
                            success: function(response) {
                                if (response.status === 200) {
                                    Swal.fire({
                                        icon: 'success',
                                        text: 'Import Successfully',
                                        title: 'Success',
                                    });
                                    // reloadData();
                                } else if (response.status === 404) {
                                    // Tangkap pesan kesalahan validasi dan tampilkan dengan SweetAlert
                                    if (response.errors && response.errors.importhw) {
                                        let errorMessage = "Validation Error: ";
                                        // Periksa jika response.errors.importhw adalah array
                                        if (Array.isArray(response.errors.importhw)) {
                                            $.each(response.errors.importhw, function(index,
                                                value) {
                                                errorMessage += value + " ";
                                            });
                                        } else {
                                            // Jika bukan array, mungkin hanya berupa pesan tunggal
                                            errorMessage += response.errors.importhw;
                                        }

                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: errorMessage
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: 'Failed Import or file not found'
                                        });
                                    }
                                }
                            },
                            error: function(error) {
                                console.error(error);
                            }
                        })

                    }
                });
            });

            $("#emp").change(function() {
                var emp = $("#emp").val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "",
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
                    url: "",
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