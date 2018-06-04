<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/4/2018
 * Time: 9:09 PM
 */
?>

<?php

session_start();

if(!empty($_POST))
{
    $msg= '';

    if(empty($_POST['email']))
    {
        $msg .= '<p>Email does not exist</p>';
    }

    if(empty($_POST['password']))
    {
        $msg .= '<p>Password is incorrect.</p>';
    }

    else
    {

        $db = new mysqli("localhost", "root", "", "germination") or die("Can't Connect to database");

        $email=$_POST['email'];


        $query="select * from users where email='$email'";


        $res=$db->query($query) or die('wrong query');

        $row=$res->fetch_array(MYSQLI_ASSOC);

        if(!empty($row))
        {
            if($_POST['password'] == $row['password'])
            {
                $_SESSION=array();
                $_SESSION['name']=$row['name'];
                $_SESSION['id']=$row['id'];
                $_SESSION['password']=$row['password'];
                $_SESSION['email']=$row['email'];
                $_SESSION['status']=true;

                if($_SESSION['name']!="admin")
                {
                    header("location:index.php");
                }
                else
                {
                    header("location:index.php");
                }
            }

            else
            {
                $msg .= '<p>Password is incorrect.</p>';
                header('location:login.php?error=' .$msg);die();
            }
        }
        else
        {
            $msg.= '<p>Invalid user</p>';
            header('location:login.php?error=' .$msg);die();
        }
    }

}
else
{
    header('location:index.php');
}

?>
