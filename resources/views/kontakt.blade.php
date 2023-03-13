<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GutGekauft</title>
    <link rel="stylesheet" href="css/main.css">
<? include("universal.php");if ($id==0) $id = $orte[0][0];?>

</head>
<body>
    <div class="navbar">
        <div class="container">
            <a class="logo" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/index.php">Gut<span>Gekauft</span></a>

            <img id="mobile-cta" class="mobile-menu" src="images/menu.svg" alt="Open Navigation">

            <nav>
                <img id="mobile-exit" class="mobile-menu-exit" src="images/exit.svg" alt="Close Navigation">
                
                <ul class="primary-nav">
                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/index.php">Home</a></li>
                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/dienstleistungen.php">Dienstleistungen</a></li>
                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/honorar.php">Honorar</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li class="current"><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/kontakt.php">Kontakt</a></li>
             
                </ul>
            </nav>
        </div>
    </div>

    <section class="contact-section">
        <div class="container">
            <div class="contact-left">
                <h2>Kontakt</h2>

                <form action="">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">

		    <label for="email">Email</label>
                    <input type="text" id="email" name="email">


                    <label for="nachricht">Nachricht</label>
                    <textarea name="nachricht" id="nachricht" cols="30" rows="10"></textarea>

                    <input type="submit" class="send-message-cta" value="Senden">
                </form>
            </div>
<div class="contact-right">
                <a class="logo" href="#">Gut<span>Gekauft</span></a>
		<ul class="contact">
		<li class="contact"><img src="images/phone.svg" alt="Telefon">01234 12345678</li>
		<li class="contact"><img src="images/email.svg" alt="E-Mail">muster@muster.de</li>
		<li class="contact"><img src="images/location-2.svg" alt="Standort">Musterstraße 1, 12345 Musterhausen</li>
		</ul> 
            </div>
        </div>
    </section>

<section class="link-section">
<div class="container">
<div class="contact-left">
<h3>Folgen Sie uns auf:</h3>
<ul>
<li>Instagram</li>
<li>Facebook</li>
<li>YouTube</li>
</ul>
</div>
<div class="contact-links"> 
<?
$domain = "https://".$_SERVER['HTTP_HOST'];
$anzahl =20 ; /// Anzahl der Ortslinks
// größenarray erstellen
foreach ($orte as $key => $val) { 
 $temp["$key"] = $val[0];
  }
//print_r($temp);
//echo "Die Anzahl der Orte ist ".count($temp);
  foreach ($temp as $key => $val) { 
  $dateiort[] = $key;
  $linkorts[] = $orte[$key][0];
}
for ($i = 0; $i < $anzahl; $i++ )   {
$link[] ="<a href=\"$domain/$dateiort[$i]/bausachverstaendiger.htm\" class=\"link\">Bausachverständiger $linkorts[$i] </a><br/>";
echo $link[$i];

}
?>
</div>
</section>

<div class="footer">
        <div class="container">
            <a class="logo" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/index.php">Gut<span>Gekauft</span></a>      
                <a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/impressum.php">Impressum</a>

		<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/datenschutzerklaerung.php">Datenschutzerklärung</a>

        </div>
    </div>


    <script>

        const mobileBtn = document.getElementById('mobile-cta')
              nav = document.querySelector('nav')
              mobileBtnExit = document.getElementById('mobile-exit');

        mobileBtn.addEventListener('click', () => {
            nav.classList.add('menu-btn');
        })

        mobileBtnExit.addEventListener('click', () => {
            nav.classList.remove('menu-btn');
        })



    </script>

</body>
</html>