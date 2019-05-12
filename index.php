<?php
    session_start();
    require "Assets/PHP/Includes/settings.php";
    require $AutoLoadPath;

    $serverList = $server->GetServerList();
    $comOnlinePlayers = 0;
    $userManager = null;

    // Counting all of the online players for all of the servers
    foreach ((array) $serverList as $serveritem) {
        
        // Pinging the server to see if the server is online
        $serverOnline = $server->ServerOnline($serveritem["server_ip"], $serveritem["server_port"]);

        // Checking if the server is online, if it is it will count the online players
        if ($serverOnline) {
            $sinfo = $server->GetOnlineUsers($serveritem["server_ip"], $serveritem["server_port"]);
            if (empty($sinfo)) {
                $comOnlinePlayers += 0;
            }

            else {
                $comOnlinePlayers += count($sinfo);
            }
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
                ONLINE MEDLEMMER: <?php echo $comOnlinePlayers; ?>
            </online-count>
        </header-buttom>
    </header>
</body>
</html>