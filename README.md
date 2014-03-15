Experiment with IAT
====================

Structure of the Experiment
-------------------------

* Participants will land on the [Launch Page](LaunchPage.html) which will have typical info sheet and consent.
* If they consent they will fill out a unique ID and click *submit*  and sent to 1 of three random pages.
* The ID which will be saved to a $_COOKIE in the [process-id php file](process-id.php) file.
* They will then go through the relevant RCT condition (A set of pictures - only biased condition works ATM). e.g. [biased images](biased/launchB.html).
* The last image will redirect them to the [IAT](https://github.com/winteram/IAT).
* After the IAT they will fill out [questionnaire form](form.html) with input handled by [process-form-data php file](process-form-data.php).


What I Cannot Do
----------------
Basically I cannot stick all this together or figure out how to pass the *ID* variable to IAT and form. So I need to go LauchPage -> launchPage of RCT condition -> images -> IAT -> form. I have most of it down but the link from IAT to form.

I also cannot:

* In the process-id.php I cannot figure out how ensure the ID is passed to both the IAT (I would need to alter the guys javascript) so I can link both the IAT results and the questionnaire results in form.html (I pass the ID to process-form-data.php using $_COOKIE.
* I cannot figure out how to alter the IAT to move to form html after the participants complete the IAT. Again this means altering the IAT javascript.

