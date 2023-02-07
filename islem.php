<div class="container">
  <div class="row">
    <div class="col-md-6 mt-50">
    <h4><?php
require 'baglan.php';

if (isset($_POST['kayit'])) {

    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $password_again= @$_POST['password_again'];
    $dil=$_POST['dil'];
    $tel=$_POST['tel'];

    if (!$user_name) {
    echo "Lütfen kullanici adınızı giriniz!";

    } elseif (!$password ) {
    echo "Lütfen şifrenizi giriniz" ;

    } else if ($password != $password_again){
    echo "Girdiğiniz şifreler birbiri ile uyuşmuyor";
    } else if (strlen($user_name)<6){
        echo "Kullanıcı adı çok kısa";    
    } else if (strlen($password)>9){
    echo "Şifreniz en fazla 9 haneli olmalıdır";    
    } 

    
    else {
    //    Veri tabanı kayıt işlemi
       $sorgu = $db->prepare('INSERT INTO kullanici SET user_name = ?, user_password = ?, dil = ?, tel = ?');
       $ekle = $sorgu->execute([
        $user_name, $password,$dil,$tel
       ]);
       if($ekle) {
        echo"Kayıt başarılı";
        header ('Refresh:5 musteri/index.php');
       }
       else {
        echo "Bir hata oluştu";
        }
    }
}

?></h4>
    </div>