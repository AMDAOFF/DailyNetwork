 <?php
/**
 * 
 */
class Server
{
    // Getting all of the online users
    function GetOnlineUsers($serverIp, $serverPort)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => $serverPort,
            CURLOPT_URL => "http://" . $serverIp . ":" . $serverPort .  "/info.json",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "Postman-Token: c28f038c-f78e-4a2a-aa32-cb11b4a78709",
                "cache-control: no-cache"
            )
        ));
        
        $response = curl_exec($curl);
        $err      = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            
        } else {
            $format = json_decode($response, true);
            asort($format);
            return $format;
        }
        
    }

    // Getting all of the server information
    function GetServerInfo($serverIp, $serverPort)
    {
    	$curl = curl_init();
		curl_setopt_array($curl, array(
		    CURLOPT_PORT => $serverPort,
		    CURLOPT_URL => "http://" . $serverIp . ":" . $serverPort .  "/info.json",
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => "",
		    CURLOPT_MAXREDIRS => 10,
		    CURLOPT_TIMEOUT => 1,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => "GET",
		    CURLOPT_POSTFIELDS => "",
		    CURLOPT_HTTPHEADER => array(
		        "Postman-Token: 6e427f9f-e2a3-4e50-b330-767e2ae66d1f",
		        "cache-control: no-cache"
		    )
		));

		$response = curl_exec($curl);
		$err      = curl_error($curl);

		curl_close($curl);

		if ($err) {
		    
		} else {
		    $format = json_decode($response, true);
            asort($format);
            return $format;
		}
    }
}
?> 