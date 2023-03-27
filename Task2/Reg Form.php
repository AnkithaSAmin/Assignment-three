<!DOCTYPE html>
<html>
    <head>
        <title>Task2</title>
    </head>
    <body>
        <form action="form.php" method="get">
            <h2>Registration Form</h2>
            Name: <input type="text" name="name">
            <br><br>
            E-mail: <input type="text" name="email">
            <br><br>
            Phone-No: <input type="text" maxlength="10" name="phone">
            <br><br>
            Message: <textarea name="message" row="5" cols="30"></textarea>
            <br><br>
            Gender: 
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Other">Other
            <br><br>
            <input type="submit" name="submit" value="Submit"> 
        </form>

        
    </body>
</html>

