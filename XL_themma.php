<?php   
include("connect.php");

// echo "string";
$ma_ten = $_POST['ma_ten'];
$ma_kcal = $_POST['ma_kcal'];
$loaima_id = $_POST['loaima_id'];
if(empty($_POST['vm_id'])){
  $vm_id = 1;
}
else{
  $vm_id = $_POST['vm_id'];  
}

// var_dump($vm_id);
if(empty($_POST['mua_id'])){
  $mua_id = 1;
}
else{
  $mua_id = $_POST['mua_id'];  
}
if(empty($_POST['sk_id'])){
  $sk_id = 1;
}
else{
  $sk_id = $_POST['sk_id'];  
}

$dotuoi_id = $_POST['dotuoi_id'];
if(empty($_POST['td_id'])){
  $td_id = 1;
}
else{
  $td_id = $_POST['td_id'];  
}
$name = $_FILES['ma_hinhanh']['name'];
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["ma_hinhanh"]["name"]);
move_uploaded_file($_FILES['ma_hinhanh']['tmp_name'],$target_dir.$name);
$sql = "INSERT INTO `mon_an`(`loaima_id`, `ma_ten`, `ma_kcal`, `dotuoi_id`, `ma_hinhanh`) VALUES ('$loaima_id','$ma_ten','$ma_kcal','$dotuoi_id', '". $target_file."')";
// echo "$sql";

$query=mysqli_query($con,$sql);



$ma_id=mysqli_insert_id($con);
foreach($vm_id as $value){                   
    $sql = "INSERT INTO `monan_vungmien`(`ma_id`, `vm_id`) VALUES (".$ma_id.",".$value.')';
    
    $query=mysqli_query($con,$sql);
  }


foreach($mua_id as  $b){                   
    $sql = "INSERT INTO `monan_mua`(`ma_id`, `mua_id`) VALUES (".$ma_id.",".$b.')';       
    $query=mysqli_query($con,$sql);
  }  
            
foreach($sk_id as $c){                   
    $sql = "INSERT INTO `monan_suckhoe`(`ma_id`, `sk_id`) VALUES (".$ma_id.",".$c.')';
   
    $query=mysqli_query($con,$sql);
}
 
foreach($td_id as  $d){                   
    $sql = "INSERT INTO `monan_thoidiem`(`ma_id`, `td_id`) VALUES (".$ma_id.",".$d.')';
    $query=mysqli_query($con,$sql);
  }
         if ($query){
            header("location:themma.php");
         }else{
            echo "<center> <font size='5' color='red'>Thêm mới không thành công </br>
               <a href='themma.php' style='color:white'> Làm lại </a> </font> </center>";
        }
       mysqli_close($con);
 
?>