

<section class="content">

    <form method="post" action="<?php echo base_url() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Başka Title</h3>
            </div>
            <div class="card-body" id="app">

                <div class="row">
                    <?php
                    $data = ["E" => "Erkek", "K" => "Kadın"];
                    getTextInput(3, "Ad", "Ad giriniz", "name", "", "", false, false);
                    getTextInput(3, "Soyad", "Soyad giriniz", "surname", "", "", false, "");
                    getTextInput(3, "Adres Giriniz", "Adres giriniz", "address", "", "", "", "");
                    getTextInput(3, "Memleket Girinz", "Memleket giriniz", "city", "", "", "", "");
                    getSelect(3,$data, "Cinsiyet", "gender", "", false, "", false, false);
                    getDatetime(3, "Doğum Tarihiniz", "birthdate", "", true, false);
                    getNumberInput(3, "Yaş", 0, "age", "", "", "", "", false, false);
                    getInputFile(3,"file","Resim",false,false);
                    getTextHidden("settingsInsert","settingsInsert");
                    ?>
                </div>


            </div>
            <div class="card-footer">
                <?php getButton("btn btn-danger", 'left', "Vazgeç", "", false); ?>
                <?php getButton("btn btn-success", 'right', "Ekle", "", false); ?>
            </div>
        </div>
    </form>
</section>

