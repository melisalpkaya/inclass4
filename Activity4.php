<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Activity4stylesheet.css">
    <title>Melis Alpkaya</title>
</head>
<body>
    <h1>Registration Form</h1>

    <form action="Activity4-preview.php" method="post" enctype="multipart/form-data">
        <label>Name:</label>
        <input name="name" type="text"/> <br>
        <label>Username: </label>
        <input name="username" type="text"/> <br>
        <label>Password: </label>
        <input name="password" type="password"/> <br>
        <label>Address: </label>
        <input name="address" type="text"/> <br>
        <label for="Country">Country:</label>
        <select id="country" name="country">
        <option value="">(Please select a country)</option>
        <option value="SouthKorea">South Korea</option>
        <option value="Turkey">Turkey</option>
        <option value="England">England</option>
        <option value="Italy">Italy</option>
        </select><br>
        <label>ZIP CODE: </label>
        <input name="zipcode" type="text"/> <br>
        <label>Email: </label>
        <input name="email" type="email"/> <br>
        <label>Sex: </label>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br>
        <label>Language: </label>
        <input type="checkbox" name="checklist[]" value="english"> English
        <input type="checkbox" name="checklist[]" value="french"> French
        <input type="checkbox" name="checklist[]" value="germany"> Germany<br>
        <label>About: </label>
        <textarea name="about" rows="4" cols="25"></textarea><br>
        <input type="submit" value="Submit"/>
        

    


    
    </form>

</body>
</html>