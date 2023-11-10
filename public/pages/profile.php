<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | Alibabot</title>
</head>
<body>
    <section id="profile">
        <h1>    <?php
        $obj = json_decode($_COOKIE['login_info']);
        echo $obj->email;
        
    ?></h1>
    </section>

</body>
</html>