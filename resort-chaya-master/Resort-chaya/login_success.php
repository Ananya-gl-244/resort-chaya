<?php
session_start();
if(!session_is_registered(emailcont)){
    header("location:login.php");
}
?>
<html>
    <body>
        login successful
    </body>
</html>

