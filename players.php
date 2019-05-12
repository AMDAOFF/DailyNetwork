<?php
    session_start();
    include 'Assets/PHP/Includes/settings.php';
    require $AutoLoadPath;

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
    <div class="items">
    <?php 
        for ($i=0; $i < count($serversInfo); $i++) { 
            echo '<div class="collapse-container">';
                echo '<button class="collapsible">' . $serverList[$i]["server_name"] . '</button>';
                echo '<div class="content">';
                if (!empty($serversInfo[$i])) {
                    echo "<ol>";
                        foreach ($serversInfo[$i] as $item) {
                            echo '<li><span class="player-id">' . $item["id"] . "</span> " . $item["name"] . "</li>";
                        }
                    echo "</ol>";
                }

                else {
                    echo "INGEN ONLINE SPILLERE";
                }
                echo "</div>";
            echo "</div>";
        }
    ?>
    </div>
    <script type="text/javascript" src="Assets/JS/expandables.js"></script>

</body>
</html>