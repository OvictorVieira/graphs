<?php

function calcSize($vertex, $graphs)
{
    echo 'Grau do vertice' . count($graphs[$vertex]) . PHP_EOL;
}

function addVertex($graphs)
{
    array_push($graphs, []);
    echo 'Quantidade de vertices: ' . count($graphs) . PHP_EOL . PHP_EOL;
    return $graphs;
}

function verifyEdge($vertex1, $vertex2, $graphs)
{
    if (in_array($vertex2, $graphs[$vertex1])) {
        echo 'Possui aresta';
        return false;
    }

    echo 'nao possui aresta';
    echo PHP_EOL;
}

function seeVertexAdjacent($vertex, $graphs)
{
    foreach ($graphs[$vertex] as $vertexAdjacent) {
        echo '(' . $vertex . ', ' . $vertexAdjacent . ')' . PHP_EOL;
    }
}

function addEdge($quantityVertex, $graphs)
{
    $edge = readline('Vertice 1:');
    $edge1 = readline('Vertice 2:');

    if( $edge > $quantityVertex || $edge1 > $quantityVertex || $edge < 0 || $edge1 < 0) {
        echo 'vertice nao encontrado';
        return false;
    }

    array_push($graphs[$edge], $edge1);
    array_push($graphs[$edge1], $edge);

    return $graphs;

}

function graphs($graphs)
{
    foreach ($graphs as $vertex => $edges) {
        if (count($edges) == 0)
            echo '(' . $vertex . ', ' . ' )' . PHP_EOL;

        foreach ($edges as $edge) {
            echo '(' . $vertex . ', ' .  $edge  . ')'. PHP_EOL;
        }
    }
    echo PHP_EOL;
}