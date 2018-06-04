<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/2/2018
 * Time: 5:48 PM
 */
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "germination");
if(isset($_POST["seedName"], $_POST["plantDate"],
      $_POST["temperature"], $_POST["moisture"], $_POST["humidity"], $_POST["light"]
    , $_POST["ph"]))
{
    $seedName = mysqli_real_escape_string($connect, $_POST["seedName"]);
    $date = strtotime($_POST["plantDate"]);
    $plantDate = date('Y-m-d H:i:s',$date);

    $temperature = mysqli_real_escape_string($connect, $_POST["temperature"]);
    $moisture = mysqli_real_escape_string($connect, $_POST["moisture"]);
    $humidity = mysqli_real_escape_string($connect, $_POST["humidity"]);
    $light = mysqli_real_escape_string($connect, $_POST["light"]);
    $ph = mysqli_real_escape_string($connect, $_POST["ph"]);

    $query = "INSERT INTO seeddetails(seed_name,plant_date,
    temperature,moisture,humidity,light,ph) VALUES('$seedName','$plantDate',
     '$temperature', '$moisture', '$humidity', '$light', '$ph')";
    if(mysqli_query($connect, $query))
    {
        echo 'Data Inserted';
    }
}


?>

