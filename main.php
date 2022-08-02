<section class="content">

    <form method="post" action="<?php echo base_url() . 'kusva/info/index.php' ?>"
          enctype="multipart/form-data">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Başka Title</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" id="app">

                <?php if ($_GET['durumekle'] == "ok") {
                    durumSuccess("Kayıt Başarılı bir şekilde eklendi ");
                } else if ($_GET['durumekle'] == "no") {
                    durumDanger("Kayıt Eklenirken bir hata oluştu !");
                } ?>

                <div class="row">
                    <?php
                    // dosya olup olmadığı kontrolü yapılmakta is_dir("utils/metasdasdhods");
                    $data = ["E" => "Erkek", "K" => "Kadın"];
                    getTextInput(3, "Ad", "Ad giriniz", "name", "", "", false, false);
                    getTextInput(3, "Soyad", "Soyad giriniz", "surname", "", "", false, "");
                    getTextInput(3, "Adres Girinz", "Adres giriniz", "address", "", "", "", "");
                    getTextInput(3, "Memleket Girinz", "Memleket giriniz", "city", "", "", "", "");
                    getSelect($data, "3", "Cinsiyet", "gender", "", false, "", false, false);
                    getDatetime("3", "Doğum Tarihiniz", "birthdate", "", true, false);
                    getNumberInput(3, "Yaş", 0, "age", "", "", "", "", false, false);

                    getInputFile("file","Resim", 4,false,false);
                    ?>

                </div>


            </div>
            <div class="card-footer">
                <?php getButton("btn btn-primary", 'right', "Denek", "infoekleme", false); ?>
            </div>
        </div>
    </form>
</section>


