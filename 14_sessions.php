<?php
    // A session is a way to store information (in variables) to be used across multiple pages

    session_start();
    $_SESSION["user"] = "Hello Keyur";
?>

<form action="session1.php" method="post">
    <button> Submit</button>
</form>