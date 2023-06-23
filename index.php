<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paul</title>


    <?php 
    // Hi Paul ich hab schon mal angefangen es steht alles da was gemacht werden muss!
    ini_set("error_reporting", 1);
    $benutzername = $_POST["u"];
    $passwort1 = $_POST["p1"];
    $passwort2 = $_POST["p2"];

    // funktion ob beide Passwörter übereinstimmen
    // ...
    if(isset($passwort1))
        if($passwort1 == $passwort2) echo "hallo2";

    $vergebene_benutzernsmen = array("Sandro", "paul", "jochen", "christian", "mm");
    // funktion ob Benutzernme bereits vergeben
    // ...
    if(isset($benutzername))
    for(; count($vergebene_benutzernsmen); ){
        echo "hallo " . $benutzername;
    }


    // neues array initialisiren in dem bentzer mit passwort gespeichert werden kann key value pair (passwörter erfinden)
    // ...
    $_ = array("" => "");

    // funktion wenn benutzername nicht vorhanden zu array hinzufügen mit passwort 
    // ...
    $_["test"] = "45"; # => "neuer benutzer";
    //var_dump($_);

    // funktion zum umwandeln eines Strings zu einem Array
    // tipp gibt es schon explo...

    // funktion zum finden des höchsten wertes in ver. arrays
    $a1 = array(12, 676, 34, 99, 12, -45);
    $a2 = array(12, 676, 34, 99, 12, -45, 23, 777, 123);
    $a3 = array(-12, -676, -34, -99, -12, -45, -23, -777, -123, 45, 3498, 23);
    $a4 = array(array(45, 56), array(67, 345), array(1212, -23));

    // funktionen zum finden des niedrigsten wertes

    // funktionen zum berechnen der summe eines arrays


    ?>
</head>
<body>
    <form action="index.php" class="form" method="POST">
        <label for="">Username<input type="text" name="u"><br class="br"></label>
        <label for="">Passwort1<input type="password" name="p1"><br></label>
        <label for="">Passwort2 <input type="text" name="p2"><br> </label>
        <p>z.B: hallo wie geht es dir?</p>
        <label for="">String <input type="text" name="string"><br> </label>
        <input type="submit">



    </form>
    
</body>
</html>