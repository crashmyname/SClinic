<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    
    <h4>Hari</h4>
    <p>Jam Digital: <b><span id="jam" style="font-size:24"></span></b></p>
            <h1 class="h3 mt-0 mb-0 text-gray-800">Data Medical Check Up</h1>
            <p class="mb-0">Berikut adalah halaman MCU</p>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Table Cover Page</h6>
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
                                                        <form class="form form-horizontal" action="" method="post"
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
                                                                            class="btn btn-primary me-1 mb-1"
                                                                            name="excel"
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
                    <!-- <a href="form_cover.php" class="btn btn-success float-right">Tambah</a> -->
                <!-- </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                            <!-- <input type="text" id="searchInput"> -->
                            <thead>
                                <tr align="center">
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>No Rekam Medis</th>
                                    <th>Nama Karyawan</th>
                                    {{-- <th>Section</th> --}}
                                    <th>Factory</th>
                                    <th>Tanggal Pemeriksaan</th>
                                    <th>Status Gizi</th>
                                    <th>Buta Warna</th>
                                    <th>Anamnesa</th>
                                    <!-- <th>Lab Test</th> -->
                                    <th>Radiology Test</th>
                                    <!-- <th>Saran</th> -->
                                    <th>Dr.</th>
                                    <th>Fitnes</th>
                                    <th>Ket.</th>
                                    <!-- <th width="100px">ACTION</th> -->
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
                            <p><a target="_blank" href="http://10.203.68.47:90/iseportal/">PT.Indonesia Stanley Electric</a>. Clinic System</p>
                        </div>
                    </div>
                </div>
            </footer>
</div>
<script>
    $(document).ready(function() {
    var dataTable = $('#dataTable').DataTable({
        serverSide: true,
        processing: true,
        responsive: true,
        select: true,
        ajax : "",
        // URL untuk meminta data dari server
        columns: [
            // Konfigurasi kolom
            { "data": null,"sortable": false, 
            render: function (data, type, row, meta) {
                 return meta.row + meta.settings._iDisplayStart + 1;
                }  
    },
            { data: "nik", name: "nik"},
            { data: "no_rm", name: "no_rm"},
            { data: "nama", name: "nama"},
            // { data: "kode_section", name: "kode_section"},
            { data: "factory", name: "factory" },
            { data: "tgl_pemeriksaan", name: "tgl_pemeriksaan" },
            { data: "status_gizi", name: "status_gizi"},
            { data: "buta_warna", name: "buta_warna"},
            { data: "anamnesa", name: "anamnesa"},
            { data: "radiology_test", name:"radiology_test"},
            { data: "dokter", name: "dokter"},
            { data: "fitness_s", name: "fitness_s"},
            { data: "keterangan", name: "keterangan"},
            // ...
        ],
        lengthMenu: [10, 25, 50, 100],
            dom: 'Blfrtip',
            buttons:[
                {
                    extend: 'copy',
                    text:'COPY',
                    exportOptions:{
                        columns:':visible',
                    columnDefs:[{
                        targets: -1,
                        visible: false
                    }]
                    }
                },
                {
                    extend: 'pdf',
                    text:'PDF',
                    exportOptions:{
                        columns:':visible',
                    columnDefs:[{
                        targets: -1,
                        visible: false
                    }]
                    }
                },
                {
                    extend: 'print',
                    text:'CETAK',
                    exportOptions:{
                        columns:':visible',
                    columnDefs:[{
                        targets: -1,
                        visible: false
                    }]
                    }
                },
                {
                    extend: 'csv',
                    text:'CSV',
                    exportOptions:{
                        columns:':visible',
                    columnDefs:[{
                        targets: -1,
                        visible: false
                    }]
                    }
                },
                {
                    extend: 'excel',
                    text:'EXCEL',
                    exportOptions:{
                        columns:':visible',
                    columnDefs:[{
                        targets: -1,
                        visible: false
                    }]
                    }
                },
                {
                    extend: 'colvis',
                    text:'COLUMN VISIBLE',
                    exportOptions:{
                        columns:':visible',
                    columnDefs:[{
                        targets: -1,
                        visible: false
                    }]
                    }
                }
            ]
    });
});

$("#emp").change(function(){
            // variabel dari nilai combo box kendaraan
            var emp = $("#emp").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil_data.php",
                data: "emp="+emp,
                success: function(data){
                   $("#nama").html(data);
                }
            });
        });

        $("#emp").change(function(){
            // variabel dari nilai combo box merk
            var sect = $("#emp").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil_sect.php",
                data: "emp="+sect,
                success: function(data){
                    $("#section").html(data);
                }
            });
        });
</script>