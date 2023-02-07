<?php
try{
    $db=new PDO("mysql:host=localhost;dbname=deprem; charset=utf8", 'root', '12345678');
    // echo "Veri tabanı bağlantısı başarılı";

}
catch(PDOException $e) {
    echo $e-> getMessage();
}
?>