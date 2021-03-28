<html>
    <head>
        <title>StockId 2.01.</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
		<center>
        <h1> Welcome to StockId V2.01. </h1> </center>
        <center><h3><i> With StockId, always have your documents with you! </i></h3></center>
    <body>
        <div id="container">

<IMG class="displayed" src="stockid.png" alt="stockid">
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
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter your username" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter your password" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>
    </body>
</html>