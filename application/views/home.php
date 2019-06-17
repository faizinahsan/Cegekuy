<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CekGejalaKuy</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/ionicons.min.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/Login-Form-Clean.css")?>">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url("assets/css/Registration-Form-with-Photo.css")?>">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/css/styles.css">
    <link rel="icon" href="<?php echo base_url("assets/img/Logo.png")?>">
</head>
<body>
    <section id="home" class="helpr-section helpr-layout-1 section section-inverse-color">
  <div class="container">
    <div class="helpr-content" data-stellar-offset-parent="true"> 
      
      <!-- helpr TEXT -->
      
      <div class="helpr-text" data-wow-duration="1s" data-wow-delay="0.5s"> 
        <!-- TAGLINE -->
        <div class="webHomeTitle">
          <img src="<?php echo base_url("assets/img/Logo.png")?>" style="width: 100px; padding: 70px 0 10px;
    text-align: center;
    margin-left: 500px;
    margin-right: 500px;
    margin-bottom: 0px;">
    <h5 class="helpr-title-2" style="padding-bottom: 50px"> Cek Gejala Kuy</h5>
  </div>
          <h1 class="helpr-title">Apa kabar hari ini?</h1>
        </div>
<form method="POST" action="<?php echo base_url("index.php/result")?>">
        <div class="container-cb">
<!-- <label class="container"><input type="checkbox" checked="checked">One
  <span class="checkmark"></span>
</label>
<label class="container">
    <input type="checkbox">Two
  <span class="checkmark"></span>
</label>
 -->

  <?php foreach ($hasil as $value):?>
  <label class="container"><input type="checkbox" name="gejala_name[]" value="<?php echo "ex:",substr($value['gejala'],23) ?>"><?php echo substr($value['gejala'],23) ?>
  <span class="checkmark"></span>
</label>
    <!-- <li><input type="checkbox" id="checkboxOne" name="gejala_name[]" value="<?php echo "ex:",substr($value['gejala'],23) ?>"><label for="checkboxOne"><?php echo substr($value['gejala'],23) ?></label></li> -->
  <?php endforeach?>
    <!-- <li><input type="checkbox" id="checkboxOne" value="Demam"><label for="checkboxOne">Demam</label></li> -->
    <!-- <li><input type="checkbox" id="checkboxTwo" value="Pegal-pegal" checked=""><label for="checkboxTwo">Pegal-pegal</label></li>
    <li><input type="checkbox" id="checkboxThree" value="Batuk" checked=""><label for="checkboxThree">Batuk</label></li>
    <li><input type="checkbox" id="checkboxFour" value="Sakit kepala"><label for="checkboxFour">Sakit kepala</label></li>
    <li><input type="checkbox" id="checkboxFive" value="Menggigil"><label for="checkboxFive">Kelelahan</label></li>
    <li><input type="checkbox" id="checkboxSix" value="Menggigil"><label for="checkboxFive">Menggigil</label></li>
    <li><input type="checkbox" id="checkboxSeven" value="Sakit tenggorokan" checked=""><label for="checkboxSix">Sakit tenggorokan</label></li>
    <li><input type="checkbox" id="checkboxEight" value="Bersin"><label for="checkboxSeven">Bersin</label></li>
    <li><input type="checkbox" id="checkboxNine" value="Hidung tersumbat"><label for="checkboxEight">Hidung tersumbat</label></li>
    <li><input type="checkbox" id="checkboxTen" value="Hilang nafsu makan"><label for="checkboxNine">Hilang nafsu makan</label></li>
    <li><input type="checkbox" id="checkboxEleven" value="Haus"><label for="checkboxTen">Haus</label></li>
    <li class="ks-selected"><input type="checkbox" id="checkboxTwelve" value="Urine pekat"><label for="checkboxEleven">Urine pekat</label></li>
    <li><input type="checkbox" id="checkboxThirteen" value="Mulut kering"><label for="checkboxTwelve">Mulut kering</label></li>
    <li><input type="checkbox" id="checkboxFourteen" value="Cepat lelah"><label for="checkboxThirteen">Cepat lelah</label></li>
    <li><input type="checkbox" id="checkboxFifteen" value="Nyeri panas di lambung"><label for="checkboxFourteen">Nyeri panas di lambung</label></li>
    <li><input type="checkbox" id="checkboxSixteen" value="Sakit perut"><label for="checkboxFifteen">Sakit perut</label></li>

    <li><input type="checkbox" id="checkboxSeventeen" value="Cepat kenyang"><label for="checkboxTen">Cepat kenyang</label></li>
    <li><input type="checkbox" id="checkboxEighteen" value="Perut kembung"><label for="checkboxTen">Perut kembung</label></li>
    <li><input type="checkbox" id="checkboxNineteen" value="Cegukan"><label for="checkboxTen">Cegukan</label></li>
    <li><input type="checkbox" id="checkboxTwenty" value="Mual"><label for="checkboxTen">Mual</label></li>
    <li><input type="checkbox" id="checkboxTwentyone" value="Muntah"><label for="checkboxTen">Muntah</label></li>
    <li><input type="checkbox" id="checkboxTwentytwo" value="Sisi wajah bengkak"><label for="checkboxTen">Sisi wajah bengkak</label></li>
    <li><input type="checkbox" id="checkboxTwentythree" value="Nyeri sendi"><label for="checkboxTen">Nyeri sendi</label></li>
    <li><input type="checkbox" id="checkboxTwentyfour" value="Sesak napas"><label for="checkboxTen">Sesak napas</label></li>
    <li><input type="checkbox" id="checkboxTwentyfive" value="Pusing"><label for="checkboxTen">Pusing</label></li>
    <li><input type="checkbox" id="checkboxTwentysix" value="Mudah marah"><label for="checkboxTen">Mudah marah</label></li>
    <li><input type="checkbox" id="checkboxTwentyseven" value="Sulit konsentrasi"><label for="checkboxTen">Sulit konsentrasi</label></li> -->
  </ul>

</div>
<div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: #12bbd4 text-align : center;">Hasil</button></div>
</form>
  </div>
</div></section>

    <footer class="page-footer font-small" style="background-color: #2E2E2E">
        <div class="footer-copyright text-center py-3" style="color: white">© 2019 Cyber</div>
    </footer>  
    <script src="<?php echo base_url("assets/js/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>

</body>
</html>