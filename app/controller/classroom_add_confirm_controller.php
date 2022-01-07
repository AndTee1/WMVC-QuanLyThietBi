<?php
    require '../model/classroom.php';
<<<<<<< HEAD
=======
    $id=getLastIDR();
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
    $name = $_GET['name'];
    $building = $_GET['building'];
    $description = $_GET['description'];
    $avatar = $_GET['avatar'];

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $created = date("Y-m-d h:i:s");

    $check_tmp = 0;
    if(isset($_POST['btn-add'])){
        $check_tmp += 1; 
        if($check_tmp == 1){
            add_room($name, $building, $description, $avatar, $created);
<<<<<<< HEAD
            remove_tmp($avatar);
=======
            mkdir("../../web/avata/$id", 0777);
            remove_tmp($avatar, $id);
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
            router_room();
        }
    }

<<<<<<< HEAD
    function remove_tmp($img_tmp){
        $file="../../web/avata/add_classroom/$img_tmp";
        $newfile="../../web/avata/$img_tmp";
=======
    function remove_tmp($img_tmp,$id){
        $file="../../web/avata/add_classroom/$img_tmp";
        $newfile="../../web/avata/$id/$img_tmp";
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
        copy($file, $newfile);
        unlink("../../web/avata/add_classroom/.$img_tmp");
    } 

    function router_room(){
        header("Location: ../view/classroom_add_complete_view.php");
    }
?>