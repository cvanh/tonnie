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
        <img src="assets/fotos/logo.png" alt="logo tonny's">
    </div>
    <div class="sidebar">
        <ul>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='dominos-sidebar'>Dominos<br><br></a></li>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='papajones-sidebar'>Papa Jones<br><br></a></li>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="new-york-sidebar">New York pizza<br><br></a></li>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='il-forono-sidebar'>Il-forno<br><br></a></li>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="mehtap-sidebar">Mehtap<br><br></a></li>
        </ul>
    </div>
    <!--einde template -->
    <div id="artikelen">
        <div id="artikel1">
            <p>plaats comment</p>
            <form action="/action_page.php">
                <label for="fname">gebruikersnaam</label>
                <input type="text" id="gebruikersnaam" name="gebruikersnaam"><br><br>
                <label for="lname">comment</label>
                <input type="text" id="comment" name="comment"><br><br>
                <label for="fname">wachtwoord</label>
                <input type="text" id="wachtwoord" name="wachtwoord"><br><br>
                <input type="submit" value="Submit">
            </form>
<!--INSERT INTO `comment` (`id`, `gebruikersnaam`, `datum`, `id_comment`, `id_artikel`, `comment`, `score`, `wachtwoord`) VALUES ('$id', '$username', '$date', '$id_comment', '$id_artikel', '$comment', '$score', '$password'); -->


        </div>


    </div>

</body>

</html>