<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="GET" action="">
        <input type="text" name="firstname" placeholder="firstname"><br>
        <input type="password" name="pw" placeholder="password"><br>
        <h3>fav-game</h3>
        <label>rugby<input type="checkbox" name="Rugby"></label>
        <input type="checkbox" name="volleyball">
        <input type="checkbox" name="cricket"><br>
        <input type="date" name="dob" value="dob" placeholder="dob"><br>
        <input type="number" value="+91" placeholder="phone no"><br>
        <select>
            <option value="payment">payment</option>
            <option value="mpay">mpay</option>
            <option value="gpay">gpay</option>
            <option value="netbanking">netbanking</option>
        </select><br>
        <input type="button" name="submit" value="login">
    </form>
</body>
</html>