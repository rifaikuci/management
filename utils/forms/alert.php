<?php

function durumSuccess($content)
{
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Başarılı!</strong> $content
        <button type='button' class='close' data-dismiss='alert' aria-label='close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
}

function durumDanger($content)
{
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Hata!</strong> $content
        <button type='button' class='close' data-dismiss='alert' aria-label='close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
}

function imageStatusAlert()
{
    if (isset($_GET['hata']) && $_GET['hata'] == 'image_invalid_type') {
        durumDanger("Geçersiz Dosya Tipi !");
    } else if (isset($_GET['hata']) && $_GET['hata'] == 'image_large') {
        durumDanger("Dosya boyutu fazla büyük !");
    } else if (isset($_GET['hata']) && $_GET['hata'] == 'image_not_upload') {
        durumDanger("Resim yüklenirken bir hata oluştu !");
    }
}

?>