<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="../assets/login/css/style.css">
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

        <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

</head>

<body>
<hgroup>
    <h1>LOGIN</h1>
</hgroup>
<form action="" method="post">
    <div class="group">
        <input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
        <label>Username</label>
    </div>
    <div class="group">
        <input type="password" name="pass"><span class="highlight"></span><span class="bar"></span>
        <label>Password</label>
    </div>
    <input type="submit" class="btn btn-fill btn-lg btn-warning" name="submit" value="Login">
    <?php
    require ('koneksi.php');
    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $pass=md5($_POST['pass']);
        $query=$con->prepare("SELECT * FROM user WHERE username = ? AND  password = ?");
        $query->execute(array($user,$pass));
        $result=$query->rowCount();
        $ambil=$query->fetch();
        if($result==1){
            session_start();
            $_SESSION['user']=$ambil['username'];
            $_SESSION['level']=$ambil['level'];
            $_SESSION['id']=$ambil['id'];
            header('location: ../index.php');
        }
        else
            echo "<script>alert('Username atau Password Salah')</script>";
    }
    ?>
</form>
<footer>
    <p>Abdul Rahmat 1601091005</p>
</footer>
<script src='../assets/js/jquery.3.2.1.min.js'></script>

<script  src="../assets/login/js/index.js"></script>

</body>
</html>
