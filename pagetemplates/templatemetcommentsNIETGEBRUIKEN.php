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
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='dominos-sidebar'>dominos</a>
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='papajones-sidebar'>Papa Jones</a>
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="new-york-sidebar">new york</a>
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='il-forono-sidebar'>Il-forono</a>
        <a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="mehtap-sidebar">Mehtap</a>
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
                <a href="../admin/createcomment.php">plaats comment</a>

                <form method='post' action="./createcomment.php">
                <label for="fname">gebruikersnaam</label>
                <input type="text" id="gebruikersnaam" name="gebruikersnaam"><br><br>
                <label for="lname">comment</label>
                <input type="text" id="comment" name="comment"><br><br>
                <label for="fname">wachtwoord</label>
                <input type="text" id="wachtwoord" name="wachtwoord"><br><br>
                <input type="submit" value="Submit"> -->
            </form>

                <?php

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

                $sql = "SELECT * FROM `comments` WHERE id_artikel=" . $artikel_nummer; // haalt alle comments er uit die niet van de correcte artikel zijn

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo $row["gebruikersnaam"] . " zei op: " . $row["datum"] . " " . $row["comment"] . "<br>";
                    }
                } else {
                    echo "er zijn nog geen comments geplaats";
                }
                // INSERT INTO `comment` (`id`, `gebruikersnaam`, `datum`, `id_comment`, `id_artikel`, `comment`, `score`, `wachtwoord`) VALUES ('$id', '$username', '$date', '$id_comment', '$id_artikel', '$comment', '$score', '$password');







                $conn->close();
                ?>
                ></div>
        </div>


    </div>

</body>

</html>