<?php

echo '<!DOCTYPE html>
<html>
    <head>
        <title>Contact and Feedback form</title>';
        
        include './src/init/init.php';

    echo '</head>
<body>';

include "./src/content/header.php";

echo '<section>
    <div class="container-fluid">
        <h2 class="title">Contact and Feedback Form</h2>
        <div class="row">
            <div id="contact" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" data-toggle="collapse" data-target="#contactForm">
                <div>Contact</div>
            </div>
            <div id="feedback" class="col-6 col-sm-6 col-col-md-6 col-lg-6 col-xl-6" data-toggle="collapse" data-target="#feedbackForm">
                <div>Feedback</div>
            </div>
            <div id="contactForm" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="formContact">
                    <h3>Contact form</h3>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        Test 1
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        Test 2
                    </div>
                </div>
            </div>
            <div id="feedbackForm" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="formFeedback">
                    <h3>Feedback form</h3>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        Test 3
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        Test 4
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>';

include "./src/content/footer.php";

echo '</body>
</html>';

?>