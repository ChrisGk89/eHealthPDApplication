<?php

$row = 1;
    $url = 'http://ehealthpd-com.stackstaging.com/'.$dfile.'csv';
    if (($handle = fopen( $url, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;

            // print_r($data);
            for ($i=2; $i < $num; $i++) {
                if((($i+1)%3)==0){
                    $time_array[] = $data[$i];
                }
                //$total_time = $total_time + $data[$c]['2'];
            }
        }
        fclose($handle);
    }
    $total_time = 0;
    foreach ($time_array as $did) {
        $total_time = $total_time +  (int)$did;
    }

    echo $total_time / 1000.'Seconds';


?>