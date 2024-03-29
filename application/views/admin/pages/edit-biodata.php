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
    <title>Curiculum Vitae</title>
</head>
<body>

    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    
        <?php include "navbar.php" ?>
        
        <?php include "sidebar.php" ?>

        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Bioadata</h2>
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
								<h5 style="display:inline-block; ">Edit Biodata</h5>
							</div>	
							<!-- form start -->     
                            <div class="container mt-2 mb-3">
                                <form action="<?= base_url('admin/edit');?>" method="post" enctype="multipart/form-data">
                                    <input name="id" type="hidden" class="form-control"  value="<?php echo $biodata->id ?>">
                                    <div class="form-group">
                                        <label for="Nama Lengkap">Nama Lengkap</label>
                                        <input name="nama_lengkap" type="text" class="form-control"  value="<?php echo $biodata->nama ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_lengkap') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama Panggilan">Nama Panggilan</label>
                                        <input name="nama_panggilan" type="text" class="form-control"  value="<?php echo $biodata->nama_pendek ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_panggilan') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TTL">TTL</label>
                                        <input name="ttl" type="text" class="form-control" value="<?php echo $biodata->ttl ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('ttl') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Jenis Kelamin">Jenis Kelamin</label>
                                        <input name="jk" type="text" class="form-control"  value="<?php echo $biodata->jenis_kelamin ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jk') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NO. Telp">NO. Telp</label>
                                        <input name="telp" type="text" class="form-control"  value="<?php echo $biodata->telpon ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('telp') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Alamat">Alamat</label>
                                        <input name="alamat" type="text" class="form-control"  value="<?php echo $biodata->alamat ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Agama">Agama</label>
                                        <input name="agama" type="text" class="form-control"  value="<?php echo $biodata->agama ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('agama') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">email</label>
                                        <input name="email" type="email" class="form-control"  value="<?php echo $biodata->email ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Resume">Resume</label>
                                        <textarea name="resume"class="form-control" ><?php echo $biodata->resume ?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('resume') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Foto">Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                        <input type="hidden" name="old_image" value="<?php echo $biodata->foto ?>"/>
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('foto') ?>
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