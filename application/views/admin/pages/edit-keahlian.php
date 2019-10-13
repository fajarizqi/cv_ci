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

        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Keahlian</h2>
                        </div>
                    </div>
                </div>
				<div class="row">
					<!-- ============================================================== -->
					<!-- valifation types -->
					<!-- ============================================================== -->
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
							<div class="card-header">
								<h5 style="display:inline-block; ">Edit Keahlian</h5>
							</div>	
							<!-- form start -->
                            <div class="container mt-2 mb-3">
                                <form action="<?= base_url('keahlian/edit');?>" method="post">
                                    <input name="id" type="hidden" class="form-control"  value="<?php echo $keahlian->id ?>">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input name="judul" type="text" class="form-control"  value="<?php echo $keahlian->judul ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('judul') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Panggilan</label>
                                        <input name="icon" type="text" class="form-control"  value="<?php echo $keahlian->icon ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('icon') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>TTL</label>
                                        <input name="ket" type="text" class="form-control" value="<?php echo $keahlian->keterangan ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('ket') ?>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary float-right" value="Simpan">
                                </form>
                            </div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end valifation types -->
					<!-- ============================================================== -->
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