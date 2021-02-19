<?php
// apakah tombol submit sudah di klik atau belum 
if (isset($_POST["submit"])){
        //check username an password 
if ($_POST["username"] == "admin" && $_POST["password"] == "123"){
    //jika benar, redirect (pindah) ke halaman admin
    header("Location: admin.php");
    exit;
    }else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login</h1>
<?php if(isset($error)):?>
<p style="color: red; font-style:italic;">Username / Password Salah</p>
<?php endif;?>
    <ul>
        <form action="" method="post">
            <li>
            <label for="username">username : </label>
            <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
            <label for="password">password : </label>
            <input type="password" name="password" id="password">
            </li>
            <br>
            
           <button type="submit" name="submit">Login</button>
        
        </form>
    </ul>
</body>
</html>