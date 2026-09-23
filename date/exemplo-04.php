<?php
$data = new DateTimeImmutable(
    'now',
    new DateTimeZone('America/Sao_Paulo')
);

$formatador = new IntlDateFormatter(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN,
    "EEEE, d 'de' MMMM 'de' yyyy"
);

$dataFormatada = $formatador->format($data);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Data atual</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4f46e5, #9333ea);
        }

        .card {
            width: 360px;
            padding: 35px 25px;
            text-align: center;
            color: white;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
        }

        .icone {
            font-size: 48px;
            margin-bottom: 15px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 26px;
        }

        .data {
            font-size: 21px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .hora {
            margin-top: 15px;
            font-size: 16px;
            opacity: 0.85;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="icone">📅</div>

        <h1>Data de hoje</h1>

        <div class="data">
            <?= htmlspecialchars($dataFormatada, ENT_QUOTES, 'UTF-8') ?>
        </div>

        <div class="hora">
            <?= $data->format('H:i:s') ?>
        </div>
    </div>

</body>
</html>