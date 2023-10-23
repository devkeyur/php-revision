<?php
    // basically cookie is a text file with the help of that we can track the user's activity

    setcookie('city','Vadodara',time()+10);
?>

<form action="cookie1.php" method="get">
    <button>submit</button>
</form>