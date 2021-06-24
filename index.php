<?php
require_once './currency.php';

$usd = currency("BRL");

$eur = currency("EUR");

$btc = currency("BTC");

// set the default timezone to use
date_default_timezone_set('UTC');

$today = date('l jS \of F Y ');

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>MONENCY</title>
</head>

<body>
    <div class="conteiner title text-center text-success p-5">
        <h1>MONENCY</h1>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="card text-dark bg-light mb-3 m-5 shadow" style="max-width: 18rem;">
            <div class="card-header">
                <h1 class="text-center">DOLAR</h1>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <?php echo "$today"; ?>
                </h5>
                <h3 class="card-text text-center ">
                    <?php echo "$1 = R$$usd"; ?>
                </h3>
            </div>
        </div>
        <div class="card text-dark bg-light mb-3 m-5 shadow" style="max-width: 18rem;">
            <div class="card-header">
                <h1 class="text-center">EURO</h1>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <?php echo "$today"; ?>
                </h5>
                <h3 class="card-text text-center">
                    <?php echo "€1 = R$$eur"; ?>
                </h3>
            </div>
        </div>
        <div class="card text-dark bg-light mb-3 m-5 shadow" style="max-width: 18rem;">
            <div class="card-header">
                <h1 class="text-center">BITCOIN</h1>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <?php echo "$today"; ?>
                </h5>
                <h3 class="card-text text-center">
                    <?php echo "₿1 = R$$btc"; ?>
                </h3>
            </div>
        </div>
    </div>
</body>

</html>