<?php
    session_start();
    $regName = $_POST['regName'];
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

