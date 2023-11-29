<?php include __DIR__ . '/../model/dati.php';
//var_dump($hotels)
if (isset($_GET['parking'])) {
    $parking = $_GET['parking'];
    $temp_array = [];

    foreach ($hotels as $hotel) {

        if ($hotel['parking'] === (bool) $parking) {
            $temp_array[] = $hotel;
        }

    }
    $hotels = $temp_array;
}
?>


<header>
    <form action="index.php" methods="GET">
        <select class="form-select w-25" aria-label="Default select example">

            <option value="1" name='parking'>Hotel con parcheggio</option>
            <option value="2" name='parking'>Hotel senza parcheggio</option>
        </select>
        <button type="submit">Cerca</button>
    </form>

</header>