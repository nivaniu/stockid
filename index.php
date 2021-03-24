<?php

function br(){
echo "<br>";
}
echo "To get changes from remote :";
br();
echo "git fetch origin";
br();
echo "git pull";

$c = ocilogon(DB_LOGIN, DB_PWD, DB_PWD);
$texte = "select nom, prix from produit";
br();
echo $texte;
$ordre = ociparse($c, $texte);
ociexecute($ordre);
while (ocifetchinto($ordre, $ligne)){
echo $ligne[0].",".$ligne[1];
br();
}
?>
