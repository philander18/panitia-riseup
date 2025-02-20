<?= $this->extend('Templates/index'); ?>
<?= $this->section('page-content'); ?>
<?= $this->include('Templates/nav'); ?>
<div class="page-phil">
    <section class="satu-page">
        <div class="layout-contents layout-hero">
            <div class="judul-hero layout-subcontents">
                <h5>Area Judul</h5>
            </div>
            <div class="waktu-hero layout-subcontents">
                <h5>Area Waktu dan Tempat</h5>
            </div>
            <div class="pembicara-hero layout-subcontents">
                <h5>Area Pembicara</h5>
            </div>
            <div class="tema-hero layout-subcontents">
                <h5>Area Tema</h5>
            </div>
        </div>
    </section>
    <section class="satu-page">
        <div class="layout-contents">
            <h5>Area RAB</h5>
        </div>
    </section>
    <section class="satu-page">
        <div class="layout-contents">
            <h5>Area Acara</h5>
        </div>
    </section>
</div>
<div class="satu-page footer-page">
    <div class="layout-contents">
        <h5>Footer</h5>
    </div>
</div>
<?= $this->endSection(); ?>