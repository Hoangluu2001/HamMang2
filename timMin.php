<html>
<form method="post">
    <input type="text" name="nhap" placeholder="nhap mang">
    <input type="submit" value="check">
</form>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] = $_POST) {
    $number = $_POST['nhap'];
}
function checkMin($number)
{
    $min = $number[0];
    $length = count($number);
    for ($i = 0; $i < $length; $i++) {
        if ($min < $number[i]) {
            $min = $number[$i];
        }
    }
    return $min;
}


echo checkMin($number);
?>

