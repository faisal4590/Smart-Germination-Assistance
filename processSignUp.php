<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/4/2018
 * Time: 8:46 PM
 */
?>

<?php
$db = new mysqli("localhost", "root", "", "germination") or die("Can't Connect to database");

if(!empty($_POST))
{
    $msg='';


    if(empty($_POST['name']) || empty($_POST['email'])
        || empty($_POST['password']))
    {
        $msg.= '<p>Please fill up all the data</p>';
    }



    if(strlen($_POST['password'])>30)
    {
        $msg.= '<p>Password must be within 30 charecters....</p>';
    }

    //same method e check korteci email already exist kina
    $email=htmlspecialchars($_POST['email']);
    $query = "select * from users where users.email='$email'";
    $result = $db->query($query);
    if($result->num_rows > 0)
    {
        $msg.= '<p>Email already exists.</p>';
    }

    if(is_numeric($_POST['name']))
    {
        $msg.= '<p>Name must be in String Format...</p>';
    }

    if($msg!= '')
    {
        header('location:signUp.php?error=' .$msg);
    }
    else
    {
        $name=htmlspecialchars($_POST['name']);
        $email=htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);

        //prepare statement starts here

        $sql = 'insert into users(name,email,password)
			values(?,?,?)';
        $statement = $db->prepare($sql);
        $statement->bind_param("sss",$name,$email,$password);
        $statement->execute();
        $statement->close();
        $db->close();

        header('location:signUp.php?ok=1');
    }
}
else
{
    header('location:index.php');
}



