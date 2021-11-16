<?php include 'includes/header.php';

session_start();
include 'includes/dbconn.php';

$username = $_POST['username'];
$password = $_POST['password'];
if (isset($username) && isset($password)) {

    if (empty($username)) {

    }else{
        $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {
            echo "<script>You are logged in.</script>";

            header("Location:https://damelnigmatova.com/w4t3/products");
            exit();
        }else{
            echo "<script>Username or password is incorrect</script>";
        }
        }
    }
}
?>
<link rel="stylesheet" href="css/login.css">
</head>
<body style="overflow: hidden;">

<div>
    <div>
        <img src="imgs/background2.jpeg" alt="Natural Alchemy LogIn">
    </div>
    <div class="login-form" style="width: 50%; height: 100%; position: fixed; left: 50%;top:0%;">
        <div style="margin: 20%; 5%;">

            <a href="index.php" style="float: right;"><i class="fas fa-undo-alt" style="font-size: 20px; color: #749937;"></i></a>
            <h1 style="padding: 20px 0px;">Natural Alchemy</h1>

            <form action="" method="post">
                <input type="text" name="username" placeholder="Your username"><br>
                <input type="password" name="password" placeholder="Password">
                <button type="submit" style="margin-top:40px;">Login</button>
            </form>
            <p style="font-size: 10px; text-align: center;">Don't have an account? Please, contact Natural Alchemy Administration to receive access to Natural Alchemy Online Database System</p>

        </div>
    </div>
</div>
</body>
</html>
