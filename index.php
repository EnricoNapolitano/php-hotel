<?php
    // Hotels' datas
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?> 



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <table class="table table-hover text-center mt-5">
        <thead>
            <tr>
                <th scope="col">NOME</th>
                <th scope="col">DESCRIZIONE</th>
                <th scope="col">PARCHEGGIO</th>
                <th scope="col">VOTO</th>
                <th scope="col">DISTANZA DAL CENTRO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hotels as $value) : ?>
            <tr>
            <td> <?= $value['name'] ?> </td>
            <td> <?= $value['description'] ?> </td>
            <td> <?= $value['parking'] ? 'si' : 'no' ?> </td>
            <td> <?= $value['vote'] ?>/5</td>
            <td> <?= $value['distance_to_center'] ?> km </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
    </div>

</body>
</html>