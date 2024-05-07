<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

 <body style="font-family: Arial, sans-serif;
margin: 0;
padding: 0;
justify-content: center;
align-items: center;
height: 100vh;
display: flex;
flex-direction: column;
background-image: url(https://th.bing.com/th/id/OIP.r3T-DpnkbOZ9txBJmGEjVwHaE7?pid=ImgDet&w=1280&h=853&rs=1);
background-repeat: none;
background-size: cover;">
    <div style="background: rgba(255, 255, 255, 0.178);
    backdrop-filter: blur(20px);
    border-radius: 5%;
    text-align: center;
    color: #ffffff;
    padding: 20px;
">
   
    First Name <?php echo $_GET["fname"]; ?><br> 
    Last Name <?php echo $_GET["lname"]; ?><br>
    Your Gender <?php echo $_GET["gender"]; ?><br>
    Your nationality <?php echo $_GET["nationality"]; ?><br>
    Your language <?php
        if(isset($_GET['language'])) {
            $languages = $_GET["language"];
            echo "Menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
       }; ?><br>
   Your Message :  <br><?php echo $_GET["message"]; ?>
    </body>
</div>
</body>
</html>

