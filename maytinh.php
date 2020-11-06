
<form method="post">
    <table>
            <input type="text" name="number1" placeholder="Number 1">
            <input type="text" name="number2" placeholder="Number 2">
    </table>
    <input type="submit" value="cong" name="Ketqua">
    <input type="submit" value="tru" name="Ketqua">
    <input type="submit" value="nhan" name="Ketqua">
    <input type="submit" value="chia" name="Ketqua">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    switch ($_POST['Ketqua']) {
        case "cong":
            $result = $number1 + $number2;
            break;
        case "tru":
            $result = $number1 - $number2;
            break;
        case "nhan":
            $result = $number1 * $number2;
            break;
        case "chia":
            if ($number2 !== 0) {
                $result = $number1 / $number2;
                break;
            } else {
                echo "Loi";
            }
    }
    echo "Ket qua la: $result";
}
?>




