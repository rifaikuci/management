<?php

require_once "../../utils/index.php";

if (isset($_POST['infoekleme'])) {

 $deneme  =   imageUpload("../../assets/images/","infos",'file','');
echo  $deneme;



   $arrayKey = ["name","surname","address","city","gender","birthdate","age"];
   $data = getDataForm($arrayKey);
   $sql = insert($data, "tbl_info");

    if (mysqli_query($db, $sql)) {
        header("Location:../../index.php?durumekle=ok");
        exit();
    } else {
        header("Location:../../index.php?durumekle=no");
        exit();
    }
}

?>