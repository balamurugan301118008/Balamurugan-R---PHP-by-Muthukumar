<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>create database</title>
</head>

<body>
    <!-- <div class="databaseContainer"> -->
        <h1>Create DataBase are here ..</h1>
        <form action="/creatDataBase" method="post" class="databaseContainer">
            <div>
                <label>DB Name:</label>
                <input type="text" name="database_name" placeholder="Enter a db name">
            </div>
            <!-- <div> -->
             <button type="submit" class="addTable">Add Database</button>
            <!-- </div> -->
        </form>
    <!-- </div> -->
    <a href="/" class="back">Back to home</a>
</body>

</html>