



Bootstrap.min.css ge dit toch appart houden en niet meer via import, dit om de style.css korter te houden.


###include van navigatie
vanuit een directory naar een andere via onderstaande
../includes/nav.inc.php gaat niet lukken
oplossing
include dirname(__FILE__) . '/../includes/nav.inc.php'
vanaf PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)


page--node--11.tpl.php = pagina bestellen zie dit als een tussen schakel naar het plaatsen van een bestelling.


Fout op page.tpl.php en andere door id="parallax-anchor" dat enkel op de front-page wordt gebruikt, daarom de jquery.min.js
en parallax.js oproep verhuisd van het .info bestand naar template.php