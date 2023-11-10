<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | Alibabot</title>
</head>
<body>
    <section id="profile">
    <?php
        $array = json_decode($_COOKIE['login_info'], true);
        $nome = $array['nome'];
        $email = $array['email'];
        var_dump($array);
        echo "<h2>$nome</h2>";
        echo "<h2>$email</h2>";
    ?>
    </section>
</body>
</html>