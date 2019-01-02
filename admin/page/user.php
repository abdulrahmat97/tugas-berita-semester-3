<?php
include ('koneksi.php');
$aksi= isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
    case 'list':
        ?>
        <p>
            <a <?php if($_SESSION['level']=='Administrator') echo "href='?page=user&aksi=tambah' " ;?>class="btn btn-primary btn-fill"
               <?php if ($_SESSION['level']!='Administrator') echo "disabled";?> ><i class="glyphicon glyphicon-plus"></i> Tambah Data User</a>
        </p>
        <div class="card">
            <div class="header">
                <h4 class="title">Users</h4>
            </div>
            <div class="content table-responsive">
                <table  class="table table-striped table-hover" id="dataTables">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Level</th>
                        <?php
                        if($_SESSION['level']=='Administrator'){
                        echo "<th>Aksi</th>";
                        }
                        ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $result=$con->query("SELECT * FROM user");
                    $i = 1;
                    while ($data=$result->fetch()) {
                        echo "
                    <tr>
                        <td>$i</td>
                        <td>$data[username]</td>
                        <td>$data[level]</td>";
                        if ($_SESSION['level'] == 'Administrator') {
                            echo "<td>
                           <a href='page/aksi_user.php?proses=hapus&id=$data[id]' onclick=\"return confirm('Anda yakin ingin menghapus data')\"
                            class=\"btn btn-danger btn-fill\"><span class='glyphicon glyphicon-trash'></span></a>
                            
                            <a href='?page=user&aksi=update&id=$data[id]'
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
                    <h4 class="title">Tambah Data User</h4>
                </div>
                <div class="content table-responsive">
                    <form action="page/aksi_user.php?proses=tambah" method="post" role="form">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pass" required>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="Administrator">Administrator</option>
                                <option value="Moderator">Moderator</option>
                                <option value="Operator">Operator</option>
                            </select>
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
        $ambil=$con->query("SELECT * FROM user WHERE id=$id");
        $data=$ambil->fetch();
        ?>
        <div class="col-lg-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Data User</h4>
                </div>
                <div class="content table-responsive">
                    <form action="page/aksi_user.php?proses=update" method="post" role="form">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" value="<?php echo $data['id']?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required value="<?php echo $data['username'];?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pass"> *kosongkan jika tidak ingin diubah
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="Administrator">Administrator</option>
                                <option value="Moderator">Moderator</option>
                                <option value="Operator">Operator</option>
                            </select>
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
