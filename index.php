<!-- PHP -->
<?php
  
  if(isset($_POST['get'])){
  $script = $_POST['get'];
  $ella=($script);
  $six = $_POST['enamdigit'];
  // Insertar CURL
  function curl($url, $var = null) {
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_TIMEOUT, 25);
      if ($var != null) {
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
      }
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($curl);
      curl_close($curl);
      return $result;
  }
  // Enam digit Formula
  function defineNUM($bin) {
      return substr($bin,0,6);
  }
  // JSON DATA
    $bin = defineNUM($six);
    $curl = curl("https://lookup.binlist.net/".$bin); 
    $json = json_decode($curl);
    $brand = $json->scheme ? $json->scheme : "Error";
    $cardType = $json->type ? $json->type : "Error";
    $cardCategory = $json->bank ? $json->bank : "Error";
    $countryName = $json->country ? $json->country : "Error";
    $countryCode = $json->country ? $json->country : "Error";
    $details = '<p>BIN: '.$bin.'</br>Brand: '.$brand.'</br>Bank Name: '.$cardCategory->name.'</br>Bank URL: '.$cardCategory->url.'</br>Bank Phone: '.$cardCategory->phone.'</br>Type: '.$cardType.'</br>Country Name: '.$countryName->name.'</br>Country Code: '.$countryCode->alpha2.'</p>';
    
    if ($six == null) {
    die('error!');
}
    $binresult = $details;
}
?>

<!DOCTYPE html>
<html lang="en" ><!--oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;" ondragstart="return true" onselectstart="return true"-->
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=no"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Frijole&display=swap" rel="stylesheet">
  <title>Validar verificar BIN - Número de identificación del banco Caja de cheques con tarjeta de 6 dígitos</title>
  </head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87406649-1', 'auto');
  ga('send', 'pageview');

</script>
<link rel="stylesheet" href="css/estilos.css">
<body  oncontextmenu = "return false" onselectstart = "return true" onkeydown="return true" ondragstart="return false" nmousedown="return true">
  <!-- oncontextmenu = "return false" onselectstart = "return false" onkeydown="return false" -->
  <!--oncontextmenu="return false" onkeydown="return false"-->
  <!--oncontextmenu="return false;" onkeydown="return false;" o  onselectstart="return true"-->
<center>
	    <h1><span style="font-size: 42px; color-profile: red;">S</span>hadow<span style="font-size: 40px; color-profile: red;">Code :)</span></h1>
   <header>
      
      <div class="categorias" id="categorias">
  
      </div>
    </header>
	<!--<p><font color="#0076a3"><b><span style="font-size: 30px; color-profile: red;">C</span>omprobador de <span style="font-size: 30px; color-profile: red;">N</span>úmeros de <span style="font-size: 30px; color-profile: red;">I</span>dentificación <span style="font-size: 30px; color-profile: red;">B</span>ancaria</b></font></p>-->
	<p><font color="#0076a3"><span style="font-size: 30px; color-profile: red;">C</span>hecking <span style="font-size: 30px; color-profile: red;">B</span>in <span style="font-size: 30px; color-profile: red;">W</span>ith 6 <span style="font-size: 30px; color-profile: red;">D</span>igit <span style="font-size: 30px; color-profile: red;">C</span>ard <span style="font-size: 30px; color-profile: red;">C</span>ode</font></p>
	<div style="border-radius:12px;padding:10px;border:0px dotted #0076a3;">
<font color="blue"><center><img src="img/Tarjeta.png" alt="Bin Checker Gratis ShadowCode ProGrammers DevGuides Check, Verify & Validate BIN - Bank Identification Number - BIN Check"></center> </font>
</div></center>
  <body>
   <br></br><center> <form method="post">
    <input type="number" id="enamdigit" name="enamdigit" placeholder="6 digitos de la tarjeta" size="6" required>
    <br><button type="submit" name="get" class="Button"><span style="font-size: 30px; color-profile: red;">C</span>heck <span style="font-size: 30px; color-profile: red;">N</span>ow</button>
    </form></center>
    <div style="text-align: center;"> <span style="font-size: 30px; color-profile: red;">R</span>esults <span style="font-size: 30px; color-profile: red;">H</span>ere! <span style="font-size: 30px; color-profile: red;">B</span>y <span style="font-size: 30px; color-profile: red;">D</span>Studios<span style="font-size: 30px; color-profile: red;">P</span>Wantleios
   
 </div>   
    <center>

      <?php  
        print_r($binresult);
        ?></center>
 <marquee><p style="color:#0076a3">Gracias Por las Apis Mitnick v3n3no l4bs 0mar2090</p></marquee>
  </body>
</html>
