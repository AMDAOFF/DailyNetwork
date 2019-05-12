<?php
    session_start();
    require "Components/PHP/autoload.php";
    $servers = $server->GetServerList();
?>

<!DOCTYPE html>
<html>
<head>

    <!-- LINKING ALL OF THE CSS FILES NECCESARRY -->
    <link rel="stylesheet" type="text/css" href="Assets/CSS/comm_vars.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/main_style.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/comm_menu.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/comm_servers.css">

    <!-- FONT INITIALIZATION -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 

    <title>DailyNetwork</title>
</head>
<body>

    <?php include('Assets/PHP/navigation.php'); ?>
    <br><br><br>
    <br><br><br>
    <?php 
        for ($i=0; $i < count($servers); $i++) { 
            $serverOnline = $server->ServerOnline($servers[$i]["server_ip"], $servers[$i]["server_port"]);
            $online;
            $info;

            if ($serverOnline) {
                $info = $server->GetServerInfo($servers[$i]["server_ip"], $servers[$i]["server_port"]);
                $online = count($server->GetOnlineUsers($servers[$i]["server_ip"], $servers[$i]["server_port"]));
            }

            else
            {
                $online = 0;
                $info = null;
            }

            echo '<div class="server-row">';
                echo '<div class="server-item">';
                    echo '<div class="server-item-head">';
                        if ($serverOnline && $info["icon"] != "") {
                            echo '<img class="server-icon" src="data:image/png;base64, ' . $info["icon"] . '"/>';
                        }

                        else
                        {
                            echo '<img class="server-icon" src="Assets/IMG/offline.png"/>';
                        }

                        echo '<h1>' . $servers[$i]["server_name"] . '</h1>';
                    echo '</div>';
                    echo '<p>PLAYERS ONLINE: ' . $online . '</p>';
                    if ($serverOnline) {
                        echo "<a class='connect-btn' href='fivem://connect/" . $servers[$i]["server_ip"] . ":" .  $servers[$i]["server_port"]  . "''>FORBIND</a><br><br><br>";
                    }

                    else {
                        echo "<a class='connect-btn-offline'>OFFLINE</a><br><br><br>";
                    }
                echo '</div>';
            echo '</div>';
        }
    ?>


</body>
</html>