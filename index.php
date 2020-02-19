<?php

spl_autoload_register();
$controller = new Controller();

//paramètres de connexion en constantes
//soit localhost, soit l'IP du serveur
define("DBHOST", "localhost");
//utilisateur de la base (différent de PHPmyAdmin)
define("DBUSER", "root");
//mot de passe
define("DBPASS", "");
//nom de la base de données
define("DBNAME", "portfolio");

if (empty($_GET['page'])) {
    $controller->home();
} elseif ($_GET['page'] == 'contact') {
    $controller->contacts();
}
?>