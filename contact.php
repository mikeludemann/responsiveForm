<?php

$salutation = $_POST["salutation"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastname"];
$email = $_POST["email"];
$comments = $_POST["comments"];

// Mail informations

$recipient = "admin@test.com";
$cc = ""; // "carbon copy"
$transmitter = $email;
$subject = "Contact";
$headers = "";
$message = "";

$message .= '
<html>
    <head>
        <title>HTML email</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <h2 class="title">Contact</h2>
            </div>
            <div class="row">
                <div class="col-12 content">Dear Sir or Madame</div>
                <div class="col-12 content">';

                echo "My name is, " . $salutation . " " . $firstName . " " . $lastName . "\n\n";

                echo "I hope you can help me with the following information.  \n\n";

                echo $comments;

                echo '</div>
                <div class="col-12 content">Sincerely yours</div>
            </div>
        </div>
    </body>
</html>
';

$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <' . $transmitter . '>' . "\r\n";
$headers .= 'Cc: <' . $cc . '>' . "\r\n";

if(isset($_POST["submit"])){

    mail($recipient,$subject,$message,$headers);

    echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>Contact Site</title>';
            
            include './src/init/init.php';
    
        echo '</head>
    <body>
    ';
    
    include "./src/content/header.php";
    
    echo '
    <section>
        <div class="container-fluid">
            <div class="row">
                <h2 class="title">Thank you for your contact</h2>
            </div>
            <div class="row">
                <div class="col-12 content">Your data has arrived with us.</div>
                <div class="col-12 content">';
    
                echo "Thanks, " . $salutation . " " . $firstName . " " . $lastName;
    
                echo '</div>
                <div class="col-12 content">We will contact you as soon as possible.</div>
            </div>
        </div>
    </section>
    ';
    
    include "./src/content/footer.php";
    
    include "./src/init/source.php";
    
    echo '</body>
    </html>';

    $sql = "INSERT INTO data (form, salutation, firstname, lastname, email, comments) VALUES ('Contact', ''" . $salutation . "'', ''" . $firstName . "'', ''" . $lastName . "'', ''" . $email . "'', ''" . $comments . "'')";

    if ($conn->query($sql) === TRUE) {

        consoleLog("Created successfully a new entry");
        
    } else {

        consoleLog("Error: ");
        consoleLog($sql);
        consoleLog("<br/>");
        consoleLog($conn->error);

    }

} else {

    header("Location: /responsiveForm/");
    exit;

}

// Helper functions

function validationContent($data) {

    $data = trim($data); // Remove Whitespaces and any other character at start and end of a string
    $data = stripslashes($data); // Remove masking character of a string
    $data = htmlspecialchars($data); // Convert special characters to HTML entities

    return $data;

}

?>