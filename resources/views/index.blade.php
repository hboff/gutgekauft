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
                    <li class="current"><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/index.php">Home</a></li>
                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/dienstleistungen.php">Dienstleistungen</a></li>
                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/honorar.php">Honorar</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/kontakt.php">Kontakt</a></li>
                   
                </ul>
            </nav>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <div class="left-col">
                <p class="subhead">Professionelle</p>
                <h1>Hauskaufberatung</h1>

                <div class="hero-cta">
                    <a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/dienstleistungen.php" class="primary-cta">Erfahren Sie mehr</a>
                </div>
            </div>
<img src="images/house.svg" class="hero-img" alt="Illustration">
        </div>
    </section>
<section>
<div class="container">
<h2>Wozu wird eine Immobilienbewertung benötigt?</h2>
<p>Die meisten Menschen kennen den genauen Wert ihres Hauses nicht. Hier kommt ein Immobiliensachverständiger ins Spiel, der Ihnen eine genaue Schätzung des Wertes Ihres Gebäudes gibt. Unabhängig davon, ob Sie verkaufen oder kaufen möchten, ist es wichtig, eine aktuelle Schätzung von einem qualifizierten Fachmann erstellen zu lassen.</p>
<p>Wenn Sie mit dem Gedanken spielen, Ihre Immobilie zu verkaufen, können wir Ihnen helfen, den besten Verkaufspreis zu ermitteln. Wir berücksichtigen die aktuellen Marktbedingungen sowie die besonderen Merkmale Ihrer Immobilie, um eine faire und genaue Bewertung zu erstellen. Mit unserer Hilfe können Sie sicher sein, dass Sie den bestmöglichen Preis erhalten für Ihr Eigentum.</p>
<p>Als Ihr Immobiliensachverständiger führen wir eine gründliche Inspektion Ihres Gebäudes durch. Bei der Ermittlung des Werts einer Immobilie berücksichtigen wir viele verschiedene Faktoren, darunter die Größe und den Zustand des Gebäudes sowie das Grundstück, auf dem es sich befindet. Dank unserer umfassenden Kenntnisse und Erfahrungen können wir Ihnen eine genaue Schätzung Ihres den Wert der Eigenschaft.</p>
<p>Wir verstehen, dass nicht jeder mit dem Prozess der Immobilienbewertung vertraut ist. Deshalb sind wir hier, um zu helfen! Unser Team hat es sich zur Aufgabe gemacht, unseren Kunden eine möglichst genaue Bewertung zu liefern. </p>
<p>Wenn Sie Fragen haben oder einen Termin vereinbaren möchten, können Sie noch heute Kontakt zu uns aufnehmen. Wir freuen uns darauf, Ihnen bei allen Fragen rund um die Bewertung von Immobilien zu helfen und erstellen Ihnen ein kostenloses und unverbindliches Angebot.</p>
<p></p>

</div>
</section>

<section>
<div class="container">
<h2>Was ist eine Immobilienbewertung?</h2>
<p>Unter einer Immobilienbewertung versteht man die Schätzung des Wertes einer Immobilie. Dies kann aus verschiedenen Gründen geschehen, z. B. beim Kauf oder Verkauf einer Immobilie oder zu Steuerzwecken. Ein professioneller Gutachter berücksichtigt bei der Bestimmung des Werts einer Immobilie viele Faktoren, wie Größe, Zustand, Lage und Marktbedingungen.</p>
<p>Diese Faktoren berücksichtigen wir, um den besten Kaufpreis für Sie zu verhandeln. Auf einer soliden und mit Fakten belegten Basis. Damit Sie unter keinen Umständen zu viel bezahlen oder sogar ein Schnäppchen machen. </p>
</div>
</section>


    <section class="features-section">
        <div class="container">
	<h2>Wir bieten:</h2>
            <ul class="features-list">
                <li>Begehung der Immobilie</li>
                <li>Ausführliche Beratung</li>
                <li>Beratung und Investitionskosten</li>
                <li>Wertermittlung und Beratung</li>
                <li>Unterstützung bei den Preisverhandlungen</li>
                <li>Betreuung bis zum Nortartermin</li>
            </ul>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <ul>
                <li>
                    <img src="images/location.svg" alt="Standort">
			<p><b>Regionale Expertise</b></p>
                  	<p>Unsere Arbeitsweise basiert auf fundierten lokalen Markt­kenntnissen.</p>
                    
                </li>
                <li>
                    <img src="images/lock.svg" alt="Unabhängig">

                    <p><b>Unabhängige Gutachter</b></p>
			<p>Unsere Sach­verständigen für Immobilien halten den Ehrenkodex verschiedener Verbände und Institutionen ein.</p>                    
                </li>
 <li>
                    <img src="images/certification.svg" alt="Zertifizierung">

                    <p><b>Zertifiziert</b></p> 
			<p>Verschiedene renommierte Zertifizierungen zeichnen unsere Gutachter aus.</p>                   
                </li>

            </ul>
        </div>
    </section>

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