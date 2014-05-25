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
    </head>

	<body>
    <div class="container">
         <div class="page-header">
            <h1>Survey</h1> 
            <p class="lead">Thanks for doing the IAT (<i>phew</i> that was hard). Now I just want to get a little more information from you and ask you a few questions.</p>

      </div>

    <FORM NAME="web_form" id="web_form" method="post" action="process-form-data_pg.php">
    <fieldset>
			<legend>Demographics</legend>

                <label>1. What is your age in years: </label>
                <input type="text" name="age" size="3" maxlength="3" id="age" /><br />
                <label>2. Gender: </label>
				<input type="radio" name="sex" value="male" id="sex"/> Male
				<input type="radio" name="sex" value="female" id="sex"/> Female
                <input type="radio" name="sex" value="other" id="sex"/> Other
                <input type="radio" name="sex" value="NA" id="sex" checked="checked"/> Would Rather Not Say
                <br />
				<label>3. What year of your medical degree are you in?</label>
				<select name="year" id="year">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
				<select><br />
		</fieldset><br />
        <fieldset>
            <legend>Questionnaire</legend>
                <?php
                    $text=array('male', 'female');
                    $nl=count($text);
                    $np=rand(0,$nl-1);
                    $Rtext=trim($text[$np]);
                    print "<label>4. A 35 year old $Rtext office worker describes increasingly frequent episodes of feeling anxious and light-headed with a racing heart and a fine hand tremor. She/he also described recent weight loss and some work-related stresses.</label>
                        <input type='hidden' name='sex4' value='$Rtext'>"
                ?>
                <input type='hidden' name='att4a' value='NA' checked="checked">
                <input type='hidden' name='att4b' value='NA' checked="checked">
                <input type='hidden' name='att4c' value='NA' checked="checked">
                <input type='hidden' name='att4d' value='NA' checked="checked">
                <input type='hidden' name='att4e' value='NA' checked="checked">

                <table class="table table-striped">
                    <tr>
                        <th>Diagnosis</th>
                        <th>impossible</th>
                        <th>very unlikely</th>
                        <th>unlikely</th>
                        <th>likely</th>
                        <th>very likely</th>
                        <th>certain</th>
                    </tr>
                    <tr>
                        <td>Acute panic disorder</td>
                        <td><input type="radio" name="att4a" value="0" id="att4a"/></td>
                        <td><input type="radio" name="att4a" value="1" id="att4a"/></td>
                        <td><input type="radio" name="att4a" value="2" id="att4a"/></td>
                        <td><input type="radio" name="att4a" value="3" id="att4a"/></td>
                        <td><input type="radio" name="att4a" value="4" id="att4a"/></td>
                        <td><input type="radio" name="att4a" value="5" id="att4a"/></td>
                    </tr>
                    <tr>
                        <td>Chronic anxiety disorder</td>
                        <td><input type="radio" name="att4b" value="0" id="att4b"/></td>
                        <td><input type="radio" name="att4b" value="1" id="att4b"/></td>
                        <td><input type="radio" name="att4b" value="2" id="att4b"/></td>
                        <td><input type="radio" name="att4b" value="3" id="att4b"/></td>
                        <td><input type="radio" name="att4b" value="4" id="att4b"/></td>
                        <td><input type="radio" name="att4b" value="4" id="att4"/></td>
                    </tr>
                    <tr>
                        <td>Myocardial ischemia</td>
                        <td><input type="radio" name="att4c" value="0" id="att4c"/></td>
                        <td><input type="radio" name="att4c" value="1" id="att4c"/></td>
                        <td><input type="radio" name="att4c" value="2" id="att4c"/></td>
                        <td><input type="radio" name="att4c" value="3" id="att4c"/></td>
                        <td><input type="radio" name="att4c" value="4" id="att4c"/></td>
                        <td><input type="radio" name="att4c" value="4" id="att4c"/></td>
                    </tr>
                    <tr>
                        <td>Supraventricular tachycardia</td>
                        <td><input type="radio" name="att4d" value="0" id="att4d"/></td>
                        <td><input type="radio" name="att4d" value="1" id="att4d"/></td>
                        <td><input type="radio" name="att4d" value="2" id="att4d"/></td>
                        <td><input type="radio" name="att4d" value="3" id="att4d"/></td>
                        <td><input type="radio" name="att4d" value="4" id="att4d"/></td>
                        <td><input type="radio" name="att4d" value="5" id="att4d"/></td>
                    </tr>
                    <tr>
                        <td>Thyrotoxicosis</td>
                        <td><input type="radio" name="att4e" value="0" id="att4e"/></td>
                        <td><input type="radio" name="att4e" value="1" id="att4e"/></td>
                        <td><input type="radio" name="att4e" value="2" id="att4e"/></td>
                        <td><input type="radio" name="att4e" value="3" id="att4e"/></td>
                        <td><input type="radio" name="att4e" value="4" id="att4e"/></td>
                        <td><input type="radio" name="att4e" value="5" id="att4e"/></td>
                    </tr>
                </table>

                <?php
                    $text=array('male', 'female');
                    $nl=count($text);
                    $np=rand(0,$nl-1);
                    $Rtext=trim($text[$np]);
                    print "<label>5. A 45 year-old $Rtext reports an episode of chest pain while sitting on the sofa watching a morning television program. The pain was associated with shortness of breath and a sensation of feeling frightened, sweaty and shaky.
                        </label>
                        <input type='hidden' name='sex5' value='$Rtext'>"
                ?>
                <input type='hidden' name='att5a' value='NA' checked="checked">
                <input type='hidden' name='att5b' value='NA' checked="checked">
                <input type='hidden' name='att5c' value='NA' checked="checked">
                <input type='hidden' name='att5d' value='NA' checked="checked">
                <input type='hidden' name='att5e' value='NA' checked="checked">

                <table class="table table-striped">
                    <tr>
                        <th>Diagnosis</th>
                        <th>impossible</th>
                        <th>very unlikely</th>
                        <th>unlikely</th>
                        <th>likely</th>
                        <th>very likely</th>
                        <th>certain</th>
                    </tr>
                    <tr>
                        <td>Acute stress disorder</td>
                        <td><input type="radio" name="att5a" value="0" id="att5a"/></td>
                        <td><input type="radio" name="att5a" value="1" id="att5a"/></td>
                        <td><input type="radio" name="att5a" value="2" id="att5a"/></td>
                        <td><input type="radio" name="att5a" value="3" id="att5a"/></td>
                        <td><input type="radio" name="att5a" value="4" id="att5a"/></td>
                        <td><input type="radio" name="att5a" value="5" id="att5a"/></td>
                    </tr>
                    <tr>
                        <td>Adrenal gland tumour</td>
                        <td><input type="radio" name="att5b" value="0" id="att5b"/></td>
                        <td><input type="radio" name="att5b" value="1" id="att5b"/></td>
                        <td><input type="radio" name="att5b" value="2" id="att5b"/></td>
                        <td><input type="radio" name="att5b" value="3" id="att5b"/></td>
                        <td><input type="radio" name="att5b" value="4" id="att5b"/></td>
                        <td><input type="radio" name="att5b" value="5" id="att5b"/></td>
                    </tr>
                    <tr>
                        <td>Myocardial ischemia</td>
                        <td><input type="radio" name="att5c" value="0" id="att5c"/></td>
                        <td><input type="radio" name="att5c" value="1" id="att5c"/></td>
                        <td><input type="radio" name="att5c" value="2" id="att5c"/></td>
                        <td><input type="radio" name="att5c" value="3" id="att5c"/></td>
                        <td><input type="radio" name="att5c" value="4" id="att5c"/></td>
                        <td><input type="radio" name="att5c" value="5" id="att5c"/></td>
                    </tr>
                    <tr>
                        <td>Panic disorder</td>
                        <td><input type="radio" name="att5d" value="0" id="att5d"/></td>
                        <td><input type="radio" name="att5d" value="1" id="att5d"/></td>
                        <td><input type="radio" name="att5d" value="2" id="att5d"/></td>
                        <td><input type="radio" name="att5d" value="3" id="att5d"/></td>
                        <td><input type="radio" name="att5d" value="4" id="att5d"/></td>
                        <td><input type="radio" name="att5d" value="5" id="att5d"/></td>
                    </tr>
                    <tr>
                        <td>Thyrotoxicosis</td>
                        <td><input type="radio" name="att5e" value="0" id="att5e"/></td>
                        <td><input type="radio" name="att5e" value="1" id="att5e"/></td>
                        <td><input type="radio" name="att5e" value="2" id="att5e"/></td>
                        <td><input type="radio" name="att5e" value="3" id="att5e"/></td>
                        <td><input type="radio" name="att5e" value="4" id="att5e"/></td>
                        <td><input type="radio" name="att5e" value="5" id="att5e"/></td>
                    </tr>
                </table>

                <?php
                    $text=array('male', 'female');
                    $nl=count($text);
                    $np=rand(0,$nl-1);
                    $Rtext=trim($text[$np]);
                    print "<label>6. A 21 year old $Rtext casual worker at a department store presents for a post-operative check-up. She/he was discharged from hospital a week ago after a 3 day admission for surgical repair of a fractured ankle. This morning she/he experienced an episode of shortness of breath associated with a feeling of a racing heart and chest heaviness. She/he is concerned and anxious about the impact of the injury on her fitness and capacity to return to work.</label>
                        <input type='hidden' name='sex6' value='$Rtext'>"
                ?>
                <input type='hidden' name='att6a' value='NA' checked="checked">
                <input type='hidden' name='att6b' value='NA' checked="checked">
                <input type='hidden' name='att6c' value='NA' checked="checked">
                <input type='hidden' name='att6d' value='NA' checked="checked">
                <input type='hidden' name='att6e' value='NA' checked="checked">

                <table class="table table-striped">
                    <tr>
                        <th>Diagnosis</th>
                        <th>impossible</th>
                        <th>very unlikely</th>
                        <th>unlikely</th>
                        <th>likely</th>
                        <th>very likely</th>
                        <th>certain</th>
                    </tr>
                    <tr>
                        <td>Acute anxiety disorder</td>
                        <td><input type="radio" name="att6a" value="0" id="att6a"/></td>
                        <td><input type="radio" name="att6a" value="1" id="att6a"/></td>
                        <td><input type="radio" name="att6a" value="2" id="att6a"/></td>
                        <td><input type="radio" name="att6a" value="3" id="att6a"/></td>
                        <td><input type="radio" name="att6a" value="4" id="att6a"/></td>
                        <td><input type="radio" name="att6a" value="5" id="att6a"/></td>
                    </tr>
                    <tr>
                        <td>Hypotension</td>
                        <td><input type="radio" name="att6b" value="0" id="att6b"/></td>
                        <td><input type="radio" name="att6b" value="1" id="att6b"/></td>
                        <td><input type="radio" name="att6b" value="2" id="att6b"/></td>
                        <td><input type="radio" name="att6b" value="3" id="att6b"/></td>
                        <td><input type="radio" name="att6b" value="4" id="att6b"/></td>
                        <td><input type="radio" name="att6b" value="5" id="att6b"/></td>
                    </tr>
                    <tr>
                        <td>Pulmonary embolism</td>
                        <td><input type="radio" name="att6c" value="0" id="att6c"/></td>
                        <td><input type="radio" name="att6c" value="1" id="att6c"/></td>
                        <td><input type="radio" name="att6c" value="2" id="att6c"/></td>
                        <td><input type="radio" name="att6c" value="3" id="att6c"/></td>
                        <td><input type="radio" name="att6c" value="4" id="att6c"/></td>
                        <td><input type="radio" name="att6c" value="5" id="att6c"/></td>
                    </tr>
                    <tr>
                        <td>Somatisation</td>
                        <td><input type="radio" name="att6d" value="0" id="att6d"/></td>
                        <td><input type="radio" name="att6d" value="1" id="att6d"/></td>
                        <td><input type="radio" name="att6d" value="2" id="att6d"/></td>
                        <td><input type="radio" name="att6d" value="3" id="att6d"/></td>
                        <td><input type="radio" name="att6d" value="4" id="att6d"/></td>
                        <td><input type="radio" name="att6d" value="5" id="att6d"/></td>
                    </tr>
                    <tr>
                        <td>Thyrotoxicosis</td>
                        <td><input type="radio" name="att6e" value="0" id="att6e"/></td>
                        <td><input type="radio" name="att6e" value="1" id="att6e"/></td>
                        <td><input type="radio" name="att6e" value="2" id="att6e"/></td>
                        <td><input type="radio" name="att6e" value="3" id="att6e"/></td>
                        <td><input type="radio" name="att6e" value="4" id="att6e"/></td>
                        <td><input type="radio" name="att6e" value="5" id="att6e"/></td>
                    </tr>
                </table>


                <p><b>On a scale of 0 (strongly disagree) to 5 (strongly agree), please rate your level of agreement with the following statements:</b></p><br />
                <label>7. I had no knowledge of anatomy before commencing my medical degree.</label><br />
                <input type="radio" name="att7" value="0" id="att7"/> 0 (strongly disagree)
                <input type="radio" name="att7" value="1" id="att7"/> 1
                <input type="radio" name="att7" value="2" id="att7"/> 2
                <input type="radio" name="att7" value="3" id="att7"/> 3
                <input type="radio" name="att7" value="4" id="att7"/> 4
                <input type="radio" name="att7" value="5" id="att7"/> 5 (strongly agree)
                <input type="radio" name="att7" value="NA" id="att7" checked="checked"/> Don't Know
                <br /><br />
                <label>8. I am sympathetic towards gender politics/feminism.</label><br />
                <input type="radio" name="att8" value="0" id="att8"/> 0 (strongly disagree)
                <input type="radio" name="att8" value="1" id="att8"/> 1
                <input type="radio" name="att8" value="2" id="att8"/> 2
                <input type="radio" name="att8" value="3" id="att8"/> 3
                <input type="radio" name="att8" value="4" id="att8"/> 4
                <input type="radio" name="att8" value="5" id="att8"/> 5 (strongly agree)
                <input type="radio" name="att8" value="NA" id="att8" checked="checked"/> Don't Know
                <br /><br />

                <label>9. I was anxious before encountering cadaveric material.</label>
                <input type="radio" name="att9" value="0" id="att9"/> 0 (strongly disagree)
                <input type="radio" name="att9" value="1" id="att9"/> 1
                <input type="radio" name="att9" value="2" id="att9"/> 2
                <input type="radio" name="att9" value="3" id="att9"/> 3
                <input type="radio" name="att9" value="4" id="att9"/> 4
                <input type="radio" name="att9" value="5" id="att9"/> 5 (strongly agree)
                <input type="radio" name="att9" value="NA" id="att9" checked="checked"/> Don't Know
                <br /><br />

                <label>10. I was concerned about studying the following parts of the body using cadaveric specimens:</label>
                <td><input type="hidden" name="att10a" value="NA" id="att10a" checked="checked"/></td>
                <td><input type="hidden" name="att10b" value="NA" id="att10b" checked="checked"/></td>
                <td><input type="hidden" name="att10c" value="NA" id="att10c" checked="checked"/></td>
                <td><input type="hidden" name="att10d" value="NA" id="att10d" checked="checked"/></td>
                <td><input type="hidden" name="att10e" value="NA" id="att10e" checked="checked"/></td>
                <td><input type="hidden" name="att10f" value="NA" id="att10f" checked="checked"/></td>
                <td><input type="hidden" name="att10g" value="NA" id="att10g" checked="checked"/></td>
                <td><input type="hidden" name="att10h" value="NA" id="att10h" checked="checked"/></td>
                <td><input type="hidden" name="att10i" value="NA" id="att10i" checked="checked"/></td>
                <td><input type="hidden" name="att10j" value="NA" id="att10j" checked="checked"/></td>
                <td><input type="hidden" name="att10k" value="NA" id="att10k" checked="checked"/></td>

                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <th>Strongly Disagree</th>
                        <th>Disagree</th>
                        <th>Somewhat Disagree</th>
                        <th>Somewhat Agree</th>
                        <th>Agree</th>
                        <th>Strongly Agree</th>
                    </tr>
                    <tr>
                        <td>The face</td>
                       <td><input type="radio" name="att10a" value="0" id="att10a"/></td>
                        <td><input type="radio" name="att10a" value="1" id="att10a"/></td>
                        <td><input type="radio" name="att10a" value="2" id="att10a"/></td>
                        <td><input type="radio" name="att10a" value="3" id="att10a"/></td>
                        <td><input type="radio" name="att10a" value="4" id="att10a"/></td>
                        <td><input type="radio" name="att10a" value="5" id="att10a"/></td>
                    </tr>
                    <tr>
                        <td>The arm</td>
                       <td><input type="radio" name="att10b" value="0" id="att10b"/></td>
                        <td><input type="radio" name="att10b" value="1" id="att10b"/></td>
                        <td><input type="radio" name="att10b" value="2" id="att10b"/></td>
                        <td><input type="radio" name="att10b" value="3" id="att10b"/></td>
                        <td><input type="radio" name="att10b" value="4" id="att10b"/></td>
                        <td><input type="radio" name="att10b" value="5" id="att10b"/></td>
                    </tr>
                    <tr>
                        <td>The hands</td>
                       <td><input type="radio" name="att10c" value="0" id="att10c"/></td>
                        <td><input type="radio" name="att10c" value="1" id="att10c"/></td>
                        <td><input type="radio" name="att10c" value="2" id="att10c"/></td>
                        <td><input type="radio" name="att10c" value="3" id="att10c"/></td>
                        <td><input type="radio" name="att10c" value="4" id="att10c"/></td>
                        <td><input type="radio" name="att10c" value="5" id="att10c"/></td>
                    </tr>
                    <tr>
                        <td>The chest (male)</td>
                       <td><input type="radio" name="att10d" value="0" id="att10d"/></td>
                        <td><input type="radio" name="att10d" value="1" id="att10d"/></td>
                        <td><input type="radio" name="att10d" value="2" id="att10d"/></td>
                        <td><input type="radio" name="att10d" value="3" id="att10d"/></td>
                        <td><input type="radio" name="att10d" value="4" id="att10d"/></td>
                        <td><input type="radio" name="att10d" value="5" id="att10d"/></td>
                    </tr>
                    <tr>
                        <td>The chest (female)</td>
                       <td><input type="radio" name="att10e" value="0" id="att10e"/></td>
                        <td><input type="radio" name="att10e" value="1" id="att10e"/></td>
                        <td><input type="radio" name="att10e" value="2" id="att10e"/></td>
                        <td><input type="radio" name="att10e" value="3" id="att10e"/></td>
                        <td><input type="radio" name="att10e" value="4" id="att10e"/></td>
                        <td><input type="radio" name="att10e" value="5" id="att10e"/></td>
                    </tr>
                    <tr>
                        <td>The abdomen</td>
                       <td><input type="radio" name="att10f" value="0" id="att10f"/></td>
                        <td><input type="radio" name="att10f" value="1" id="att10f"/></td>
                        <td><input type="radio" name="att10f" value="2" id="att10f"/></td>
                        <td><input type="radio" name="att10f" value="3" id="att10f"/></td>
                        <td><input type="radio" name="att10f" value="4" id="att10f"/></td>
                        <td><input type="radio" name="att10f" value="5" id="att10f"/></td>
                    </tr>
                    <tr>
                        <td>The genitals (male)</td>
                       <td><input type="radio" name="att10g" value="0" id="att10g"/></td>
                        <td><input type="radio" name="att10g" value="1" id="att10g"/></td>
                        <td><input type="radio" name="att10g" value="2" id="att10g"/></td>
                        <td><input type="radio" name="att10g" value="3" id="att10g"/></td>
                        <td><input type="radio" name="att10g" value="4" id="att10g"/></td>
                        <td><input type="radio" name="att10g" value="5" id="att10g"/></td>
                    </tr>
                    <tr>
                        <td>The genitals (male)</td>
                       <td><input type="radio" name="att10h" value="0" id="att10h"/></td>
                        <td><input type="radio" name="att10h" value="1" id="att10h"/></td>
                        <td><input type="radio" name="att10h" value="2" id="att10h"/></td>
                        <td><input type="radio" name="att10h" value="3" id="att10h"/></td>
                        <td><input type="radio" name="att10h" value="4" id="att10h"/></td>
                        <td><input type="radio" name="att10h" value="5" id="att10h"/></td>
                    </tr>
                    <tr>
                        <td>The genitals (female)</td>
                       <td><input type="radio" name="att10i" value="0" id="att10i"/></td>
                        <td><input type="radio" name="att10i" value="1" id="att10i"/></td>
                        <td><input type="radio" name="att10i" value="2" id="att10i"/></td>
                        <td><input type="radio" name="att10i" value="3" id="att10i"/></td>
                        <td><input type="radio" name="att10i" value="4" id="att10i"/></td>
                        <td><input type="radio" name="att10i" value="5" id="att10i"/></td>
                    </tr>
                    <tr>
                        <td>The leg</td>
                       <td><input type="radio" name="att10j" value="0" id="att10j"/></td>
                        <td><input type="radio" name="att10j" value="1" id="att10j"/></td>
                        <td><input type="radio" name="att10j" value="2" id="att10j"/></td>
                        <td><input type="radio" name="att10j" value="3" id="att10j"/></td>
                        <td><input type="radio" name="att10j" value="4" id="att10j"/></td>
                        <td><input type="radio" name="att10j" value="5" id="att10j"/></td>
                    </tr>
                    <tr>
                        <td>The feet</td>
                       <td><input type="radio" name="att10k" value="0" id="att10k"/></td>
                        <td><input type="radio" name="att10k" value="1" id="att10k"/></td>
                        <td><input type="radio" name="att10k" value="2" id="att10k"/></td>
                        <td><input type="radio" name="att10k" value="3" id="att10k"/></td>
                        <td><input type="radio" name="att10k" value="4" id="att10k"/></td>
                        <td><input type="radio" name="att10k" value="5" id="att10k"/></td>
                    </tr>
                </table>

                <label>11. I have encountered evidence of gender bias during my <b>medical</b> education.</label><br />
                <input type="radio" name="att11" value="0" id="att11"/> 0 (strongly disagree)
                <input type="radio" name="att11" value="1" id="att11"/> 1
                <input type="radio" name="att11" value="2" id="att11"/> 2
                <input type="radio" name="att11" value="3" id="att11"/> 3
                <input type="radio" name="att11" value="4" id="att11"/> 4
                <input type="radio" name="att11" value="5" id="att11"/> 5 (strongly agree)
                <input type="radio" name="att11" value="NA" id="att11" checked="checked"/> Don't Know
                <br /><br />

                <label>12. If you have encountered gender bias during your medical education, can you give an example?</label><br />
                <textarea name="att12" cols="30" rows="4" id="att7" maxlength="1000">N/A</textarea>
                <br /><br />

                <label>13. I have encountered evidence of gender bias during my <b>medical</b> placements.</label><br />
                <input type="radio" name="att13" value="0" id="att13"/> 0 (strongly disagree)
                <input type="radio" name="att13" value="1" id="att13"/> 1
                <input type="radio" name="att13" value="2" id="att13"/> 2
                <input type="radio" name="att13" value="3" id="att13"/> 3
                <input type="radio" name="att13" value="4" id="att13"/> 4
                <input type="radio" name="att13" value="5" id="att13"/> 5 (strongly agree)
                <input type="radio" name="att13" value="NA" id="att13" checked="checked"/> Don't Know
                <br /><br />

                <label>14. If you have encountered gender bias during your medical placements, can you give an example?</label><br />
                <textarea name="att14" cols="30" rows="4" id="att14" maxlength="1000">N/A</textarea>
                <br /><br />

                <label>15. I have encountered evidence of gender bias in anatomy <b>textbooks.</b></label><br />
                <input type="radio" name="att15" value="0" id="att15"/> 0 (strongly disagree)
                <input type="radio" name="att15" value="1" id="att15"/> 1
                <input type="radio" name="att15" value="2" id="att15"/> 2
                <input type="radio" name="att15" value="3" id="att15"/> 3
                <input type="radio" name="att15" value="4" id="att15"/> 4
                <input type="radio" name="att15" value="5" id="att15"/> 5 (strongly agree)
                <input type="radio" name="att15" value="NA" id="att15" checked="checked"/> Don't Know
                <br /><br />
                <label>16. If you have encountered evidence of gender bias in anatomy textbooks, can you give an example?</label><br />
                <textarea name="att16" cols="30" rows="4" id="att9" maxlength="1000">N/A</textarea>
                <br /><br />

                <label>17. The following anatomical statements are gender biased: <b>(0=strongly disagree)</b> to <b>(5=strongly agree)</b>:</label>

                <table class="table table-striped">
                <tr>
                    <th></th>
                    <th>Strongly Disagree</th>
                    <th>Disagree</th>
                    <th>Somewhat Disagree</th>
                    <th>Somewhat Agree</th>
                    <th>Agree</th>
                    <th>Strongly Agree</th>
                    <th>Don't Know</th>
                </tr>

                <tr>
                    <td>a) The clitoris is a diminutive form of the penis</td>
                    <td><input type="radio" name="att17a" value="0" id="att17a"/></td>
                    <td><input type="radio" name="att17a" value="1" id="att17a"/></td>
                    <td><input type="radio" name="att17a" value="2" id="att17a"/></td>
                    <td><input type="radio" name="att17a" value="3" id="att17a"/></td>
                    <td><input type="radio" name="att17a" value="4" id="att17a"/></td>
                    <td><input type="radio" name="att17a" value="5" id="att17a"/></td>
                    <td><input type="radio" name="att17a" value="NA" id="att17a" checked="checked"/></td>
                </tr>
                <tr>
                    <td>b) The clitoris and the penis are erectile sexual organs</td>
                    <td><input type="radio" name="att17b" value="0" id="att17b"/></td>
                    <td><input type="radio" name="att17b" value="1" id="att17b"/></td>
                    <td><input type="radio" name="att17b" value="2" id="att17b"/></td>
                    <td><input type="radio" name="att17b" value="3" id="att17b"/></td>
                    <td><input type="radio" name="att17b" value="4" id="att17b"/></td>
                    <td><input type="radio" name="att17b" value="5" id="att17b"/></td>
                    <td><input type="radio" name="att17b" value="NA" id="att17b" checked="checked"/></td>
                </tr>
                <tr>
                    <td>c) The penis is the enlarged form of the clitoris</td>
                    <td><input type="radio" name="att17c" value="0" id="att17c"/></td>
                    <td><input type="radio" name="att17c" value="1" id="att17c"/></td>
                    <td><input type="radio" name="att17c" value="2" id="att17c"/></td>
                    <td><input type="radio" name="att17c" value="3" id="att17c"/></td>
                    <td><input type="radio" name="att17c" value="4" id="att17c"/></td>
                    <td><input type="radio" name="att17c" value="5" id="att17c"/></td>
                    <td><input type="radio" name="att17c" value="NA" id="att17c" checked="checked"/></td>
                </tr>
                <tr>
                    <td>d) The clitoris is the analogue to the male penis</td>
                    <td><input type="radio" name="att17d" value="0" id="att17d"/></td>
                    <td><input type="radio" name="att17d" value="1" id="att17d"/></td>
                    <td><input type="radio" name="att17d" value="2" id="att17d"/></td>
                    <td><input type="radio" name="att17d" value="3" id="att17d"/></td>
                    <td><input type="radio" name="att17d" value="4" id="att17d"/></td>
                    <td><input type="radio" name="att17d" value="5" id="att17d"/></td>
                    <td><input type="radio" name="att17d" value="NA" id="att17d" checked="checked"/></tr> 
                </tr>
                <tr>
                    <td>e) The mammary glands are primarily organs of lactation</td>
                    <td><input type="radio" name="att17e" value="0" id="att17e"/></td>
                    <td><input type="radio" name="att17e" value="1" id="att17e"/></td>
                    <td><input type="radio" name="att17e" value="2" id="att17e"/></td>
                    <td><input type="radio" name="att17e" value="3" id="att17e"/></td>
                    <td><input type="radio" name="att17e" value="4" id="att17e"/></td>
                    <td><input type="radio" name="att17e" value="5" id="att17e"/></td>
                    <td><input type="radio" name="att17e" value="NA" id="att17e" checked="checked"/></tr> 
                </tr>
                <tr>
                    <td>f) The mammary glands are secondary sexual organs</td>
                    <td><input type="radio" name="att17f" value="0" id="att17f"/></td>
                    <td><input type="radio" name="att17f" value="1" id="att17f"/></td>
                    <td><input type="radio" name="att17f" value="2" id="att17f"/></td>
                    <td><input type="radio" name="att17f" value="3" id="att17f"/></td>
                    <td><input type="radio" name="att17f" value="4" id="att17f"/></td>
                    <td><input type="radio" name="att17f" value="5" id="att17f"/></td>
                    <td><input type="radio" name="att17f" value="NA" id="att17f" checked="checked"/></td> 
                </tr>
                <tr>
                    <td>g) The penis is a sexual organ</td>
                    <td><input type="radio" name="att17g" value="0" id="att17g"/></td>
                    <td><input type="radio" name="att17g" value="1" id="att17g"/></td>
                    <td><input type="radio" name="att17g" value="2" id="att17g"/></td>
                    <td><input type="radio" name="att17g" value="3" id="att17g"/></td>
                    <td><input type="radio" name="att17g" value="4" id="att17g"/></td>
                    <td><input type="radio" name="att17g" value="5" id="att17g"/></td>
                    <td><input type="radio" name="att17g" value="NA" id="att17g" checked="checked"/></td> 
                </tr>
                <tr>
                    <td>h) The penis is a urogenital organ</td>
                    <td><input type="radio" name="att17h" value="0" id="att17h"/></td>
                    <td><input type="radio" name="att17h" value="1" id="att17h"/></td>
                    <td><input type="radio" name="att17h" value="2" id="att17h"/></td>
                    <td><input type="radio" name="att17h" value="3" id="att17h"/></td>
                    <td><input type="radio" name="att17h" value="4" id="att17h"/></td>
                    <td><input type="radio" name="att17h" value="5" id="att17h"/></td>
                    <td><input type="radio" name="att17h" value="NA" id="att17h" checked="checked"/></td> 
                </tr>
                </table><br /><br />

                <label>18. I believe that medicine is male dominated.</label><br />
                <input type="radio" name="att18" value="0" id="att18"/> 0 (strongly disagree)
                <input type="radio" name="att18" value="1" id="att18"/> 1
                <input type="radio" name="att18" value="2" id="att18"/> 2
                <input type="radio" name="att18" value="3" id="att18"/> 3
                <input type="radio" name="att18" value="4" id="att18"/> 4
                <input type="radio" name="att18" value="5" id="att18"/> 5 (strongly agree)
                <input type="radio" name="att18" value="NA" id="att18" checked="checked"/> Don't Know
                <br /><br />

                <label>19. If in textbooks I saw that the female body was presented only to show how it differed from the male I would regard this as biased.</label><br />
                <input type="radio" name="att19" value="0" id="att19"/> 0 (strongly disagree)
                <input type="radio" name="att19" value="1" id="att19"/> 1
                <input type="radio" name="att19" value="2" id="att19"/> 2
                <input type="radio" name="att19" value="3" id="att19"/> 3
                <input type="radio" name="att19" value="4" id="att19"/> 4
                <input type="radio" name="att19" value="5" id="att19"/> 5 (strongly agree)
                <input type="radio" name="att19" value="NA" id="att19" checked="checked"/> Don't Know
                <br /><br />

                <label>20. I believe anatomy courses should address gender issues explicitly. </label><br />
                <input type="radio" name="att20" value="0" id="att20"/> 0 (strongly disagree)
                <input type="radio" name="att20" value="1" id="att20"/> 1
                <input type="radio" name="att20" value="2" id="att20"/> 2
                <input type="radio" name="att20" value="3" id="att20"/> 3
                <input type="radio" name="att20" value="4" id="att20"/> 4
                <input type="radio" name="att20" value="5" id="att20"/> 5 (strongly agree)
                <input type="radio" name="att20" value="NA" id="att20" checked="checked"/> Don't Know
                <br /><br />

                <label>21. I believe it is important that anatomy educators pay attention to inequity in classroom processes. </label><br />
                <input type="radio" name="att21" value="0" id="att21"/> 0 (strongly disagree)
                <input type="radio" name="att21" value="1" id="att21"/> 1
                <input type="radio" name="att21" value="2" id="att21"/> 2
                <input type="radio" name="att21" value="3" id="att21"/> 3
                <input type="radio" name="att21" value="4" id="att21"/> 4
                <input type="radio" name="att21" value="5" id="att21"/> 5 (strongly agree)
                <input type="radio" name="att21" value="NA" id="att21" checked="checked"/> Don't Know
                <br /><br />

                <label>We may want to do research like this again in the future and if so you may be invited to participate. To ensure that we can match your responses we need a code that is unique to you but that cannot be used to identify you personally. Please provide your first initial, the last letter of your last name, the first initial of your mother's maiden name, and your day and month of birth.
                <br /><br />
                For example, if your name was Joan Smith, you were born on the 25/12/1984, and your Mother's madien name was Taylor your code would be <b>JHT2512</b></label>
                <br /><br />
                First Initial:
                <select name="fi" id="fi">
                    <option value="NA">NA</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                    <option value="f">f</option>
                    <option value="g">g</option>
                    <option value="h">h</option>
                    <option value="i">i</option>
                    <option value="j">j</option>
                    <option value="k">k</option>
                    <option value="l">l</option>
                    <option value="m">m</option>
                    <option value="n">n</option>
                    <option value="o">o</option>
                    <option value="p">p</option>
                    <option value="q">q</option>
                    <option value="r">r</option>
                    <option value="s">s</option>
                    <option value="t">t</option>
                    <option value="u">u</option>
                    <option value="v">v</option>
                    <option value="w">w</option>
                    <option value="x">x</option>
                    <option value="y">y</option>
                    <option value="z">z</option>
                <select>
                Last Initial:
                <select name="li" id="li">
                    <option value="NA">NA</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                    <option value="f">f</option>
                    <option value="g">g</option>
                    <option value="h">h</option>
                    <option value="i">i</option>
                    <option value="j">j</option>
                    <option value="k">k</option>
                    <option value="l">l</option>
                    <option value="m">m</option>
                    <option value="n">n</option>
                    <option value="o">o</option>
                    <option value="p">p</option>
                    <option value="q">q</option>
                    <option value="r">r</option>
                    <option value="s">s</option>
                    <option value="t">t</option>
                    <option value="u">u</option>
                    <option value="v">v</option>
                    <option value="w">w</option>
                    <option value="x">x</option>
                    <option value="y">y</option>
                    <option value="z">z</option>
                <select>
                Maiden Initial:
                <select name="mi" id="mi">
                    <option value="NA">NA</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                    <option value="f">f</option>
                    <option value="g">g</option>
                    <option value="h">h</option>
                    <option value="i">i</option>
                    <option value="j">j</option>
                    <option value="k">k</option>
                    <option value="l">l</option>
                    <option value="m">m</option>
                    <option value="n">n</option>
                    <option value="o">o</option>
                    <option value="p">p</option>
                    <option value="q">q</option>
                    <option value="r">r</option>
                    <option value="s">s</option>
                    <option value="t">t</option>
                    <option value="u">u</option>
                    <option value="v">v</option>
                    <option value="w">w</option>
                    <option value="x">x</option>
                    <option value="y">y</option>
                    <option value="z">z</option>
                <select>
                Day of Birth:
                <select name="day" id="day">
                    <option value="NA">NA</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                <select>
                Month of Birth:
                <select name="month" id="month">
                    <option value="NA">NA</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                <select>
                <br /><br />

        </fieldset><br />
        
        <input type="submit" value="submit" name="s1" id="s1" class="btn btn-primary"/>
        </form>
        <script type="text/javascript">
            document.getElementById('age').value='NA'
            </script>
        <script type="text/javascript">
            document.getElementById('att8').value='NA'
            </script>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>    
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        </body>
</html>