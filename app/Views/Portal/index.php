<?= $this->extend('Templates/index'); ?>
<?= $this->section('page-content'); ?>
<form autocomplete="off" action="<?= base_url(); ?>" method="POST">
    <div class="container-fluid portal">
        <div class="form-portal">
            <div class="logo-portal mb-2">
                <img src="<?= base_url(); ?>public/images/logo.png" alt="Logo Rise Up" width="100%">
            </div>
            <input class="form-control" type="password" name="kode" placeholder="Masukkan Kode" aria-label="Kode">
            <button type="Submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>