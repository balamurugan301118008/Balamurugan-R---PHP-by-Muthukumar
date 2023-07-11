
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Insert Records</title>
</head>
<body>
    <form action="/getDB" method="post">
        <div>
            <label>Select a DB Name :</label>
            <select  class="AllDbList" name="DB_name" >
                <?php foreach ($allDBList as $allDbs) : ?>
                    <option><?php echo $allDbs['Database']; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Select DB</button>
        </div>
    </form>
    <form action="/getColumns" method="post">
    <div>
        <label>Select a Table Name :</label>
        <select  class="AllTableList" name="tableName">
            <?php foreach ($Alltables as $table) : ?>
            <?php $tab = $table->TABLE_NAME; ?>
            <option><?php echo $tab; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Select Table</button>
    </div>
    </form>

    <form action="/insertValues" method="post">
        <label>list of columns : </label>
        <div>
            <ol>
            <?php foreach ($columnName as $columns) : ?>
                <li><?php echo $columns->COLUMN_NAME; ?></li>
                <input type="text" name="columnName[]">
            <?php endforeach; ?>
            </ol>
        </div>
        <button type="submit">Submit Columns</button>
    </form>
    <a href="/" class="back">Back to home</a>
</body>
</html>