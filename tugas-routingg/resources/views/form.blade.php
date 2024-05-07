<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hiasansignup.css">
</head>
<body>
    <h1>Buat Akun Baru</h1>
    <h3>Sign up Form</h3>
    <form action="{{url ('welcome')}}" method="get"> <br>
            <label for="value">First name:</label>
        <input type="text" name="fname" required><br>
        <label for="lname">Last name:</label>
        <input type="text" name="lname" required><br>
        
        <input type="radio"  name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio"  name="gender" value="Female">
        <label for="female">Female</label>

        <p>Nationality</p>
        <select name="nationality" id="nationality" required>
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="Indonesia2.0">Indonesia 2.0</option>
            <option value="tegal">tegal</option>
            <option value="solo">solo</option> 
        </select>
        
        <p>Language Spoken</p>
        <input type="checkbox" id="language1" value="Indonesia" name="language[]">
        <label for="language1"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="language2" value="English" name="language[]">
        <label for="language2"> English</label><br>
        <input type="checkbox" id="language3" value="bekasi" name="language[]">
        <label for="language3"> Bekasi</label><br>
        <input type="checkbox" id="language4" value="ngawi" name="language[]">
        <label for="language4"> ngawi</label><br>
        <textarea name="message" rows="10" cols="30"></textarea><br>  
        <input type="submit"> <br>
        
    </form>
</body>
</html>