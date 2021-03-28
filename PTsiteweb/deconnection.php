<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit();
?>

<html>
<head></head>
<body>
<a href="login.php">Retour à l'accueil</a>
</body>
</html>