<?php

if (isset($_POST['settingsInsert'])) {

    $path = findPath($_POST['settingsInsert']);
    $data = array();

    if (isset($_FILES['file']) && $_FILES['file']['name']) {
        $file = imageUpload( "settings", 'file', '');
        if ($file == "image_large" || $file == "image_invalid_type" || $file == "image_not_upload") {
            header("Location:".$path."/index.php?hata=" . $file);
        }
    }

    $arrayKey = ["name", "surname", "address", "city", "gender", "birthdate", "age"];
    $data = getDataForm($arrayKey);

    if (isset($_FILES['file']) && $_FILES['file']['name']) $data['image'] = $file;

    $sql = insert($data, "tblSettings");
    if (mysqli_query($db, $sql)) {
        header("Location:".$path."/?insert=ok");
        exit();
    } else {
        header("Location:".$path."/?insert=no");
        exit();
    }
}

if(isset($_GET['settingsDelete'])) {
    echo $_GET['settingsDelete'];
    exit();
}

?>