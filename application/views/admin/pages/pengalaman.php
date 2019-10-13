<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/vendor/bootstrap/css/bootstrap.min.css');?>">
    <link href="<?= base_url('assets/css/admin/vendor/fonts/circular-std/style.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/libs/css/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/vendor/fonts/fontawesome/css/fontawesome-all.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/vendor/charts/chartist-bundle/chartist.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/vendor/charts/morris-bundle/morris.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/vendor/charts/c3charts/c3.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin/vendor/fonts/flag-icon-css/flag-icon.min.css');?> ">
    <title>Curiculum Vitie</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    
        <?php include "navbar.html" ?>
        
        <?php include "sidebar.php" ?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Pengalaman</h2>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 style="display:inline-block; ">Pengalaman</h5>
                                <button style="float: right" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span> Tambah Pengalaman</button>
                            </div>	
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Tahun</th>
                                                <th>Keterangan</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($pengalaman as $exp) {?>
                                            <tr>
                                                <td><?= $exp->judul ?></td>
                                                <td><?= $exp->tahun ?></td>
                                                <td><?= $exp->keterangan ?></td>
                                                <td>
                                                    <a href="<?= site_url('pengalaman/edit/'.$exp->id) ?>" class="btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                        Edit</a>
                                                    <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="<?= base_url('pengalaman/delete/'.$exp->id)?>"  class="btn btn-danger mt-1">
                                                        <i class="fa fa-trash"></i>
                                                        Hapus</a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- modal input -->
		<div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Barang Baru</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url('pengalaman/tambah');?>" method="post">
							<div class="form-group">
								<label>Judul</label>
								<input name="judul" type="text" class="form-control" placeholder="Nama Lengkap .." >
							</div>
							<div class="form-group">
								<label>Tahun</label>
								<input name="tahun" type="text" class="form-control" placeholder="Nama Panggilan ..">
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<input name="ket" type="text" class="form-control" placeholder="TTL ..">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
        </div>
       
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets/css/admin/vendor/jquery/jquery-3.3.1.min.js');?>"></script>
    <script src="<?= base_url('assets/css/admin/vendor/bootstrap/js/bootstrap.bundle.js');?>"></script>
    <script src="<?= base_url('assets/css/admin/vendor/slimscroll/jquery.slimscroll.js');?>"></script>
    <script src="<?= base_url('assets/css/admin/vendor/multi-select/js/jquery.multi-select.js');?>"></script>
    <script src="<?= base_url('assets/css/admin/libs/js/main-js.js');?>"></script>
    <script src="<?= base_url('cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url('assets/css/admin/datatables/js/dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?= base_url('cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?= base_url('assets/css/admin/datatables/js/buttons.bootstrap4.min.js');?>"></script>
    <script src="<?= base_url('assets/css/admin/datatables/js/data-table.js');?>"></script>
    <script src="<?= base_url('cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js');?>"></script>
    <script src="<?= base_url('cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js');?>"></script>
    <script src="<?= base_url('cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js');?>"></script>
    <script src="<?= base_url('cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js');?>"></script>
    <script src="<?= base_url('cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js');?>"></script>
    <script src="<?= base_url('cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js');?>"></script>
    <script src="<?= base_url('cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js');?>"></script>
    <script src="<?= base_url('cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js');?>"></script>
    <script src="<?= base_url('cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js');?>"></script>
</body>
 
</html>