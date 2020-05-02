<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/logo-dumbways.png'); ?>" width="30" height="30" class="d-inline-block align-top mt-1" alt="">
            <span class="menu-collapsed">Test Dumbways</span>
        </a>
    </nav>


    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MENU</small>
                </li>
                <?php foreach ($menu as $m) : ?>
                    <?php if ($m['nama'] == $judul) : ?>
                        <a href="<?= base_url('menu/' . $m['url']) ?>" class="menu-item-active list-group-item list-group-item-action flex-column align-items-start">
                        <?php else : ?>
                            <a href="<?= base_url('menu/' . $m['url']) ?>" class="menu-item list-group-item list-group-item-action flex-column align-items-start">
                            <?php endif; ?>
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span><?= $m['nama']; ?></span>
                            </div>
                            </span>
                            </a>
                        <?php endforeach; ?>
            </ul>
            <div class="row">
                <div class="col">
                    <div class="copyright fixed-bottom text-white ml-5">© Jays 2020</div>
                </div>
            </div>
        </div>

        <div class="col">