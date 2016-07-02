



Bootstrap.min.css ge dit toch appart houden en niet meer via import, dit om de style.css korter te houden.


###include van navigatie
vanuit een directory naar een andere via onderstaande
../includes/nav.inc.php gaat niet lukken
oplossing
include dirname(__FILE__) . '/../includes/nav.inc.php'
vanaf PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)


page--node--11.tpl.php = pagina bestellen zie dit als een tussen schakel naar het plaatsen van een bestelling.
verschilt enkel van de page.tpl.php om de main content een witte background te kunnen geven 


Fout op page.tpl.php en andere door id="parallax-anchor" dat enkel op de front-page wordt gebruikt, daarom de jquery.min.js
en parallax.js oproep verhuisd van het .info bestand naar template.php
Parallax is hier niet het juiste woord, een TODO om de file name te veranderen

###Bestel
Om een link te leggen op een button(btn 'Bestelformulier') naar een upload pdf, dit alles in een node--.tpl.php file, 
dient de markup rond dat veld verwijdert, volgende zou dan niet lukken
´´´
print '<a href="' . render($content['field_pdf_bereidingen']) . '">' . '<button class="btncontact__btn">'..........
´´´
Dit omdat out off the box Drupal een div rond een field plaatst, met de module no_field_markup 
https://www.drupal.org/project/no_field_markup lossen we dit probleem op.
(node--werkwijze.tpl.php)

###Product-node-form
Een aantal velden verwijdert (display: none) in het adminimal theme (style.css), niet de mooiste manier, maar het doel
heiligd de middelen.

