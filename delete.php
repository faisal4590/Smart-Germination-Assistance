<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/2/2018
 * Time: 5:49 PM
 */

?>

<?php
$connect = mysqli_connect("localhost", "root", "", "germination");
if(isset($_POST["id"]))
{
    $query = "DELETE FROM seeddetails WHERE id = '".$_POST["id"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'Data successfully deleted';
    }
}
?>
