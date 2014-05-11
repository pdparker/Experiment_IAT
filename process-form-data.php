<?php
    session_start();
    $id=$_COOKIE['id'];
    $arm=$_COOKIE['arm'];
    $age=$_POST['age'];
    $sex=$_POST['sex'];
    $year=$_POST['year'];
    $att4=$_POST['att4'];
    $att5=$_POST['att5'];
    $att6=$_POST['att6'];
    $att7=$_POST['att7'];
    $att8=$_POST['att8'];
    $att9=$_POST['att9'];
    $att10a=$_POST['att10a'];
    $att10b=$_POST['att10b'];
    $att10c=$_POST['att10c'];
    $att10d=$_POST['att10d'];
    $att10e=$_POST['att10e'];
    $att10f=$_POST['att10f'];
    $att10g=$_POST['att10g'];
    $att10h=$_POST['att10h'];
    $att11=$_POST['att11'];
    $att12=$_POST['att12'];
    $att13=$_POST['att13'];
    $att14=$_POST['att14'];
    $fi=$_POST['fi'];
    $li=$_POST['li'];
    $mi=$_POST['mi'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $code=$fi.$li.$mi.$day.$month;

    $my_file = "./output/".$id.".txt";
    $fp = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
   // $fp=fopen("formdata.txt", "a");
    $savestring=$id.",".$arm.",".$age.",".$sex.",".$year.",".$att4.",".$att5.",".$att6.",".$att7.",".$att8.",".$att9.",".$att10a.",".$att10b.",".$att10c.",".$att10d.",".$att10e.",".$att10f.",".$att10g.",".$att10h.",".$att11.",".$att12.",".$att13.",".$att14.",".$code.PHP_EOL;
    fwrite($fp,$savestring);
    fclose($fp);

   // phpinfo();

    echo"<h1>Thank you for your participation. If you are interested in the outcome of this research please email me.</h1>"
?>