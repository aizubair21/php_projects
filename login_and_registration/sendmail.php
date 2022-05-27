<?php

$from = "From: testforlorem02@gmail.com";
$msg = "this is test mail";
if (mail("aizubair9866@gmail.com","My subject",$msg,$from)) {
    echo "Mail send ";
}else {
    echo "not send ";
}
?>