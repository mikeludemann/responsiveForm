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
        <div class="row forms">
            <div id="contact" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div>Contact</div>
            </div>
            <div id="feedback" class="col-6 col-sm-6 col-col-md-6 col-lg-6 col-xl-6">
                <div>Feedback</div>
            </div>
            <div id="contactForm" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="formContact">
                    <h3>Contact form</h3>
                </div>
                <form id="formContact" action="contact.php" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="label">
                                <label for="c_salutation">Salution</label>
                            </div>
                            <div>
                                <select id="c_salutation">
                                    <optgroup label="Salutation">
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Ms.">Ms.</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="label">
                                <label for="c_firstName">First Name</label>
                            </div>
                            <div>
                                <input type="text" name="firstName" id="c_firstName">
                            </div>
                            <div class="label">
                                <label for="c_lastName">Last Name</label>
                            </div>
                            <div>
                                <input type="text" name="lastName" id="c_lastName">
                            </div>
                            <div class="label">
                                <label for="c_email">E-Mail</label>
                            </div>
                            <div>
                                <input type="email" name="email" id="c_email">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="label">
                                <label for="c_comments">Comments</label>
                            </div>
                            <textarea name="comments" id="c_comments"></textarea>
                        </div>
                    </div>
                    <div class="row submit">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div>
                                <input type="submit" value="Submit" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="feedbackForm" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="formFeedback">
                    <h3>Feedback form</h3>
                </div>
                <form id="formFeedback" action="feedback.php" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="label">
                                <label for="f_salutation">Salution</label>
                            </div>
                            <div>
                                <select id="f_salutation">
                                    <optgroup label="Salutation">
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Ms.">Ms.</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="label">
                                <label for="f_firstName">First Name</label>
                            </div>
                            <div>
                                <input type="text" name="firstName" id="f_firstName">
                            </div>
                            <div class="label">
                                <label for="f_lastName">Last Name</label>
                            </div>
                            <div>
                                <input type="text" name="lastName" id="f_lastName">
                            </div>
                            <div class="label">
                                <label for="f_email">E-Mail</label>
                            </div>
                            <div>
                                <input type="email" name="email" id="f_email">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="label">
                                <label for="f_comments">Comments</label>
                            </div>
                            <textarea name="comments" id="f_comments"></textarea>
                        </div>
                    </div>
                    <div class="row submit">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div>
                                <input type="submit" value="Submit" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>';

include "./src/content/footer.php";

echo '</body>
</html>';

?>