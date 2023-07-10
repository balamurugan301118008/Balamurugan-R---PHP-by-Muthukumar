

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Create Tables</title>
</head>
<body>
<h1>Create tabel are here ..</h1>
    <form action="/addTableAndColumn" method="post">
        <div>
            <label>Select a DB Name :</label>
            <select style="width: 200px" class="AllDbList" name="DB_name">
                    <?php foreach ($allDBList as $allDbs) : ?>
                        <option ><?php echo $allDbs['Database']; ?></option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label>Table Name :</label>
            <input type="text" name="table_name" placeholder="Enter a table name">
            <button class="addTable">Create Table</button>
        </div>
        <div class="moreBtncontainer">
            <div class="buttonContainer"></div>
        </div>
    </form>
<button onclick="oneMorebtn(1)">Add More Column..</button>
<a href="/">Back to home</a>
<script src="../moreBtn.js"></script>
</body>
</html>