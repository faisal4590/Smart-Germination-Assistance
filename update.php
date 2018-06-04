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
if(isset($_POST["id"]))
{
    $value = mysqli_real_escape_string($connect, $_POST["value"]);
    $query = "UPDATE seeddetails SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'Data Updated';
    }
}
?>
