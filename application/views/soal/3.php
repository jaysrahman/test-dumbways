<div class="row justify-content-center">
    <div class="col-4 text-center">
        <h1><?= $judul; ?></h1>
        <p>Masukkan Panjang</p>
        <form action="" method="POST">
            <div class="row justify-content-center">
                <div class="col-4">
                    <input class="form-control" type="text" name="panjang" placeholder="Panjang...">
                </div>
                <div class="col-">
                    <button class="btn btn-danger mb-2" name="cek">Cek</button>
                </div>
            </div>
        </form>
        <?php if (isset($_POST['cek'])) : ?>
            <?php
            $panjang = $_POST['panjang'];
            function cetak_gambar($panjang)
            {
                for ($a = $panjang; $a > 0; $a--) {
                    for ($i = 0; $i < $panjang; $i++) {
                        if ($i != 0 && $i != $panjang - 1) {
                            if ($a == round($panjang / 2)) {
                                echo "* ";
                            } else {
                                echo "= ";
                            }
                        } else {
                            echo "* ";
                        }
                    }
                    echo "<br>";
                }
            }
            ?>
            <?php if ($panjang % 2 === 1) : ?>
                <p>Hasil : </p>
                <p>
                    <strong><?= cetak_gambar($panjang); ?></strong>
                </p>
            <?php else : ?>
                <p>Angka Harus Ganjil !!!</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>