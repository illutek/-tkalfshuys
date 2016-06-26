



Bootstrap.min.css ge dit toch appart houden en niet meer via import, dit om de style.css korter te houden.


###include van navigatie
vanuit een directory naar een andere via onderstaande
../includes/nav.inc.php gaat niet lukken
oplossing
include dirname(__FILE__) . '/../includes/nav.inc.php'
vanaf PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)