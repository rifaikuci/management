<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (file_exists("kusva/connect.php")) {
    require_once "kusva/connect.php";
    require_once "methods/index.php";
    require_once "forms/index.php";
} else if (file_exists("../kusva/connect.php")) {
    require_once "../kusva/connect.php";
    require_once "../utils/methods/index.php";
    require_once "../utils/forms/index.php";
} else if (file_exists("../../kusva/connect.php")) {
    require_once "../../kusva/connect.php";
    require_once "../../utils/methods/index.php";
    require_once "../../utils/forms/index.php";
}


?>
