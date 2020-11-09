<html>
<form method="post">
    <input type="text" name="nhap" placeholder="nhap mang">
    <input type="submit" value="check">
</form>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] = $_POST) {
    $number = $_POST['nhap'];
    $array = explode (",", $number);

    $min = $array[0];
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        if ( $array[$i] < $min ) {
            $min = $array[$i];
        }
    }
    echo $min;
}



?>

