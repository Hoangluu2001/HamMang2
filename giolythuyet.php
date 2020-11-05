<?php
$arr = [
    ["may tinh",30000],
    ["xe may",100000],
    ["dien thoai",20000],
    ["o to",300000]
];
for ($i = 0; $i < 4; $i++) {
    echo "<p><b> san pham thu $i</b></p>";
    echo "<ul>";
    for ($j = 0; $j < 2; $j++) {
        echo "<li>".$arr[$i][$j]."</li>";
    }
    echo "</ul>";
}
?>
