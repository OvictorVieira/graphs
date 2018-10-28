<?php

require_once './functions.php';

$qntVertex = readline('Quantidade de vertice: ');

$graph = [];

for ($iterator = 0; $iterator < $qntVertex; $iterator++) {
    array_push($graph, []);
}

$op = 0;

while ($op != 7) {
    echo 'Selecione uma opção: '. PHP_EOL;
    echo '--------------------------------'. PHP_EOL;
    echo '1 - Adicionar vertice' . PHP_EOL . PHP_EOL;
    echo '2 - Cadastrar arestas' . PHP_EOL . PHP_EOL;
    echo '3 - Visualizar grafo' . PHP_EOL . PHP_EOL;
    echo '4 - Visualizar os vértices adjacentes de um determinado' . PHP_EOL . PHP_EOL;
    echo '5 - Verificar se existe aresta entre dois vértices' . PHP_EOL . PHP_EOL;
    echo '6 - Calcular grau de um vértice' . PHP_EOL . PHP_EOL;
    echo '7 - Sair' . PHP_EOL . PHP_EOL;
    echo '--------------------------------'. PHP_EOL;

    $op = readline('Opcao: ');

    switch ($op) {
        case 1:
            $graph = addVertex($graph);
            break;

        case 2:
            $graph = addEdge($qntVertex, $graph);
            graphs($graph);
            break;

        case 3:
            graphs($graph);
            break;

        case 4:
            $vertex = readline('Vertice para busca: ');
            seeVertexAdjacent($vertex, $graph);
            break;

        case 5:
            $vertex1 = readline('Vertice 1:');
            $vertex2 = readline('Vertice 2:');
            verifyEdge($vertex1, $vertex2, $graph);
            break;

        case 6:
            $vertex = readline('Vertice para busca: ');
            calcSize($vertex, $graph);
            break;
    }
}