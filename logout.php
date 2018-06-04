<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/4/2018
 * Time: 9:29 PM
 */

session_start();

$_SESSION=array(); 		//session_destroy(); array ke empty kore dilam

header('location:index.php');