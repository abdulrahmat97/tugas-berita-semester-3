<?php
include ('koneksi.php');
$aksi= isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
    case 'list':
        ?>
        <p>
            <a <?php if($_SESSION['level']!='Operator') echo "href='?page=kategori&aksi=tambah'";?> class="btn btn-primary btn-fill"
            <?php  if($_SESSION['level']=='Operator') echo "disabled";?> ><i class="glyphicon glyphicon-plus"></i> Tambah Data Kategori</a>
        </p>
        <div class="card">
            <div class="header">
                <h4 class="title">Kategori</h4>
            </div>
            <div class="content table-responsive">
                <table  class="table table-striped table-hover" id="dataTables">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Keterangan</th>
                        <?php
                        if($_SESSION['level']=='Administrator' || $_SESSION['level']=='Moderator'){
                        echo "<th>Aksi</th>";
                        }
                        ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $result=$con->query("SELECT * FROM kategori");
                    $i = 1;
                    while ($data=$result->fetch()) {
                        echo "
                    <tr>
                        <td>$i</td>
                        <td>$data[nama_kategori]</td>
                        <td>$data[keterangan]</td>";
                    if($_SESSION['level']=='Administrator' || $_SESSION['level']=='Moderator') {
                        echo "<td>
                           <a href='page/aksi_kategori.php?proses=hapus&id=$data[id]' onclick=\"return confirm('Anda yakin ingin menghapus data')\"
                            class=\"btn btn-danger btn-fill\"><span class='glyphicon glyphicon-trash'></span></a>
                            
                            <a href='?page=kategori&aksi=update&id=$data[id]'
                            class=\"btn btn-warning btn-fill\"><span class='glyphicon glyphicon-edit'></span></a>
                        </td>";
                    }
                        echo "
                    </tr>";
                        $i++;
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
        <div class="col-lg-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">Tambah Data Kategori</h4>
                </div>
                <div class="content table-responsive">
                    <form action="page/aksi_kategori.php?proses=tambah" method="post" role="form">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="ket" required class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-fill">
                            <input type="reset" name="reset" value="Clear" class="btn btn-default btn-fill">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        break;
    case 'update' :
        ?>
        <?php
        $id = $_GET['id'];
        $ambil=$con->query("SELECT * FROM kategori WHERE id=$id");
        $data=$ambil->fetch();
        ?>
        <div class="col-lg-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Data Kategori</h4>
                </div>
                <div class="content table-responsive">
                    <form action="page/aksi_kategori.php?proses=update" method="post" role="form">
                        <input type="text" name="id" value="<?php echo $data['id']?>" hidden>
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama" class="form-control" required value="<?php echo $data['nama_kategori'];?>">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="ket" required class="form-control"><?php echo $data['keterangan']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-fill">
                            <input type="reset" name="reset" value="Clear" class="btn btn-default btn-fill">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <?php
        break;
}
?>
