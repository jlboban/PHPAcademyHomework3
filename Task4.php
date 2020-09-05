<?php

// Create image upload form and backend functionality to save an image on the server.
// The Image can be uploaded only if it's less than 1MB and is one of these formats: jpg, jpeg, png.

define('MB', 1048576);
define('DS', DIRECTORY_SEPARATOR);

$allowedExtensions = ['jpg', 'jpeg', 'png'];
$errors = [];

if (isset($_POST['upload']) && !empty($_FILES))
{
    $name = $_FILES['image']['name'];
    $path = __DIR__ . DS . $name;
    $size = $_FILES['image']['size'];
    $rawExt = $_FILES['image']['type'];
    $imageTmp = $_FILES['image']['tmp_name'];

    $explodedExt = explode('/', $rawExt);
    $ext = end($explodedExt);

    if (!in_array($ext, $allowedExtensions))
    {
        $errors[] = 'Wrong file type. Image must be of type jpg, jpeg or png.';
    }

    if ($size > MB)
    {
        $errors[] = 'File size too large. Image must be less than 1MB in size.';
    }

    if (empty($errors))
    {
        if (move_uploaded_file($imageTmp, $path))
        {
            echo "Success! File uploaded to '<b>'{$path}'</b>'";
        }
        else
        {
            $errors[] = 'Something went wrong. Please check folder write permission.';
        }
    }
}
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="image">
    <button name="upload">Submit</button>

    <?php foreach ($errors as $error) : ?>
    <?= "<span style='color: red'>", "<br>", $error, "<br>", "</span>"; ?>
    <?php endforeach; ?>

</form>