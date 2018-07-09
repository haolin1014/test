<?php
$name = date("YmdHis").".log";
file_put_contents("./log/".$name, $name);