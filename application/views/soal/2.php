<div class="row justify-content-center">
    <div class="col-4 text-center">
        <h1><?= $judul; ?></h1>
        <p>array = [4,9,10,13,21]</p>
        <?php
        $orang = [4, 9, 10, 13, 21];
        $hasil = [];
        function hitungIsiArray($v1, $v2)
        {
            return $v1 + $v2;
        }
        ?>
        <?php for ($i = 0; $i < count($orang); $i++) : ?>
            <p><?= $orang[$i]; ?> : <strong><?= $hasil[$i] = array_reduce($orang, "hitungIsiArray") - $orang[$i]; ?></strong></p>
        <?php endfor; ?>
        <p>Angka Terbesar = <strong><?= max($hasil); ?></strong></p>
        <p>Angka Terkecil = <strong><?= min($hasil); ?></strong></p>
    </div>
</div>