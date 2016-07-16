<?php
$msg = "Baixar: ".$_POST['baixar']." /// Nome: ".$_POST['nome']." /// Email: ".$_POST['email']." /// Empresa: ".$_POST['empresa']." /// Telefone: ".$_POST['telefone'];
mail("info@jukemobapp.co", "CONTATO PORTAL", $msg);

header('Location: http://www.jukemobapp.co/#obrigado');