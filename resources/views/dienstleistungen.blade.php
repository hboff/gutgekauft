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
                    <li class="current"><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/dienstleistungen.php">Dienstleistungen</a></li>
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
                <p class="subhead">Unsere</p>
                <h1>Dienstleistungen</h1>
            </div>
<img src="images/dienstleistungen.svg" class="hero-img" alt="Illustration">
        </div>
    </section>


<section class="container-light">
<div class="container">
<h2>Begehung der Immobilie</h2>
<p>Die Besichtigung und Begutachtung ist ein wichtiger Schritt im Prozess des Hauskaufs. Sie ermöglicht es Ihnen, sich über den Zustand der Immobilie zu informieren, bevor Sie sie kaufen. </p>
<p>Ein professioneller Gutachter untersucht den Zustand Immobilie und erkennt Mängel und Schäden sowie Problempunkte, die den Wert des Gebäudes oder ihre Sicherheit beeinträchtigen könnten.</p>
<p>Nur durch eine solche Immobilieninspektion mit unseren professionellen Fachleuten können Sie die Gewissheit erlangen, dass Sie eine solide Investition tätigen.</p>
<p>Wenn Sie mit dem Gedanken spielen, eine Immobilie zu kaufen, sollten Sie so bald wie möglich einen Besichtigungstermin vereinbaren. Gerne beantworten wir hierzu ihre Fragen und helfen bei der Durchführung. </p>
</section>

<section class="container-dark">
<div class="container">
<h2>Preisverhandlungen</h2>
<p>Wenn es um Immobilien geht, ist der Preis ein wesentlicher Faktor. Ob Sie nun eine Immobilie kaufen oder verkaufen, Sie wollen den bestmöglichen Preis erzielen. Deshalb ist es wichtig, dass Sie wissen, wie Sie effektiv verhandeln können.</p>
<p>Dies sollte durch einen professionellen Immobiliengutachter oder Bausachverständigen geschehen. Nur ein Fachmann kann die wichtigen Faktoren wie Lage, Größe, Zustand und Marktumfeld richtig beurteile, damit Sie eine gute Ausgangsbasis für Verhandlungen haben.</p>
<p>Der erste Schritt bei jeder Verhandlung besteht darin, Ihre Hausaufgaben zu machen. Sie müssen wissen, was die Immobilie wert ist und für welchen Preis ähnliche Immobilien in der Vergangenheit verkauft wurden. </p>
<p>Sobald diese Grundlagen festliegen, ist es an der Zeit, mit den Verhandlungen zu beginnen. Das Wichtigste ist, dass Sie durchsetzungsfähig, aber auch flexibel sind. Sie sollten immer mit Ihrem höchsten Angebot beginnen und dann bereit sein, bei Bedarf Kompromisse einzugehen. Es ist auch wichtig, der anderen Partei zuzuhören und zu versuchen, sie zu verstehen. Auf diese Weise können Sie vielleicht eine gemeinsame Basis finden und eine Vereinbarung treffen, die für beide Parteien von Vorteil ist.</p>
<p>Zusammen mit unserem Gutachter ermöglicht diese Vorgehensweise eine professionelle und effektive Verhandlungsbasis. Denken Sie daran, dass es Ihr Ziel ist, den bestmöglichen Preis für Ihre Immobilie zu erzielen. Mit ein unserer Hilfe und ohne nennenswerte Anstrengung sollten Sie in der Lage sein, genau das zu erreichen.</p>
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