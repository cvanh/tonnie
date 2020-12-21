<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tonny's pizza reviews and more</title>
    <link rel="stylesheet" href="assets/css/style.css">  <!--importeert css -->

    <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body id='body' class='fonts'> <!-- start tempplate-->
    <div class="header"></div>
    <div class="logo">
        <img src="assets/fotos/logo.png" alt="logo tonny's" width="200px">
    </div>
    <div class="sidebar">
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='dominos-sidebar'>dominos</a>
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='papajones-sidebar'>Papa Jones</a>
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="new-york-sidebar">new york</a>
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='il-forono-sidebar'>Il-forono</a>
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="mehtap-sidebar">Mehtap</a>
    </div><!--einde template -->
<div id="artikelen">
    <div id="artikel1">
        <p>hier gaan de artikelen en shit en nog meer maar ik weet niet wat ik hier moet typen ommdat ik de lorum ispsum plugin niet heb.
        </p>
<?php
$servername = "83.162.165.175";
$username = "cvanh";//spreekt voor zich zelf
$password = "XJeuLU75Vp2EZbM"; //spreekt voor zich zelf
$dbname = "comments";// database naam
$artikel_nummer = "1";//DIT IS BELANGERIJK VOER HIER HET ARTIKEL NUMMER IN OM TE KUNNEN SORTEREN IN HET DATABASE

//SELECT * FROM `comments` WHERE id_artikel=1 selecteert alle comments onder artikel 1
// SELECT COUNT(id_artikel) FROM `comments` kijkt hoeveel comments er zijn
$conn = new mysqli($servername, $username, $password, $dbname); // verbint met de database

if ($conn->connect_error) { // checkt of de connectie gelukt is
    die("connectie mislukt: " . $conn->connect_error);
  } 

$sql_query = "SELECT COUNT(id_artikel) FROM `comments`";
$sql_result = $conn->query($sql_query);
echo($sql_result);
// for ($x = 0; $x <= $hoeveel_artikelen; $x++) {
//     echo "The number is: $x <br>";
//   } 









$conn->close(); //sluit de connectie met de database
?>
        
    </div>


</div>
    
</body>

</html>