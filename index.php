<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday home</title>
</head>
<body>
    <h1>Holiday home rental page</h1>
    <?php
    echo "<p>On this page you can check the availability of this house.</p>";
    ?>
    <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <div style="background:#fff;max-width:628px;"><iframe src="https://www.availcalendar.com/print/15165" width="100%" height="470" frameborder="0" scrolling="no"></iframe></div><p><a href="http://www.availcalendar.com/calendar/15165" target="_blank">Holiday home Availability Calendar</a></p>
    Pets: <input type="radio" value="Yes">
    <input type="radio" value="No">
    <input type="submit" >
    </form>
   
    <a href="https://www.availcalendar.com/calendar/15165" target="_blank">Holiday home - Availability Calendar</a>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your booking is from <?php echo $_POST["startDate"]; ?> until <?php echo $_POST["endDate"]; ?>.          

    
</body>
</html>