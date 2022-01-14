<?php

# Identifica os numeros que nao sao repetidos
/**
 * @param array $arrayToFilter
 * @return string
 */
function filterArray(array $arrayToFilter): string
{
    $arrayNotRepeated = [];
    foreach ($arrayToFilter as $num) {
        $countTimes = 0;
        foreach ($arrayToFilter as $numUnder) {
            if ($numUnder == $num) $countTimes++;
        }
        if ($countTimes == 1) $arrayNotRepeated[] = $num;
    }

    if (count($arrayNotRepeated) == 0) {
        return "Todos os números se repetem.";
    } else if (count($arrayNotRepeated) != 1) {
        $arrayString = implode(", ", array_slice($arrayNotRepeated, 0, count($arrayNotRepeated) - 1));
        $arrayString .= " e " . end($arrayNotRepeated);
        return "Os números que não se repetem são o " . $arrayString;
    }

    return "O número que não se repete é o " . $arrayNotRepeated[0];
}

# Cria um array com numeros aleatorios
/**
 * @param int $arraySize
 * @param int $randIni
 * @param int $randFinal
 * @return array
 */
function buildArray(int $arraySize, int $randIni, int $randFinal): array
{
    $arrayRandom = [];
    for ($count = 0; $count < $arraySize; $count++) {
        $arrayRandom[] = rand($randIni, $randFinal);
    }
    return $arrayRandom;
}



$arrayToFilter = buildArray(20, 1, 10);
echo "Array aleatório: " . implode(", ", $arrayToFilter);
echo "<br/>";
echo filterArray($arrayToFilter);


