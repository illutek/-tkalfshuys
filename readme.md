



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

###Bestellen
= node-werkwijze.scss  = opmaak slachttabel (inhoudstype) en werkwijze (inhoudstype)  
  
Om een link te leggen op een button(btn 'Bestelformulier') naar een upload pdf, dit alles in een node--.tpl.php file, 
dient de markup rond dat veld verwijdert, volgende zou dan niet lukken
´´´
print '<a href="' . render($content['field_pdf_bereidingen']) . '">' . '<button class="btncontact__btn">'..........
´´´
Dit omdat out off the box Drupal een div rond een field plaatst, met de module no_field_markup 
https://www.drupal.org/project/no_field_markup lossen we dit probleem op.
(node--werkwijze.tpl.php)

#### Opmaak tabel slachtkalender

Een TODO tabel opmaken zie vb code hieronder 
```
.friends {
  border-collapse: collapse;
}

.friends th {
  border-bottom: 1px solid;
}
.friends td, .friends th {
  border-left: 1px solid;
  padding: 5px 10px;
}
.friends td:first-child, .friends th:first-child {
  border-left: none;
}
```   


###Product-node-form
Een aantal velden verwijdert (display: none) in het adminimal theme (style.css), niet de mooiste manier, maar het doel
heiligd de middelen.

### Acties
Op de homepage, een inhoudstype 'Actie' zichtbaar tot datum, op de page--front.tpl.php een include 
De 'actions.inc.php' met 
```
<?php if ($page['actie']): ?>  
      <div class="actions--wrap col-md-12">  
        <?php print render($page['actie']); ?>  
      </div>  
   <?php endif; ?>  
```
Een node--actie.tpl.php voor het printen van de inhoud.  
Een view acties om een block te creëren.  
Met jquery een hover effect op de actie titel om de gehele actie te tonen (actions.js)

###Pakket prijzen
Familie pakket hebben geen kilo prijs maar een totaal prijs, om dit op te lossen in eerste instantie het produktveld
'cost' gebruikt maar loop hier tegen toegangsrechten op.  
Dan maar een extra veld 'Pakketprijs' aangemaakt, met een if structuur controleren of dit veld een waarde heeft en dit  
op volgende manier   
```
$fieldPakketPrice = field_get_items('node', $node, 'field_pakketprijs');  
if ($fieldPakketPrice) {
            print $uc_pakketPrice;
          } else {
            print $uc_sellPrice;
          }
```  
De uc_pakketPrice en uc_sellPrice worden ingesteld op template.php

