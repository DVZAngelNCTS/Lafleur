<?php
//page de teste pour voir si checkSession.php est correcte !

/*Pour les page restreint ou il est demander d'etre connecter 
au moins a un compte il suffit juste de faire "require 'checkSession.php';" ! */

require 'checkSession.php';

echo "session correcte";
?>