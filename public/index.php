<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;

switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
    break;
    
    case '/formulario-novo-curso':
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
    break;

    default:
        echo 'ERRO 404';
}
