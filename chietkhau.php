<form method="post">
    <input type="text" name="nhap" placeholder="nhap so tien"/>
    <input type="submit" name="giamgia" value="giamgia"><br><br>
    Result:
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nhap = $_POST["nhap"];
        $giamgia = $_POST["giamgia"];
        echo tiendag($nhap,$giamgia);
    }
    function tiendag($nhap,$giamgia) {
        if ($giamgia <= 1000000) {
            $khuyenmai = ($nhap / 10) * 0.1;
        }
        if ($giamgia >= 1000000 && $nhap <= 5000000){
            $khuyenmai = ($nhap / 20) * 0.2;
        }
        if ($giamgia >= 5000001) {
            $khuyenmai = ($nhap / 30) * 0.3;
        }
        return $khuyenmai;
    }
    ?>
</form>