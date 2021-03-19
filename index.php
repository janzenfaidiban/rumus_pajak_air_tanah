<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Nilai Air</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class=" p-0 m-0">

    <div class="container-fluid my-3">
        <!-- start .row  -->
        <div class="row">
            <?php require_once('masukan.php') ?>
            <?php require_once('tampil.php') ?>
        </div>
        <!-- end .row  -->
    </div>

    <?php require_once('fna.php') ?>
    <?php require_once('penagihan.php') ?>

</body>

</html>