<?php

$link = new mysqli('127.0.0.1', 'root', '123456', 'test');

$sql = "select * fron user";


$Rult  = $link -> query('select * from USER ');
$Rult -> num_rows;//这个返回记录条数
while( $rs = $Rult -> fetch_array() ) {
    echo $rs['USER']."\n";

}

echo "33";

?>