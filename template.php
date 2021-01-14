<!DOCTYPE html>
<html lang="en">
<!-- TODO VERANDER LIJN 47 VALUE= NAAR ARTIKEL NUMMER EN LIJN 58 NAAR ARTIKEL NUMMER -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tonny's pizza reviews and more</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!--importeert css -->

    <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body id='body' class='fonts'>
    <!-- start tempplate-->
    <div class="header"></div>
    <div class="logo">
        <img src="./assets/fotos/logo.png" alt="logo tonny's" width="200px">
    </div>
    <div class="sidebar">
      <ul>
        <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='dominos-sidebar'>Dominos<br><br></a></li>
        <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='papajones-sidebar'>Papa Jones<br><br></a></li>
        <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="new-york-sidebar">New York pizza<br><br></a></li>
        <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='il-forono-sidebar'>Il-forno<br><br></a></li>
        <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="mehtap-sidebar">Mehtap<br><br></a></li>
      </ul> 
    </div><!--einde template -->
    <!--einde template -->
    <div id="artikelen">
        <div id="artikel1">
            <p>hier gaan de artikelen en shit en nog meer maar ik weet niet wat ik hier moet typen ommdat ik de lorum ispsum plugin niet heb.
            </p>

            <br>
            <br>
            <br>
            <br>
            <div link>maak comment</div>
            <form method='post' action="./admin/createcomment.php">
                <label for="gebruikersnaam">gebruikersnaam</label>
                <input type="text" id="gebruikersnaam_comment" name="gebruikersnaam_comment"><br><br>
                <label for="comment">comment</label>
                <input type="text" id="comment" name="comment"><br><br>
                <label style="visibility: hidden;" for="id_artikel">artikel nummer</label> 
                <input style="visibility: hidden;" type="text" id="id_artikel" name="id_artikel" value="1" readonly>
                <!-- <label for="fname">wachtwoord</label>
                <input type="text" id="wachtwoord_comment" name="wachtwoord_comment"><br><br> -->
                <br>
                <input type="submit" value="Submit">
            </form>

                <?php
                //TODO VERANDER LIJN 47 VALUE= NAAR ARTIKEL NUMMER EN LIJN 58 NAAR ARTIKEL NUMMER
                include 'login.php'; //in dit bestanden staan de login gegevens LET OP CHECK OF DIT AL AAN JE .gitignore STAAT
                $servername = "83.162.165.175";
                $dbname = "comments";
                $artikel_nummer = "1"; //DIT IS BELANGERIJK VOER HIER HET ARTIKEL NUMMER IN OM TE KUNNEN SORTEREN IN HET DATABASE
                // $sql = "INSERT INTO `comments` (`gebruikersnaam`, `datum`, `id_comment`, `id_artikel`, `comment`, `score`) VALUES (\'gebruikersnaam\', \'2020-12-22\', \'1\', \'200\', \'comment\', \'696969\')";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM `comment` WHERE id_artikel=" . $artikel_nummer; // haalt alle comments er uit die niet van de correcte artikel zijn

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo $row["gebruikersnaam"] . " zei op: " . $row["datum"] . " " . $row["comment"] . "<br>";
                    }
                } else {
                    echo "er zijn nog geen comments geplaats";
                }
                $conn->close();
                
                ?>
                ></div>
        </div>


    </div>

</body>

</html>
