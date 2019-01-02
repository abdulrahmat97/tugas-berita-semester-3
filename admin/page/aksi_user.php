<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
    if(isset($_POST['submit'])){
        $usertrim=trim($_POST['username']);
        $username=strip_tags($usertrim);
        $pass=md5($_POST['pass']);
        $level=($_POST['level']);
        $query=$con->query("INSERT INTO user (username,password,level) VALUES  ('$username','$pass','$level')");
        if($query){
            header('location:../index.php?page=user');
        }
    }
}
else if ($_GET['proses']=='hapus'){
    $id=$_GET['id'];
    $query=$con->query("DELETE FROM user WHERE id=$id");
    header('location:../index.php?page=user');
}
else if ($_GET['proses']=='update'){
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $usertrim=trim($_POST['username']);
        $username=strip_tags($usertrim);
        $pass=md5($_POST['pass']);
        $level=($_POST['level']);
        if($pass==''){
            $query=$con->query("UPDATE user SET 
                                username='$username', level='$level' WHERE id=$id");
        }
        else{
            $query=$con->query("UPDATE user SET 
                                username='$username',password='$pass', level='$level' WHERE id=$id");
        }
        if($query){
            header('location:../index.php?page=user');
        }
    }
}
?>