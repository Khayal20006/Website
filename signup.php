<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="signup_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qeydiyyat</title>
</head>
<body>
    <div class="wrapper">
        <form action="signup.php" method="post">
            <h1>Qeydiyyatdan keç</h1>
            <div class="input-box">
                <input type="text" placeholder="Ad" name="Ad" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Soyad" name="Soyad" required>
            </div>
            <div class="input-box">
                <input type="email" placeholder="E-mail" required name="Email">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Şifrə" required minlength="8" maxlength="12" id="shifre" name="Password">
                <img src="hide.png" id="goz-icon">
            </div>

            
            
            <button type="submit" class="loginbtn">Qeydiyyatdan keç</button>
            
            <div class="hesab-var">
                <label>Hesabın var?  </label>
                <a href="signin.php">Daxil ol</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Ad = filter_input(INPUT_POST, "Ad", FILTER_SANITIZE_SPECIAL_CHARS);
        $Soyad = filter_input(INPUT_POST, "Soyad", FILTER_SANITIZE_SPECIAL_CHARS);
        $Email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_SPECIAL_CHARS);
        $Password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);

        $hash = password_hash($Password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (ad, soyad, email, password) VALUE ('$Ad', '$Soyad', '$Email', '$Password')";
        mysqli_query($conn, $sql);

    }
?>