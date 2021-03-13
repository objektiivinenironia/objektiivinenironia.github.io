<?php
// $xmlDoc=new DOMDocument();
// $xmlDoc->load("kotus-sanalista_v1.xml");
// echo "hello world!";
//
//
// <?php
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.


//get the q parameter from URL
$q=$_GET["q"];

    
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

  echo "</br></br>"; 
echo $q;
}

} else {
    exit('Failed to open testi.xml.');
}

?>
