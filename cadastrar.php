<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Vaga;

//validação do POST
if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    $obVaga = new Vaga;
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descicao = $_POST['descicao'];
    $obVaga->ativo = $_POST['ativo'];

$obVaga->cadastar();

}

//echo "<prev>"; print_r($_POST);echo "</prev>"; exit;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
