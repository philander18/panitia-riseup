<div class="header-nav-phil">
    <nav class="navbar-phil">
        <a href="#" class="navbar-logo-phil"><img src="<?= base_url(); ?>public/images/nav_logo.png" alt="Logo Rise Up"></a>
        <div class="navbar-nav-phil">
            <a href="<?= base_url(); ?>">Home</a>
            <?php if (in_array($akses, ["humas"])) { ?>
                <a href="<?= base_url(); ?>humas">Humas</a>
            <?php } ?>
        </div>
        <div class="navbar-extra-phil">
            <span><?= strtoupper($akses); ?></span>
            <a href="#" id="change-password"><i class="fa-solid fa-key"></i></a>
            <a href="<?= base_url(); ?>home/keluar" id="log-out"><i class="fa-solid fa-right-from-bracket"></i></a>
            <a href="#" id="hamburger-menu"><i class="fa-solid fa-bars"></i></a>
        </div>
    </nav>
    <div class="countdown-nav-phil">
        <div id="countdown"></div>
    </div>
</div>