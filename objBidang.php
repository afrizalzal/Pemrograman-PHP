<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> AFRIZAL | TUGAS 5 PHP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<style>
    .card {
    box-shadow: 39px 21px;
    border-radius: 10px;
    padding: 30px;
    background-color: maroon;
    }
    .jumbotron {
    padding: 40px;
    background-color: maroon;
    border-radius:20px;
    text-align: center;
    font-size: 20px;
    color: white;
    }
    </style>

<body>
    <article class="card">
        <div class="jumbotron">
            <h3 class="text-center"> Daftar Bidang</h3>
        </div>
    <?php
    require_once 'Lingkaran.php';
    require_once 'PersegiPanjang.php';
    require_once 'Segitiga.php';

    $bdg1 = new Lingkaran(7);
    $bdg2 = new PersegiPanjang(10,15);
    $bdg3 = new Segitiga(5,10,10);
    $thead = ['No', 'Nama Bidang', 'Luas Bidang', 'Keliling Bidang', 'Keterangan'];
    
    $bidang =[$bdg1,$bdg2,$bdg3];
    ?>
        <table class="table table-info" style="width: 80%; text-align: center;">
            <thead>
                <tr>
                    <?php
                foreach ($thead as $th) { ?>
                    <th><?= $th ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
            $no = 1;
            foreach ($bidang as $dang) { ?>
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $dang->namaBidang(); ?></td>
                    <td><?= $dang->keterangan(); ?></td>
                    <td><?= $dang->luasBidang(); ?> Cm</td>
                    <td><?= $dang->kelilingBidang(); ?> Cm</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
</body>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</html>