<?php
    session_start();
    $id=$_COOKIE['id'];
    $arm=$_COOKIE['arm'];
    $age=$_POST['age'];
    $sex=$_POST['sex'];
    $year=$_POST['year'];
    $sex4=$_POST['sex4'];
    $att4a=$_POST['att4a'];
    $att4b=$_POST['att4b'];
    $att4c=$_POST['att4c'];
    $att4d=$_POST['att4d'];
    $att4e=$_POST['att4e'];
    $sex5=$_POST['sex5'];
    $att5a=$_POST['att5a'];
    $att5b=$_POST['att5b'];
    $att5c=$_POST['att5c'];
    $att5d=$_POST['att5d'];
    $att5e=$_POST['att5e'];
    $sex6=$_POST['sex6'];   
    $att6a=$_POST['att6a'];
    $att6b=$_POST['att6b'];
    $att6c=$_POST['att6c'];
    $att6d=$_POST['att6d'];
    $att6e=$_POST['att6e'];
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
    $att10i=$_POST['att10i'];
    $att10j=$_POST['att10j'];
    $att10k=$_POST['att10k'];
    $att11=$_POST['att11'];
    $att12=$_POST['att12'];
    $att13=$_POST['att13'];
    $att14=$_POST['att14'];
    $att15=$_POST['att15'];
    $att16=$_POST['att16'];
    $att17a=$_POST['att17a'];
    $att17b=$_POST['att17b'];
    $att17c=$_POST['att17c'];
    $att17d=$_POST['att17d'];
    $att17e=$_POST['att17e'];
    $att17f=$_POST['att17f'];
    $att17g=$_POST['att17g'];
    $att17h=$_POST['att17h'];
    $att18=$_POST['att18'];
    $att19=$_POST['att19'];
    $att20=$_POST['att20'];
    $att21=$_POST['att21'];
    $fi=$_POST['fi'];
    $li=$_POST['li'];
    $mi=$_POST['mi'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $code=$fi.$li.$mi.$day.$month;

    $my_file = "./output/".$id.".txt";
    $fp = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    $savestring=$id.",".$arm.",".$age.",".$sex.",".$year.",".$sex4.",".$sex5.",".$sex6.",".
    $att4a.",".$att4b.",".$att4c.",".$att4d.",".$att4e.",".
    $att5a.",".$att5b.",".$att5c.",".$att5d.",".$att5e.",".$att6a.",".$att6b.",".$att6c.",".$att6d.",".$att6e.",".
    $att7.",".$att8.",".$att9.",".
    $att10a.",".$att10b.",".$att10c.",".$att10d.",".$att10e.",".$att10f.",".$att10g.",".$att10h.",".$att10i.",".$att10j.",".$att10k.",".
    $att11.",".$att12.",".$att13.",".$att14.",".$att15.",".$att16.",".
    $att17a.",".$att17b.",".$att17c.",".$att17d.",".$att17e.",".$att17f.",".$att17g.",".$att17h.",".
    $att18.",".$att19.",".$att20.",".$att21.",".$code.PHP_EOL;
    fwrite($fp,$savestring);
    fclose($fp);

   // phpinfo();

    ?>

<html>
    <head>
        <title>Gender in medicine</title>
        <!-- The following tag allows for website to be viewed on mobile devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
        <!-- Custom styles for this template -->
        <link href="non-responsive.css" rel="stylesheet">
    </head>
    <body>
     <div class="container">

         <div class="page-header">
            <h1>Thank you for your participation. If you are interested in the outcome of this research please  <a href="mailto:rbp774@uowmail.edu.au">email</a> me.</h1> 
      </div>
</div>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>    
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    </body>
</html>

