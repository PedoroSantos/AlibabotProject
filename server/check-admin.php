<?php

$login_info = json_decode($_COOKIE['login_info'], true);
if ($login_info["cargo"] != "Funcionarios") {
    header("Location:../../");
}

?>