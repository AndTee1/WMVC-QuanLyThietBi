<?php
    // $name = $specialized = $degree = $avatar = $description=$upload="";
    require '../model/teacher.php';
    // require '../controller/teacher_add_controller.php';
    $name=$_GET['name'];
    $specialized=$_GET['specialized'];
    $degree=$_GET['degree'];
    $avata=$_GET['avata'];
    $description=$_GET['description'];
    $created=date("Y-m-d h:i:s");
    $loading=0;
    $status=true;
    if(isset($_POST['btnAdd'])){
        $loading+=1; 
        if($loading==1){
            add( $name,$specialized,$degree,$avata,$description,$created);
            deleteImgTmp($avata);
            router();
        }
    }
    
    function router(){
        header("Location: ../view/teacher_add_complete_view.php?status=$status");
    }
    function deleteImgTmp($avatarT){
        $file="../../web/avata/teacherTMP/$avatarT";
        $newfile="../../web/avata/$avatarT";
        copy($file, $newfile);
        unlink("../../web/avata/teacherTMP/".$avatarT);
    } 
?>