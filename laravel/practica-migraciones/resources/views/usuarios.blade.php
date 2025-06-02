<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>hola, esta es la vista usuarios</p>
    <?php 
        $users = DB::table('users')->get();
        
        $userFirst = $users->first();
        $userLast = $users->last();

        foreach ($users as $user) {
            echo $user->name . "<br>";
        }
    ?>
</body>
</html>