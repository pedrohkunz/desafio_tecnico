<?php

/* Faça a ordenação e impressão da estrutura $arrayDeClientes resultante do exercício
2 pela data de nascimento (pode ser ascendente ou descendente). */

function adicionarDataDeNascimento($arrayDeClientes, $arrayDeNascimento) {
    foreach ($arrayDeClientes as $cliente) {
        $cliente->dataDeNascimento = $arrayDeNascimento[$cliente->nome];
    }
}

function compararDatas($dataA, $dataB) {
    $dataA = DateTime::createFromFormat('d-m-Y', $dataA);
    $dataB = DateTime::createFromFormat('d-m-Y', $dataB);

    if ($dataA === false || $dataB === false) 
        return 0;
    
    return $dataA <=> $dataB;
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

usort($arrayDeClientes, function($a, $b) {
    return compararDatas($a->dataDeNascimento, $b->dataDeNascimento);
});

foreach ($arrayDeClientes as $cliente) {
    echo $cliente->nome . ' nascido em ' . $cliente->dataDeNascimento . '<br>';
}

?>