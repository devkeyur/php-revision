<?php
if (isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_FILES);

    move_uploaded_file(
        $_FILES['doc']['tmp_name'],
        'media/' . $_FILES['doc']['name']
    );
}

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc"> <br><br>
    <input type="submit" name="submit">
</form>