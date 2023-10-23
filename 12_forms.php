<?php
// when we use get method it will be send the values to url
// and if we use post method the send in the hidden formate
// echo "<pre> ";
// print_r("$_POST");
// $num1 = $_POST['num1'];
// $num2 = $_POST['num2'];
// echo $num1 + $num2;

// if (isset($_POST['submit'])) {
//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
//     echo $num1 + $num2;
// }
?>

<!-- <form method="post">
    <input type="textbox" name="num1" placeholder="num1"><br><br>
    <input type="textbox" name="num2" placeholder="num2"><br><br>
    <input type="submit" name="submit">
</form> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Define a variable
    $nameErr = $emailErr = $genderErr = $webErr = "";
    $name = $email = $gender = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name contain letter and whitespace
            if (!preg_match("/^[A-Za-z-' ]*%/", $name)) {
                $nameErr = "Only letter and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = " Invalid email formate";
            }
        }

        if (empty($_POST["website"])) {
            $website = " ";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Form validation</h2>
    <form method="post">
        <label> Name </label><input type="text" name="name" value="<?php echo $name; ?>" />
        <span class="error">*
            <?php echo $nameErr ?>
        </span> <br><br>
        <label> Email </label><input type="text" name="email" value="<?php echo $email; ?>" />
        <span class="error">*
            <?php echo $emailErr ?>
        </span> <br><br>
        <label> Website </label><input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error">*
            <?php echo $webErr ?>
        </span> <br><br>
        <label> Comment </label><textarea name="comment" value="<?php echo $comment; ?>" rows="5" cols="40"> </textarea>
        <br><br>
        <label>Gender :</label>
        male =>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") {
            echo "Checked";
        } ?>   value="female">
        Female => 
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") {
            echo "Checked";
        } ?>  value="male">
        Other =>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") {
            echo "Checked";
        } ?> value="other">
        <span class="error">*
            <?php echo $genderErr ?>
        </span> <br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    echo "<h2?> Your Details are here : </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>
</body>

</html>