<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments App</title>
</head>
<body>
    <div>
        <?php
            if(DB::connection()->getPdo()){
                echo "Successfully Connected to DB: ".DB::connection()-> getDatabaseName();
            }
        ?>
    </div>
</body>
</html>
