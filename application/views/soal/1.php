<div class="row justify-content-center">
    <div class="col-4 text-center">
        <h1><?= $judul; ?></h1>
        <p>Masukkan jumlah orang, untuk menghitung berapa kali berjabat tangan</p>
        <form action="" method="POST">
            <div class="row">
                <div class="col-8">
                    <input class="form-control" type="text" name="orang" placeholder="Masukkan jumlah orang ...">
                </div>
                <div class="col">
                    <button class="btn btn-danger mb-2" name="generate">Generate</button>
                </div>
            </div>
        </form>
        <?php if (isset($_POST['generate'])) : ?>
            <?php
            $orang = $_POST['orang'];
            function jabatTangan($orang)
            {
                $jabatTangan = 0;
                for ($i = 0; $i < $orang; $i++) {
                    $jabatTangan += $i;
                }
                return $jabatTangan;
            }
            ?>
            <p>Jumlah Jabat Tangan : <strong><?= jabatTangan($orang); ?></strong></p>
        <?php endif; ?>
    </div>
</div>