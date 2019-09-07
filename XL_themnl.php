<?php

   
                        include("connect.php");
                        if(isset($_POST['submit'])){
                            $loainl_id = $_POST['loainl_id'];
                            $nl_ten = $_POST['nl_ten'];
                            $nl_khoiluong = $_POST['nl_khoiluong'];
                            $dvt_id = $_POST['dvt_id'];
                           
                            $nl_chatdam = $_POST['nl_chatdam'];
                            $nl_chatbeo = $_POST['nl_chatbeo'];
                            $nl_chatxo = $_POST['nl_chatxo'];
                            $nl_chatbotduong = $_POST['nl_chatbotduong'];
                            $nl_vitamin = $_POST['nl_vitamin'];
                            $nl_khoangchat = $_POST['nl_khoangchat'];
                            $name = $_FILES['nl_hinhanh']['name'];
                            $target_dir = "images/";
                            $target_file = $target_dir . basename($_FILES["nl_hinhanh"]["name"]);
                            move_uploaded_file($_FILES['nl_hinhanh']['tmp_name'],$target_dir.$name);
                            $sql = "INSERT INTO `nguyen_lieu`(`loainl_id`, `nl_ten`, `nl_khoiluong`, `dvt_id`, `nl_hinhanh`, `nl_chatdam`, `nl_chatbeo`, `nl_chatxo`, `nl_chatbotduong`, `nl_vitamin`, `nl_khoangchat`) VALUES ('$loainl_id', '$nl_ten', '$nl_khoiluong', '$dvt_id', '". $target_file."', '$nl_chatdam', '$nl_chatbeo', '$nl_chatxo', '$nl_chatbotduong', '$nl_vitamin', '$nl_khoangchat'  )";
                            echo "$sql";

                            $query = mysqli_query($con, $sql);
                             if ($query){
                                header("location:themnl.php");
                             }else{
                                echo "<center> <font size='5' color='red'>Thêm mới không thành công </br>
                                   <a href='themnl.php' style='color:white'> Làm lại </a> </font> </center>";
                            }
                           mysqli_close($con);
                            
                        }
                    ?>