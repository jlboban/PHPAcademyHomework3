<?php

// Generate and display this string: My favorite color is $color.
// $color from the string needs to be value that is submitted from the attached form:

if (isset($_POST['color']))
{
    $color = $_POST['color'];
    echo "My favorite color is {$color}";
}

?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="radio" id="white" name="color" value="white">
    <label for="white">White</label><br>
    <input type="radio" id="black" name="color" value="black">
    <label for="black">Black</label><br>
    <input type="radio" id="red" name="color" value="red">
    <label for="red">Red</label><br>
    <input type="radio" id="blue" name="color" value="blue">
    <label for="blue">Blue</label><br>
    <input type="radio" id="green" name="color" value="green">
    <label for="green">Green</label><br>
    <input type="radio" id="yellow" name="color" value=yellow">
    <label for="yellow">Yellow</label><br>

    <button>Submit</button>
</form>
