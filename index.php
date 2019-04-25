<?php

    require "Components/PHP/autoload.php";


    $serverIp = "134.255.220.70";
    $serverPort = "32012";

    // Getting all of the online players
    $players = $server->GetOnlineUsers($serverIp, $serverPort);
    $info = $server->GetServerInfo($serverIp, $serverPort);

?>

<!DOCTYPE html>
<html>
<head>

    <!-- LINKING ALL OF THE CSS FILES NECCESARRY -->
    <link rel="stylesheet" type="text/css" href="Assets/CSS/comm_vars.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/main_style.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/comm_menu.css">

    <!-- FONT INITIALIZATION -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 

    <title>DailyNetwork</title>
</head>
<body>

    <?php include('Assets/PHP/navigation.php'); ?>

    <header>
        <header-top>
        </header-top>

        <header-middle>
            <page-title>
                <span class="comm-col-1">Daily</span>
                <span class="comm-col-2">Network</span>
            </page-title>
            <br>
            <page-slogan>
                SOME SLOGAN THAT SOUNDS NICE GOES HERE
            </page-slogan>
        </header-middle>

        <header-buttom>
            <online-count>
                ONLINE SPILLERE: 
                <?php if (!empty($players)) {
                    echo count($players);
                }

                else {
                    echo 0;
                } ?>
            </online-count>
        </header-buttom>
    </header>
</body>
</html>