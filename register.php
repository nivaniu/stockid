<html>
    <head>
        <title>StockId 2.01.</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
		<div style="text-align: center;">
        <h1> Welcome to StockId V2.01. </h1> </div>
        <div style="text-align: center;"><h3><i> With StockId, always have your documents with you! </i></h3></div>
    <body>
        <div id="container">

<IMG class="displayed" src="https://cdn.discordapp.com/attachments/755502832295346309/826077511275249674/stockid.png" alt="stockid">
<style>
IMG{
    width: 300px;
    height: 140px;
    border-radius: 80%;
    position: absolute;
    top: 30px;
    left: 5px;
}
</style>
            <?php
            $created_user = 0;
            if (array_key_exists('name', $_POST)) {
                $nom = $_POST['name'];
                $prenom = $_POST['firstname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $birthday = $_POST['birthday'];
                $date = new DateTime();
                $lastlog = $date->format('m/d/Y');
                $pricingplan = $_POST['plan'];
//                $texte = "INSERT INTO stock_id_clients VALUES (seq_stock_id_clients.nextval, 'client'||seq_stock_idrep_clients.nextval, 'FELLAH','FELLAH', 'Mohamed-Fouad','mfellah', TO_DATE('22/09/1998', 'DD/MM/YYYY'), null, null, 'FREE' )";

                function str($var) {return "'".$var."'";}
                $texte = "insert into stock_id_clients(".
                    "IDCLIENT,".
                    "IDREP,".
                    "NOM,".
                    "PRENOM,".
                    "USERNAME,".
                    "PASSWORD,".
                    "BIRTHDAY,".
                    "LAST_LOGIN,".
                    "SECURE_KEY,".
                    "PRICING_PLAN)".
                    "values(".
                    "seq_stock_id_clients.nextval,".
                    "'client'||seq_stock_idrep_clients.nextval,".
                    str($nom) . ", ".
                    str($prenom) . ", ".
                    str($username) . ",".
                    str($password).",".
                    "TO_DATE(". str($birthday).",'YYYY/MM/DD'), ".
                    "TO_DATE(". str($lastlog) .",'MM/DD/YYYY'), ".
                    "null,".
                    str($pricingplan) . ")";
                $connection = ocilogon("c##nivaniu_a", "nivaniu_a", "dbinfo");
                $ordre = ociparse($connection, $texte);
                ociexecute($ordre);
                if (oci_num_rows($ordre) == 1)
                    $created_user = 1;
                else
                    $created_user = -1;
                ocilogoff($connection);
            }
            ?>
            <form action="register.php" method="POST">
                <h1>Sign Up</h1>
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter your username" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter your password" name="password" required>
                <label><b>Name</b></label>
                <input type="text" placeholder="Enter your username" name="name" required>
                <label><b>FirstName</b></label>
                <input type="text" placeholder="Enter your username" name="firstname" required>
                <label for="bdate"><b>Birthday :</b></label>
                <input id="bdate" type="date"  name="birthday" required>
                <br>
                <label><b>Plan :</b></label>
                <input type="radio" name="plan" value="FREE" checked id="free"><label for="free">Free</label>
                <input type="radio" name="plan" value="Premium" id="prem"><label for="prem">Premium</label>
                <input type="radio" name="plan" value="Enterprise" id="ente"><label for="ente">Enterprise</label>
                <?php
                if ($created_user==1)
                    echo "<br><span style='color: #53af57;'> Signup success</span>";
                if ($created_user==-1)
                    echo "<br><span style='color: #9F391A;'> Signup failure</span>";
                ?>
                <input type="submit" id='submit' value='Signup' >
            </form>
        </div>
    </body>
</html>
