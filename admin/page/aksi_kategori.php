<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
    if(isset($_POST['submit'])){
        $nama=$_POST['nama'];
        $ket=$_POST['ket'];

        $query=$con->query("INSERT INTO kategori (nama_kategori,keterangan) VALUES  ('$nama','$ket')");
        if($query){
            header('location:../index.php?page=kategori');
        }
    }
}
else if ($_GET['proses']=='hapus'){
    $id=$_GET['id'];

    $query=$con->query("DELETE FROM kategori WHERE id=$id");
    header('location:../index.php?page=kategori');
}
else if ($_GET['proses']=='update'){
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $ket=$_POST['ket'];

        $query=$con->query("UPDATE kategori SET nama_kategori='$nama', keterangan='$ket' WHERE id=$id");
        if($query){
            header('location:../index.php?page=kategori');
        }
    }
}
?>