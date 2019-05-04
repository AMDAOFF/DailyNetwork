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
    <br><br><br>
    <br><br><br>
    <?php 
        for ($i=0; $i < count($serversInfo); $i++) { 
            echo "<h1>" . $serverList[$i]["server_name"] . "";
            if (!empty($serversInfo[$i])) {
                echo " {" . count($serversInfo[$i]) . "}</h1>";
                echo "<ol>";
                    foreach ($serversInfo[$i] as $item) {
                        echo '<li><span class="player-id">' . $item["id"] . "</span> " . $item["name"] . "</li>";
                    }
                echo "</ol>";
            }

            else {
                echo " {0}</h1>";
            }
        }
    ?>

</body>
</html>