<!-- https://tp-ssh1.dep-informatique.u-psud.fr/~mfellah/PT/insert.php?idc=1&idrep=client3&nom=FELLAH&prenom=Mohamed-Fouad&username=mfellah&birthday=22-09-1996&lastlog=null&securekey=null&pricingplan=FREE

							-->
<html>
<body bgcolor=lightblue>
<?php

        $idc = $_REQUEST['idc'];
        $idrep = $_REQUEST['idrep'];
        $nom = $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $username = $_REQUEST['username'];
        $birthday = $_REQUEST['birthday'];
        $lastlog = $_REQUEST['lastlog'];
        $securekey = $_REQUEST['securekey'];
        $pricingplan = $_REQUEST['pricingplan'];


		// connexion oracle;
	    $connection = ocilogon("c##mfellah_a", "mfellah_a", "dbinfo");

       // $texte = "select seq_client.nextval from dual";      //attribue un id à chaque ajout de clients.
       // $ordre = ociparse($connection, $texte);
       // ociexecute($ordre);
       // ocifetchinto($ordre, $ligne);
       // $idc = $ligne[0];
	
	
		// --requete
      $texte ="insert into stock_id_clients(IDCLIENT, IDREP, NOM, PRENOM, USERNAME, BIRTHDAY, LAST_LOGIN, SECURE_KEY, PRICING_PLAN) values('".$idc."', '".$idrep."', '".$nom."', '".$prenom."', '".$username."', '".$birthday."', '".$lastlog."', '".$securekey."', '".$pricingplan."')";
      $ordre = ociparse($connection, $texte);
      ociexecute($ordre);

       echo "Insertion effectuée !";
       ocilogoff($connection);
       ?>
	   
	   
  </body>
</html>




