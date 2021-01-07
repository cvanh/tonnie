<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tonny's pizza reviews and more</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--importeert css -->

    <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body id='body' class='fonts'>
    <!-- start tempplate-->
    <div class="header"></div>
    <div class="logo">
        <img src="../assets/fotos/logo.png" alt="logo tonny's" width="200px">
    </div>
    <div class="sidebar">
      <ul>
        
      </ul>
    </div>
    <!--einde template -->
    <div id="artikelen">
        <div id="artikel1">
            <p>hier gaan de artikelen en shit en nog meer maar ik weet niet wat ik hier moet typen ommdat ik de lorum ispsum plugin niet heb.
            </p>

            <br>
            <br>
            <br>
            <br>
            <div id='comments'>

                <?php
                
                //  include 'login.php'; //in dit bestanden staan de login gegevens LET OP CHECK OF DIT AL AAN JE .gitignore STAAT
                $servername = "83.162.165.175";
                $username = "school";
                $password = "school";
                $dbname = "comments";
                 $artikel_nummer = "1"; //DIT IS BELANGERIJK VOER HIER HET ARTIKEL NUMMER IN OM TE KUNNEN SORTEREN IN HET DATABASE
                // $sql = "INSERT INTO `comments` (`gebruikersnaam`, `datum`, `id_comment`, `id_artikel`, `comment`, `score`) VALUES (\'gebruikersnaam\', \'2020-12-22\', \'1\', \'200\', \'comment\', \'696969\')";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM `comment` "; // haalt alle comments er uit die niet van de correcte artikel zijn

                $result = $conn->query($sql); // maakt de echte vraag aan de datbase 

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        // oke dit ziet er ingewikkeld uit maar ik leg het uit: hij maakt een regel aan met de data die die uit de database haalt  
                        echo ("<button class='verwijderknop' id='verwijderknopnummer" . $row["id_comment"] . "'>verwijderen</button>"); // op deze regel maakt die de verwijderknop dit moet je nog aanpassen dat die het opvangt en verwijderd, ik ga niet alles voor je voorkouwen 
                        echo $row["gebruikersnaam"] . " zei op: " . $row["datum"] . " " . $row["comment"];
                        echo("<br>");
                    }
                } else {
                    echo "er zijn nog geen comments geplaats"; //in het geval dat er ooit geen comments zijn omdat je perongeluk alles hebt verwijderd krijg je een error
                }


                //TODO: verwijderknopnummer OPVANGEN EN NAAR FUNCTIE DELETE COMMENT
                //function deletecomment (){ // dit verwijderd de comment gebruik de parameter om de comment id 
               
                $sqldelete = "DELETE FROM comments WHERE id_comment={$_POST['comment']}";
            // DELETE FROM comments WHERE id_comment='commentid' ; de sql vraag
                //$id_comment = $_GET['verwijder comment'];
                //$commentdelete = $conn ->query($sqldelete); 

                // $sql = "INSERT INTO comment (id, gebruikersnaam, datum, id_comment, id_artikel, comment, score, wachtwoord)
                // VALUES ('1', 'Maxietaxi', '30/10/2019', '6969', '420' 'blablablabla', '5', '' now())";






                $conn->close();
                ?>
                ></div>
        </div>


    </div>

    <form action="moderatie.php" method="post">
</body>

</html>