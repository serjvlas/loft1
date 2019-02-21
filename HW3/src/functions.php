<?php
function task1 (){
    $dataFile = file_get_contents ('data.xml');
    $xml = new SimpleXMLElement($dataFile);

   // echo '<pre>';
  //  var_dump($xml);
    ///var_dump($orderNumber);
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
    echo 'Delivery Notes: ' .  $delNotes . '<br>';
}
//task1 ();

