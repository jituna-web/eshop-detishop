<div class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <h3>Pro vás</h3>
        <ul>
        <?php 
          if(!isset($_SESSION['customer_email'])){
            echo"<a href='login.php'> Přihlášení</a>";
          } else {
            echo"<a href='customer/my_account.php?my_orders'> Můj účet</a>";
          }
        ?> 
          <li><a href="customer_register.php">Registrace</a></li>
          <li><a href="cart.php">Nákupní košík</a></li>
          <li><a href="shop.php">Oblíbené produkty</a></li>
        </ul>
        <br>
  </div>
        <div class="col-sm-6 col-md-3">
        <h3>Společnost</h3>
        <ul>
          <li><a href="o-nas.php">O nás</a></li>
          <li><a href="contact.php">Kontaktujte nás</a></li>
          <li><a href="sidlo.php">Sídlo společnosti</a></li>
          <li><a href="blog/index.php">Blog</a></li>
        </ul>
        <br>
      </div>
      <div class="col-sm-6 col-md-3">
      <h3>Informace</h3>
        <ul>
          <li><a href="obchodni-podminky.php">Obchodní podmínky</a></li>
          <li><a href="gdpr.php">GDPR</a></li>
          <li><a href="nakup.php">Jak nakupovat</a></li>
          <li><a href="doprava.php">Doprava a platba</a></li>
        </ul>
        <br>
      </div>
      <div class="col-sm-6 col-md-3">
        <h3 style="text-align:center;">Sledujte nás</h3>
        <p class="social" style="text-align: center;">
        <a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a>
        <a class="faicon-instagram" href="#"><i class="fab fa-instagram"></i></a>
        <a class="faicon-youtube" href="#"><i class="fab fa-youtube"></i></a>
        </p>
    </div>
    <div class="col-sm-6 col-md-3">
      <h5 style="color:white; font-size:20px;text-align:center;">Newsletter</h5>
      <p style="text-align:center; color:white;">Přihlaste se k odběru novinek.</p>
      <form action="#" method="post">
        <input type="text" class="form-control"name="email" value="zadejte svůj email">
        <br>
        <span class="input-group-btn">
          <input type="submit" value="odebírat" class="btn btn-success">
        </span>

        <?php
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('812be3bb1dd1582dde67316b39ad43bf','77c4357e12b79f4dcacb2462b99b522d',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => ""
        ],
        'To' => [
          [
            'Email' => "info@jh-design.cz",
            'Name' => "Jitka"
          ]
        ],
        'Subject' => "Nový odběratel Newsletteru",
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
?>
      </form>
      <br>
  </div>
  </div>
  <div class="img-footer">
    <img src="images/klokan2.png" alt="">
    <br>
  </div>

<div id="copyright">
  <div class="container">
    <div class="col-md-6">
      <p class="pull-left" style="color:white;">&copy; 2021 Detishop.cz. Všechna práva vyhrazena.</p>
    </div>
    <div class="col-md-6">
      <p class="pull-right"><a style="color:white;font-size:13px;" href="https://jh-design.cz"> Vytvořeno Jh-design.cz</a></p>
    </div>
  </div>
  </div>


  


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




  </body>
</html>
