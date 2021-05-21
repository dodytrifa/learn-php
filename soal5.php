<?php
$menu = ["Makanan", "Minuman", "Parsel"];

foreach($menu as $m) {
    $i = 1;
    echo $m;
    echo "<ol>
        <li>Menu $m ke ". $i++. "</li>
        <li>Menu $m ke ". $i++. "</li>
        <li>Menu $m ke ". $i++. "</li>
    </ol>";
}
?>