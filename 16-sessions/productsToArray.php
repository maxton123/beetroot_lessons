<?php

/**
 * @param string $sourceFile
 * @return array|null
 * @throws Exception
 */
function jsonToArray(string $sourceFile): array
{
    if (!file_exists($sourceFile)) {
        throw new Exception("Файл '$sourceFile' не існує");
    }

    $json = file_get_contents($sourceFile);
    if ($json === false) {
        throw new Exception("Неможливо отримати вміст файлу: $sourceFile");
    }

    try {
        $products = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (Exception $e) {
        throw new Exception('Помилка обробки json');
    }

    return $products;
}
