<?php

/* Utilize a estrutura de dados $arrayDeNascimento para adicionar na estrutura
$arrayDeClientes a data de nascimento de cada cliente. */

function adicionarDataDeNascimento($arrayDeClientes, $arrayDeNascimento) {
    foreach ($arrayDeClientes as $cliente) {
        $cliente->dataDeNascimento = $arrayDeNascimento[$cliente->nome];
    }
}

$nomes = [
    'Francisco Souza', 
    'Guilherme Rosa', 
    'Arthur Golveia'
];

$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];

$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];

$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];

$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

$arrayDeNascimento = [
    'Francisco Souza' => '10-12-1996',
    'Arthur Golveia' => '14-01-2000',
    'Guilherme Rosa' => '26-05-1985',
    'Marcelo Planalto' => '26-05-1985'
];

adicionarDataDeNascimento($arrayDeClientes, $arrayDeNascimento);

?>