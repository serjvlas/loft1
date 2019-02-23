<?php
function task1()
{
    $dataFile = file_get_contents('data.xml');
    $xml = new SimpleXMLElement($dataFile);

    foreach ($xml->Address as $address) {
        echo $address->attributes() . ':' . '<br>';
        echo $address->Name . '<br>';
        echo $address->Street . '<br>';
        echo $address->City . '<br>';
        echo $address->State . '<br>';
        echo $address->Zip . '<br>';
        echo $address->Country . '<br>' . '<pre></pre>';
    }
    echo '<br>';

    foreach ($xml->Items->Item as $items) {
        $atrib = $items[PartNumber] . '<br>';
        echo 'Part Number: ' . $atrib;
        echo 'Product name: ' . $items->ProductName . '<br>';
        echo 'Quantity: ' . $items->Quantity . '<br>';
        echo 'USPrice: ' . $items->USPrice . '<br>';
        echo 'Comment: ' . $items->Comment . '<br>';
        echo 'Ship Date: ' . $items->ShipDate . '<br>';
        echo '<br>';
    }
    $delNotes = $xml->DeliveryNotes;
    echo 'Delivery Notes: ' . $delNotes . '<br>';
}

function task2()
{
    $employers = ["Dima", "Misha", "Tanya"];
    $json = json_encode($employers);
    file_put_contents("output.json", $json);
    if ((rand(1, 2)) === 1) {
        $jsonDecode = json_decode($json);
        $replaceArr = ["Tanya", "Masha", "Sveta"];
        $newJson = array_replace($jsonDecode, $replaceArr);
        $newJson = json_encode($newJson);
        file_put_contents("output2.json", $newJson);
    }
    $output = file_get_contents("output.json");
    $jsonoutput = json_decode($output, true);
    $output2 = file_get_contents("output2.json");
    $jsonoutput2 = json_decode($output2, true);
    $arrDiffs = array_diff($jsonoutput, $jsonoutput2);
    echo "Отличаются: " . "<br>";
    foreach ($arrDiffs as $diff) {
        echo $diff . "<br>";
    }
}

function task3()
{
    $randArr = [];
    for ($i = 0; $i < 51; $i++) {
        $randArr[] = mt_rand(1, 100);
    }
    $csvFile = fopen('file.csv', 'w');
    fputcsv($csvFile, $randArr);
    fclose($csvFile);
    $openCsv = file_get_contents('file.csv');
    $newCSVarr = str_getcsv($openCsv, ",");
    $sum = 0;
    foreach ($newCSVarr as $value) {
        if ($value % 2 != 1) {
            $sum = $sum += $value;
        }
    }
    echo $sum;
}

function task4()
{
    $wikiUrl = "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
    $wikiCont = file_get_contents($wikiUrl);
    $wikiContData = json_decode($wikiCont, true);
    echo "Tilte is " . $wikiContData['query']['pages']['15580374']['title'] . "<br>";
    echo "Page ID is " . $wikiContData['query']['pages']['15580374']['pageid'];
}
