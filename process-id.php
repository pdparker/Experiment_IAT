<?php
    session_start();

//function to generate random code;
    function generateRandomString($length = 15) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
  	  for ($i = 0; $i < $length; $i++) {
   	       $randomString .= $characters[rand(0, strlen($characters) - 1)];
 	          }
 		     return $randomString;
		     }

     $regName = generateRandomString();
    //$_SESSION[‘regName’] = $regName;
    setcookie("id", $regName, time()+3600, '/', NULL, 0 );
    //phpinfo();
//    $fp=fopen("test.txt", "a");
//    $savestring=$regName.PHP_EOL;
//    fwrite($fp,$savestring);
//    fclose($fp);
    $urlist=file("linkList.txt");
    $nl=count($urlist);
    $np=rand(0,$nl-1);
    $url=trim($urlist[$np]);
    setcookie("arm", $url, time()+3600, '/', NULL, 0 );
    header("Location: $url");
    exit;
?>

