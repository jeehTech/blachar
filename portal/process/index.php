<?php include "../plugins/db.php";
?>

<?php
// LOGIN AUTHENTICATOR STARTS
if(isset($_POST['login'])){
    $username=strtolower(mysqli_real_escape_string($bil,$_POST['username']));
    $pwd=mysqli_real_escape_string($bil,$_POST['password']);

    $fetch_user="SELECT*FROM bil_users WHERE username ='$username' OR email='$username'";
    $status=mysqli_fetch_array(mysqli_query($bil,$fetch_user))['status'];
    $id=mysqli_fetch_array(mysqli_query($bil,$fetch_user))['user_id'];
    $pwdDb=mysqli_fetch_array(mysqli_query($bil,$fetch_user))['password'];
    if(password_verify($pwd,$pwdDb)){
        if($status == 'inactive'){
            //header("Location:../login/?auth=inactive");
             echo"<meta http-equiv='refresh' content='0.00005;url=../login/?auth=inactive'>";
            die();
        }elseif($status == 'expire'){
            //header("Location:../renew-password/");
        echo"<meta http-equiv='refresh' content='0.00005;url=../renew-password/'>";
            die();
        }elseif($status == 'active'){
            session_start();
            $_SESSION['blachar_bil_user_id_123']=$id;
            // header('location:../');
        echo"<meta http-equiv='refresh' content='0.00005;url=../>";
            die();
        }
    }else{
        //header("location:../login/?auth=fail");
        echo"<meta http-equiv='refresh' content='0.00005;url=../login/?auth=fail'>";
        die();
    }

}
// LOGIN AUTHENTICATOR ENDS

//LOGOUT OR DESTROY SESSION STARTS
if(isset($_GET['logout'])){
    session_start();
    session_unset();
    session_destroy();
   // header("Location:../login/?auth=logout");
   echo"<meta http-equiv='refresh' content='0.00005;url=../login/?auth=logout'>";
    die();
}
//LOGOUT OR DESTROY SESSION ENDS

// ADD OR EDIT NEWS OR EVENTS STARTS
if(isset($_POST['save_media'])){
    $project_title=$_POST['project_title'];
    $about_project=$_POST['about_project'];
    $project_client=$_POST['project_client'];
    $project_service=$_POST['project_service'];
    $project_date=$_POST['project_date'];
if(empty($_POST['project_id'])){

      //upload starts
        $dpName = $_FILES['project_image']['name'];
        $dpTmpName = $_FILES['project_image']['tmp_name'];
        $dpSize = $_FILES['project_image']['size']; //only 5MB == 5120KBs
        $dpError = $_FILES['project_image']['error'];
        $dpType = $_FILES['project_image']['type'];
        $dpExt = explode('.', $dpName);
        $dpActualExt = strtolower(end ($dpExt));
   
        $allowedDp = array('png' , 'jpg' , 'jpeg' , 'gif');
   
        if (in_array($dpActualExt, $allowedDp)) {
            if ($dpError == 0) {
                if ($dpSize < 5000000) {
                    $date=date('d');
                    $month=date('m');
                    $year=date('Y');
                    $hour=date('H');
                    $min=date('i');
                    $sec=date('s');
                    $photo_new_name=$date."".$month."".$year."".$hour."".$min."".$sec;

                    $thumbnail_new = "project".$photo_new_name.".".$dpActualExt;
                    $dpDestination = '../../assets/uploads/'.$thumbnail_new;
                    move_uploaded_file($dpTmpName, $dpDestination);
                    $save_media="INSERT INTO bil_projects(project_image,project_title,about_project,project_client,project_service,project_date) VALUES('$thumbnail_new','$project_title','$about_project','$project_client','$project_service','$project_date')";
                    mysqli_query($bil,$save_media);
                   // header("location:../?trx_name=blachar_projects&success");
                   echo"<meta http-equiv='refresh' content='0.00005;url=../?trx_name=blachar_projects&success'>";
                    die();
                          }else{
                             $msg="Failed To Upload, Image Is Large ; (Max Size 5MBs)";
                             echo $msg;
                          }
                    }else{
                    $msg="Failed To Upload, Error In Uploading";
                    echo $msg;
                 }
             }else{
              $msg="Failed To Upload,Only png, jpg ,jpeg ,gif Images Allowed";
              echo $msg;
          }
          //upload ends
}elseif(!empty($_POST['project_id'])){
    $table=$_POST['table'];
    $id=$_POST['project_id'];
    if($_FILES['thumbnail']['tmp_name'] == ''){
        $media_updt="UPDATE bil_projects SET project_title='$project_title',about_project='$about_project',project_client='$project_client',project_service='$project_service',project_date='$project_date' WHERE project_id='$id'";
        $qry=mysqli_query($bil,$media_updt);
        if($qry){
          //header("location:../?trx_name=blachar_projects&edit=success");
                 echo"<meta http-equiv='refresh' content='0.00005;url=../?trx_name=blachar_projects&edit=success'>";
           die();
        }else{
           // header("location:../?trx_name=blachar_projects&edit=fail");
         echo"<meta http-equiv='refresh' content='0.00005;url=../?trx_name=blachar_projects&edit=fail'>";
            die();
        }
    }elseif($_FILES['thumbnail']['tmp_name'] != ''){
        $fetch_media="SELECT*FROM bil_projects WHERE project_id='$id'";
        $thumbnail=mysqli_fetch_array(mysqli_query($bil,$fetch_media))['project_image'];
        unlink("../../assets/uploads/$thumbnail");

    //upload starts
    $dpName = $_FILES['project_image']['name'];
    $dpTmpName = $_FILES['project_image']['tmp_name'];
    $dpSize = $_FILES['project_image']['size']; //only 5MB == 5120KBs
    $dpError = $_FILES['project_image']['error'];
    $dpType = $_FILES['project_image']['type'];
    $dpExt = explode('.', $dpName);
    $dpActualExt = strtolower(end ($dpExt));

    $allowedDp = array('png' , 'jpg' , 'jpeg' , 'gif');

    if (in_array($dpActualExt, $allowedDp)) {
        if ($dpError == 0) {
            if ($dpSize < 5000000) {
                $date=date('d');
                $month=date('m');
                $year=date('Y');
                $hour=date('H');
                $min=date('i');
                $sec=date('s');
                $photo_new_name=$date."".$month."".$year."".$hour."".$min."".$sec;

                $thumbnail_new = "project".$photo_new_name.".".$dpActualExt;
                $dpDestination = '../../assets/uploads/'.$thumbnail_new;
                move_uploaded_file($dpTmpName, $dpDestination);
                $media_updt="UPDATE bil_projects SET project_image='$thumbnail_new',project_title='$project_title',about_project='$about_project',project_client='$project_client',project_service='$project_service',project_date='$project_date' WHERE project_id='$id'";
                mysqli_query($bil,$media_updt);
               // header("location:../?trx_name=blachar_projects&edit=success");
                     echo"<meta http-equiv='refresh' content='0.00005;url=../?trx_name=blachar_projects&edit=success'>";
                die();
                      }else{
                         $msg="Failed To Upload, Image Is Large ; (Max Size 5MBs)";
                         echo $msg;
                      }
                }else{
                $msg="Failed To Upload, Error In Uploading";
                echo $msg;
             }
         }else{
          $msg="Failed To Upload,Only png, jpg ,jpeg ,gif Images Allowed";
          echo $msg;
      }
      //upload ends


    }

}
}

// ADD OR EDIT NEWS OR EVENTS ENDS


//DELETE MEDIA STARTS
if(isset($_GET['delete_media'])){

        $project_image=mysqli_fetch_array(mysqli_query($bil,"SELECT*FROM bil_projects WHERE project_id=".$_GET['delete_media']))['project_image'];
        unlink("../../assets/uploads/$project_image");
        $delete_image="DELETE FROM bil_projects WHERE project_id=".$_GET['delete_media'];
        mysqli_query($bil,$delete_image);
        //header("location:../?trx_name=blachar_projects&delete=success");
        echo"<meta http-equiv='refresh' content='0.00005;url=../?trx_name=blachar_projects&delete=success'>";
        die();
}
// DELETE MEDIA ENDS



?>