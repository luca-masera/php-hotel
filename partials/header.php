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
        <select class="form-select w-25" aria-label="Default select example" name='parking'>

            <option value='1'>Hotel con parcheggio</option>
            <option value='0'>Hotel senza parcheggio</option>
        </select>
        <button type="submit">Cerca</button>
    </form>

</header>