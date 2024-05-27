<?php include 'connection.php';?>

<?php
//menu kaydet
if(isset($_POST['Diet_List'])){
    $menu_seourl=seo($_POST['Diet_List']);
    
    $menukaydet=$db->prepare("INSERT INTO Diet_List SET
    firstname=:firstname,
    lastname=:lastname,
    email= email,
    diet=diet,
    
    ");

    $insert=$menukaydet ->execute(array(
        'firstname'=>$_POST['firstname'],
        'lastname'=>$_POST['lastname'],
        'email'=>$_POST['email'],
        'diet'=>$_POST['diet']

    ));
    
    if($insert){
        header("location:../server/menu.php?durum=ok");

    }else{
        header("location:../server/menu.php?durum=no");
    }

}
?>