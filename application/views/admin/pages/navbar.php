
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navtop" style="border:0;">
        <a class="navbar-brand" href="/index.php">Curiculum Vitae</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item dropdown nav-user">
                    <div>
                        <span><?= $navbar['nama_pendek'] ?></span>
                        <img src="<?= base_url('assets/images/biodata/').$navbar["foto"] ?>" alt="" class="user-avatar-md rounded-circle">   
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>