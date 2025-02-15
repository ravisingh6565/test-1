<?php
// echo "<pre>";
// print_r($_FILES['fileUpload']);
// echo "</pre>";

foreach($_FILES['fileUpload'] as $key=>$val){
    echo $key."         =>".$val."<br>";
}
?>