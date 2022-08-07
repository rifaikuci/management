<?php


function imageUpload($path, $folderName, $name, $fileName)
{
    if (!file_exists($path . $folderName)) {
        mkdir($path . $folderName, 0777, true);
    }

    $target_dir = $path . $folderName;

    $target_file = $target_dir . "/" . basename($_FILES[$name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($fileName) {
        $target_file = image_base_url() . $folderName . "/" . $fileName . "." . $imageFileType;
    } else {
        $uniq = uniqid();
        $target_file = image_base_url() . $folderName . "/" . $uniq. "." . $imageFileType;
    }

    if ($_FILES[$name]["size"] > 5000000) { // 5 mb
        return "image_large";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        return "image_invalid_type";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        return "image_not_upload";
    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], "../../" . $target_file)) {
            if ($fileName) {
                return image_base_url() . $folderName . "/" . $fileName . "." . $imageFileType;
            } else {
                return image_base_url() . $folderName . "/" . $uniq . "." . $imageFileType;
            }
        } else {
            return "image_not_upload";
        }
    }
}
