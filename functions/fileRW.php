<?php
//write file json:
function updateFileJson(array $stocksArray, string $path): bool
{
    $jsonString = json_encode($stocksArray);
    $fp = fopen($path, 'w');
    $result = fwrite($fp, $jsonString);
    fclose($fp);
    return $result;
}

//read file json:
function readFileJson(string $path): array | null
{
    try {
        $jsonString = file_get_contents($path);
        return json_decode($jsonString, true);
    } catch (Exception $e) {
        echo "Il file non esiste.";
        return null;
    }
}

?>