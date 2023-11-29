<?php include __DIR__ . '/../model/dati.php';
//var_dump($hotels)
?>

<main>


    <?php foreach ($hotels as $hotel) {
        echo '<div>' . $hotel['name'] . $hotel['description'] . $hotel['parking'] . $hotel['vote'] . $hotel['distance_to_center'] . '</div>';
    }

    ?>

</main>