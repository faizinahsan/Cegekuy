<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CekGejalaKuy</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/ionicons.min.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/Login-Form-Clean.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/Registration-Form-with-Photo.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css")?>">
    <link rel="icon" href="<?php echo base_url("assets/img/Logo.png")?>">
</head>
<body>
    <section id="home" class="helpr-section helpr-layout-1 section section-inverse-color" >
  <div class="container">
    <div class="helpr-content" data-stellar-offset-parent="true"> 
      
      <!-- helpr TEXT -->
      
      <div class="helpr-text" data-wow-duration="1s" data-wow-delay="0.5s"> 
        <!-- TAGLINE -->
        <div class="webHomeTitle">
          <h1 class="helpr-title">Semoga Cepat Sembuh!</h1>
        </div>
        <div style="align-content: center; padding-left: 35%; padding-top: 50px">
          <table >
    <thead>
      <tr>
        <th><span>Diagnosis Penyakit</span></th>
        <th><span>Penanganan</span></th>
      </tr>
    </thead>
    <tbody>
                    <?php foreach ($hasil as $product): ?>
                    <tr>
                      <td>
                        <?php echo substr($product['Penyakit'],23)  ?>
                      </td>
                      <td>
                        <?php echo substr($product['Penanganan'],23) ?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
    </tbody>
  </table>
  </div>
    </div>
    </div>
    </div>
    </div>
</section>

    <footer class="page-footer font-small" style="background-color: #2E2E2E">
        <div class="footer-copyright text-center py-3" style="color: white">© 2019 Cyber</div>
    </footer>  
    <script src="<?php echo base_url("assets/js/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>
</body>
</html>