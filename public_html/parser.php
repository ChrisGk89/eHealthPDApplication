<?php
//https://stackoverflow.com/questions/6487631/load-multiple-urls-using-simplexml

$all_urls = array('http://vhost11.lnu.se:20090/final/getData.php?table=User&id=3',
  				  'http://vhost11.lnu.se:20090/final/getData.php?table=User&id=2',
  				  'http://vhost11.lnu.se:20090/final/getData.php?table=User&id=3',
                  'http://vhost11.lnu.se:20090/final/getData.php?table=User&id=4', 
                  'http://vhost11.lnu.se:20090/final/getData.php?table=Organization',
                  'http://vhost11.lnu.se:20090/final/getData.php?table=Therapy&id=1',
                  'http://vhost11.lnu.se:20090/final/getData.php?table=Therapy&id=2',
                  'http://vhost11.lnu.se:20090/final/getData.php?table=Therapy_List&id=1',
                  'http://vhost11.lnu.se:20090/final/getData.php?table=Test_Session&id=1',
				  'http://vhost11.lnu.se:20090/final/getData.php?table=Test_Session&id=2',
                  'http://vhost11.lnu.se:20090/final/getData.php?table=Test_Session&id=3',
                  'http://vhost11.lnu.se:20090/final/getData.php?table=Test&id=1');

foreach ($all_urls as $url) {
    importXml($url);
}
function importXml($url){

    $xml = simplexml_load_file($url);

    $element_name = array();                                    //get all xml element name
    foreach ($xml->children()->children() as $value) {
    $element_name[] = $value->getName();
    }?>
        <table border = "1">
        <thead>
        <tr>
    <?php
    foreach ($element_name as $value) {             //display table head
    echo "<th>{$value}</th>";

    }
    ?>
        </tr>
        </thead>

        <tbody>
    <?php
        foreach ($xml->children() as $value) {              //display table data
        echo "<tr>";    
        for ($i = 0; $i < count($element_name); $i++) {
        echo "<td>{$value->children()->$element_name[$i]}</td>";

        }
        echo "</tr>";
          
      ?>