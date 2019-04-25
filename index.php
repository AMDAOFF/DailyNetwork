<?php

    require "Components/PHP/autoload.php";

    // Getting all of the online players
    $players = $server->GetOnlineUsers();

?>

<!DOCTYPE html>
<html>
<head>

    <!-- LINKING ALL OF THE CSS FILES NECCESARRY -->
    <link rel="stylesheet" type="text/css" href="Assets/CSS/comm_vars.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/main_style.css">

    <!-- FONT INITIALIZATION -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 

    <title>DailyNetwork</title>
</head>
<body>
    <header>
        <header-top>
        </header-top>

        <header-middle>
            <h1>
                <span class="comm-col-1">Daily</span>
                <span class="comm-col-2">Network</span>
            </h1>
        </header-middle>

        <header-buttom>
        </header-buttom>
    </header>
</body>
</html>