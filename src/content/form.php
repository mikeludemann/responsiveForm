<?php

echo '
<!DOCTYPE html>
<html>
    <head>
        <title>Contact and Feedback form</title>';
        
        include './src/init/init.php';

    echo '</head>
<body>
';

include "./src/content/header.php";

echo '
<section>
    <div class="container-fluid">
        <h2 class="title">Contact and Feedback Form</h2>
        <div class="row forms" ng-app="app" ng-controller="forms">
            <div id="contact" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div>Contact</div>
            </div>
            <div id="feedback" class="col-6 col-sm-6 col-col-md-6 col-lg-6 col-xl-6">
                <div>Feedback</div>
            </div>
            <div id="contactForm" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <contact-form></contact-form>
            </div>
            <div id="feedbackForm"class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <feedback-form></feedback-form>
            </div>
        </div>
    </div>
</section>
';

include "./src/content/footer.php";

include "./src/init/source.php";

echo '</body>
</html>';

?>