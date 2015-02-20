<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Light The Knight | Campus Activities Board</title>
    <link href='style.css' rel='stylesheet'>
    <!-- Import Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- Load FontAwesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Import jQuery from Google -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        <?php switch (isset($_GET['p']) ? $_GET['p']: "") {
            case "zombies": echo "#runners, #volunteers { display: none; }";
            break;
            case "volunteers": echo "#runners, #zombies { display: none; }";
            break;
            default: echo "#zombies, #volunteers { display: none; }";
        }
        
        ?>
    </style>
<head>