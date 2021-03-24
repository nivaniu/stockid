
<?php
function br(){
echo "<br>";
}
echo "To get changes from remote :";
br();
echo "git fetch origin";
br();
echo "git pull";
br();
$c = ocilogon("c##nivaniu_a", "nivaniu_a", "dbinfo");
$texte = "select * from client";
echo $texte;
br();
$ordre = ociparse($c, $texte);
ociexecute($ordre);
while (ocifetchinto($ordre, $ligne)){
  echo $ligne[0].",".$ligne[1];
  br();
}
?>
