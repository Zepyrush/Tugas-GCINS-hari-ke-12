
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
   
    <form action="/welcome">
        <label for="first_name">First Name:</label>
        <br>
        <br>
        <input type="text" name="first_name" required>
        <br>
        <br>

        <label for="last_name">Last Name:</label>
        <br>
        <br>
        <input type="text" name="last_name" required>
        <br>
        <br>

        <label>Gender :</label><br><br>
            <input type="radio" name="Gender">Male<br>
            <input type="radio" name="Gender">Female<br>
            <input type="radio" name="Gender">Other<br>
        <br>

        <label>Nationality :</label><br><br>
            <select name="Nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="America">America</option>
                <option value="Singapore">Singapore</option>
                <option value="France">France</option>
                <option value="France">Japan</option>
                <option value="France">England</option>
            </select><br><br>

        <label>Language Spoken :</label><br>            
            <input type="checkbox" name="Language">Bahasa Indonesia<br>
            <input type="checkbox" name="Language">English<br>
            <input type="checkbox" name="Language">Other<br>
        
        <br>

        <label>Bio : </label><br><br>
        <textarea name="message" cols="30" rows="10"></textarea>
        <br>
        <br>
        <input type="submit" value="Sign Up">

    </form>
</body>
</html>