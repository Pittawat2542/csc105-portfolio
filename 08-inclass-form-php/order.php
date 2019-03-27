<!DOCTYPE html>
<html lang="en">

<?php
define("TAX", 0.10);

$numberOfBicycle = $_POST["numberOfBicycle"];
$priceOfBicycle = $_POST["priceOfBicycle"];
$numberOfCar = $_POST['numberOfCar'];
$priceOfCar = $_POST['priceOfCar'];
$numberOfTruck = $_POST['numberOfTruck'];
$priceOfTruck = $_POST['priceOfTruck'];

if (isset($numberOfBicycle) && isset($priceOfBicycle) && isset($numberOfCar) && isset($priceOfCar) && isset($numberOfTruck) && isset($priceOfTruck)) {
    if (is_numeric($numberOfBicycle) && is_numeric($priceOfBicycle) && is_numeric($numberOfCar) && is_numeric($priceOfCar) && is_numeric($numberOfTruck) && is_numeric($priceOfTruck)) {
        $subtotal = ($numberOfBicycle * $priceOfBicycle) + ($numberOfCar * $priceOfCar) + ($numberOfTruck * $priceOfTruck);
        $total = $subtotal + ($tax * $subtotal);
    } else {
        $error = "Value must be number!";
    }
} else {
    $error = "Value must be set!";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Summary</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">You ordered bicycle, car and truck.</h1>
            <hr class="my-4">
            <p class="lead"><?php echo $numberOfBicycle; ?> Bicycles, <?php echo $numberOfCar; ?> Cars, <?php echo $numberOfTruck; ?> Trucks</p>
            <?php
            if (isset($total)) :
                ?>
            <p class="lead"><?php echo $numberOfBicycle; ?> Bicycles, <?php echo $numberOfCar; ?> Cars, <?php echo $numberOfTruck; ?> Trucks</p>
            <p>The total is <?php echo $total . " Baht."; ?> </p>
            <?php else : ?>
            <p class="text-danger"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 