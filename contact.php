<?php

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
        <h2 class="title">Thank you for your contact</h2>
    </div>
</section>
';

include "./src/content/footer.php";

include "./src/init/source.php";

echo '</body>
</html>';

?>