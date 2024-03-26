<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="Welcome_page.css">
</head>
<body>
    <div class="container">
        <h1>
            Xoş gəldin, <?php  echo $_POST["Ad"] ." ". $_POST["Soyad"]; ?><br>
        </h1><br>
        <a href="index.html"><button class="btn">Ana Səhifəyə qayıt</button></a>
    </div>
    
    
</body>
</html>
