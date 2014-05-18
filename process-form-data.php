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

