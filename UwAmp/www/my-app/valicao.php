<?php

if (strlen($_POST['usuario']) == 0) {
    echo "Usuário não pode estar em branco.";
}
else if (strlen($_POST['usuario']) <= 3 OR strlen($_POST['usuario']) >= 12) {
    echo "Usuário inválido.";
}
else {
    echo "Ok";
}




