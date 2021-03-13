<?php
// $xmlDoc=new DOMDocument();
// $xmlDoc->load("kotus-sanalista_v1.xml");
// echo "hello world!";
//
//
// <?php
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.


if (file_exists('testi.xml')) {
    $xml = simplexml_load_file('testi.xml');

  echo "hello from gethint.php! testi.xml exists.";
  echo "</br></br>"; 
  print_r($xml);
  echo "</br></br>"; 

//echo $xml->book[0]->title . "<br>";
//echo $xml->luokka->st . "<br>";

foreach($xml->children() as $juttu) {
  echo $juttu->s . ", ";
  echo $juttu->t . ", ";
  echo $juttu->tn . ", ";
}

} else {
    exit('Failed to open testi.xml.');
}

?>
