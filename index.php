<?php
    require "Components/PHP/autoload.php";

    $serverList = $server->GetServerList();

    $serversInfo = array();
    $players = array();

    $comOnlinePlayers = 0;

    foreach ($serverList as $serveritem) {
        array_push($serversInfo, $server->GetOnlineUsers($serveritem["server_ip"], $serveritem["server_port"]));
    }

    for ($i=0; $i < count($serversInfo); $i++) { 
        if (empty($serversInfo[$i])) {
            $comOnlinePlayers += 0;
        }

        else {
            $comOnlinePlayers += count($serversInfo[$i]);
        }
    }
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
                ONLINE MEDLEMMER: <?php echo $comOnlinePlayers; $userManager->Login("asd"); ?>
            </online-count>
        </header-buttom>
    </header>
</body>
</html>