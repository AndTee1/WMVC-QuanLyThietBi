<?php
    // $name = $specialized = $degree = $avatar = $description=$upload="";
    require '../model/teacher.php';
    $id=getLastID();
    // require '../controller/teacher_add_controller.php';
    $name=$_GET['name'];
    $specialized=$_GET['specialized'];
    $degree=$_GET['degree'];
    $avata=$_GET['avata'];
    $description=$_GET['description'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $created=date("Y-m-d h:i:s");
    $loading=0;
    
    if(isset($_POST['btnAdd'])){
        $loading+=1; 
        if($loading==1){
            add( $name,$specialized,$degree,$avata,$description,$created);
            mkdir("../../web/avata/$id", 0777);
            deleteImgTmp($avata,$id);
            router();
        }
    }
    
    function router(){
        $status='true';
        header("Location: ../view/teacher_add_complete_view.php?status=$status");
    }
    function deleteImgTmp($avatarT,$id){
        $file="../../web/avata/teacherTMP/$avatarT";
        $newfile="../../web/avata/$id/$avatarT";
        copy($file, $newfile);
        unlink("../../web/avata/teacherTMP/".$avatarT);
    } 
?>