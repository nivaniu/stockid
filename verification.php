<?php

    session_start();
    $id_session = session_id();
?>
<!DOCTYPE html>
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
		
<ul id="menu">
	<li><a href="#">---What do you want to do ?---</a>
		<ul>
			<li><a href="#">Send file</a></li>
			<li><a href="#">Create folder</a></li>
			<li><a href="#">Take a picture</a></li>
			<li><a href="#">Upload document</a></li>
			<li><a href="#">Enter a key</a></li>
		</ul>
	</li>
</ul>

<style>
#menu, #menu ul{
padding:0;
margin:0;
list-style:none;
text-align:right;
}
#menu li{
display:inline-block;
position:relative;
border-radius:8px 8px 0 0;
}
#menu ul li{
display:inherit;
border-radius:0;
}
#menu ul li:hover{
border-radius:0;
}
#menu ul li:last-child{
border-radius:0 0 8px 8px;
}
#menu ul{
position:absolute;
z-index: 1000;
max-height:0;
left: 0;
right: 0;
overflow:hidden;
-moz-transition: .8s all .3s;
-webkit-transition: .8s all .3s;
transition: .8s all .3s;
}
#menu li:hover ul{
max-height:15em;
}
/* background des liens menus */

#menu li:nth-child(3){
background-color: #F6AD1A;
background-image:-webkit-linear-gradient(top, #F6AD1A 0%, #9F391A 100%);
background-image:linear-gradient(to bottom, #F6AD1A 0%, #9F391A 100%);
}
#menu li:last-child{
background-color: #CFFF6A;
background-image:-webkit-linear-gradient(top, #CFFF6A 0%, #677F35 100%);
background-image:linear-gradient(to bottom, #CFFF6A 0%, #677F35 100%);
}
/* background des liens sous menus */
#menu li:first-child li{
background:#2A2333;
}
#menu li:nth-child(2) li{
background:#333A40;
}
#menu li:nth-child(3) li{
background:#9F391A;
}
#menu li:last-child li{
background:#677F35;
}
/* background des liens menus et sous menus au survol */
#menu li:first-child:hover, #menu li:first-child li:hover{
background:#65537A;
}
#menu li:nth-child(2):hover, #menu li:nth-child(2) li:hover{
background:#729EBF;
}
#menu li:nth-child(3):hover, #menu li:nth-child(3) li:hover{
background:#F6AD1A;
}
#menu li:last-child:hover, #menu li:last-child li:hover{
background:#CFFF6A;
}
/* les a href */
#menu a{
text-decoration:none;
display:block;
padding:8px 32px;
color:#fff;
font-family:arial;
}
#menu ul a{
padding:15px 0;
text-align: center
}
#menu li:hover li a{
color:#fff;
text-transform:inherit;
}
#menu li:hover a, #menu li li:hover a{
color:#000;
}

</style>


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
<IMG class="displayed" src="https://cdn.discordapp.com/attachments/755502832295346309/826077511275249674/stockid.png" alt="stockid">

<br><br>
<style>
      button {
      display: inline-block;
      background-color: lightred;
      border-radius: 100px;
      border: 4px double #cccccc;
      color: #eeeeee;
      text-align: center;
      font-size: 28px;
      padding: 5px;
      width: 300px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
      }
      button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
      }
      button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
      }
      button:hover {
      background-color: #f7c2f9;
      }
      button:hover span {
      padding-right: 25px;
      }
      button:hover span:after {
      opacity: 1;
      right: 0;
      }
    </style>
  </head>
<center><button>
<a href = "deconnection.php">Logout</a>
</center></button>

    </body>
</html>
