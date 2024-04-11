<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="signin_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daxil ol</title>
</head>
<body>
    <div class="wrapper">
        <form action="signin.php" method="post">
            <h1>Daxil ol</h1>
            <div class="input-box">
                <input type="email" placeholder="E-mail" name="email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Şifrə" name="parol" required minlength="8" maxlength="12" id="shifre">
                <img src="hide.png" id="goz-icon">
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Məni Xatırla</label>
                <a href="#">Şifrəni unutmusan?</a>
            </div>
            <button type="submit" class="btn">Daxil ol</button>
            <div class="hesab-yox">
                <p>Hesabın yoxdur? <a href="signup.php">Qeydiyyatdan keç</a></p>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $password = $_POST["parol"];

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
        
        if($row["email"] == $email && $row["password"] == $password){
            echo '<script>alert("You Logged in succesfully")</script>';
        }
        else{
            echo '<script>alert("Failed to Log in. Try again!")</script>';
        }
    }
    mysqli_close($conn);
    
?>