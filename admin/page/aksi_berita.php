<?php
include ('koneksi.php');
session_start();
if ($_GET['proses']=='tambah'){
    if(isset($_POST['submit'])){
        $nama   = $_FILES['gambar']['name'];
        $size   = $_FILES['gambar']['size'];
        $asal   = $_FILES['gambar']['tmp_name'];
        $id     = $_SESSION['id'];
        $format = pathinfo($nama,PATHINFO_EXTENSION);
        $nama_simpan=rand(000000,999999).$nama;
        if(empty($asal)){
            $query=$con->prepare("INSERT INTO berita (
                                    id_kategori,id_user,judul,isi_berita)
                                    VALUES 
                                    (?,?,?,?)");
            $query->execute(array($_POST['kategori'],$id,$_POST['judul'],$_POST['berita']));
            if($query){
                header('location:../index.php?page=berita');
            }
        }
        else {
            if ($format == 'jpg' || $format == 'jpeg' || $format == 'png' || $format == 'gif') {
                if ($size < 10000000) {
                    move_uploaded_file($asal, "../foto_berita/$nama_simpan");
                    $query = $con->query("INSERT INTO berita(id_kategori,id_user,judul,gambar,isi_berita)
                                    VALUES 
                                    ('$_POST[kategori]',$id,'$_POST[judul]','$nama_simpan','$_POST[berita]')");
                    if ($query) {
                        header('location:../index.php?page=berita');
                    }
                } else {
                    echo "<script language='JavaScript'>
                    alert('file terlalu besar');
                    self.history.back()
                    </script>";
                }
            } else {
                echo "<script language='JavaScript'>
                    alert('Format Gambar harus JPEG,JPG,PNG,GIF');
                    self.history.back()
                    </script>";

            }
        }

    }
}
else if ($_GET['proses']=='hapus'){
    $id=$_GET['id'];
    $query=$con->query("SELECT * FROM berita WHERE id_berita=$id");
    $data=$query->fetch();
    $file1=$data['gambar'];
    $file2='../foto_berita/'.$file1;
    unlink($file2);
    $query2=$con->query("DELETE FROM berita WHERE id_berita=$id");
    header('location:../index.php?page=berita');
}
else if ($_GET['proses']=='update'){
    if(isset($_POST['submit'])){
        $idberita = $_POST['idberita'];
        $id       = $_SESSION['id'];
            $query=$con->query("UPDATE berita SET 
                                    id_kategori='$_POST[kategori]',
                                    id_user=$id,
                                    judul='$_POST[judul]',
                                    isi_berita='$_POST[berita]'
                                    WHERE id_berita=$idberita");
        if($query){
            header('location:../index.php?page=berita');
        }
    }
}
?>