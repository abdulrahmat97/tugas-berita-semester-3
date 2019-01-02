<?php
include ('koneksi.php');
$aksi= isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
    case 'list':
        ?>
        <p>
            <a href="?page=berita&aksi=tambah" class="btn btn-primary btn-fill"><i class="glyphicon glyphicon-plus"></i> Tambah Data berita</a>
        </p>
        <div class="card">
            <div class="header">
                <h4 class="title">Berita</h4>
            </div>
            <div class="content table-responsive">
                <table  class="table table-striped table-hover" id="dataTables">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>User</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $result=$con->query("SELECT * FROM berita ORDER BY id_berita ASC;");
                    $i = 1;
                    while ($data=$result->fetch()) {
                        $kategori=$con->query("SELECT * FROM kategori WHERE id=$data[id_kategori]");
                        $user=$con->query("SELECT * FROM user WHERE id=$data[id_user]");
                        $dk=$kategori->fetch();
                        $du=$user->fetch();
                        echo "
                    <tr>
                        <td>$i</td>
                        <td>$dk[nama_kategori]</td>
                        <td>$du[username]</td>
                        <td>$data[judul]</td>
                        <td>$data[tgl_posting]</td>
                       <td>
                           <a href='page/aksi_berita.php?proses=hapus&id=$data[id_berita]' onclick=\"return confirm('Anda yakin ingin menghapus data')\"
                            class=\"btn btn-danger btn-fill\"><span class='glyphicon glyphicon-trash'></span></a>
                            
                            <a href='?page=berita&aksi=update&id=$data[id_berita]'
                            class=\"btn btn-warning btn-fill\"><span class='glyphicon glyphicon-edit'></span></a>
                        </td>
                                     </tr>";
                        $i++;
                        //}
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
        break;
    case 'tambah':
        ?>
        <form action="page/aksi_berita.php?proses=tambah" method="post" role="form" enctype="multipart/form-data">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tambah Data Berita</h4>
                    </div>
                    <div class="content table-responsive">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <select name="kategori" class="form-control">
                                    <?php
                                    $ambil=$con->query("SELECT * FROM kategori ORDER BY nama_kategori ASC");
                                    while ($data=$ambil->fetch()){
                                        echo "<option value=$data[id]>$data[nama_kategori]";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                        </div>
                        <div class="form-group" style="clear: both">
                            <label>Isi Berita</label>
                            <textarea name="berita" class="form-control" id="isiberita"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input name="gambar" type="file"> *File gambar tidak boleh lebih dari 10MB
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-fill">
                            <input type="reset" name="reset" value="Clear" class="btn btn-default btn-fill">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        break;
    case 'update' :
        ?>
        <?php
        $id = $_GET['id'];
        $ambil=$con->query("SELECT * FROM berita WHERE id_berita=$id");
        $data=$ambil->fetch();
        ?>
        <form action="page/aksi_berita.php?proses=update" method="post" role="form" enctype="multipart/form-data">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tambah Data Berita</h4>
                    </div>
                    <div class="content table-responsive">
                        <div class="col-lg-4">
                            <input type="text" name="idberita" value="<?php echo $data['id_berita'];?>" hidden>
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <select name="kategori" class="form-control">
                                    <?php
                                    $ambil2=$con->query("SELECT * FROM kategori ORDER BY nama_kategori ASC ");
                                    while ($data2=$ambil2->fetch()){
                                        echo "<option value=$data2[id]";
                                        if($data['id_kategori']==$data2['id']){echo " selected";}
                                        echo">$data2[nama_kategori]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']?>" required>
                            </div>
                        </div>
                        <div class="form-group" style="clear: both">
                            <label>Isi Berita</label>
                            <textarea name="berita" class="form-control" id="isiberita"><?php echo $data['isi_berita']?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input name="gambar" type="file"> *File gambar tidak boleh lebih dari 10MB<br/>
                            <?php
                            if($data['gambar']!=''){
                                echo "<img src=foto_berita/$data[gambar] width=100 heigth=50>";
                            }
                            else{
                                echo "Gambar Tidak Ada";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-fill">
                            <input type="reset" name="reset" value="Clear" class="btn btn-default btn-fill">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php
        break;
}
?>
