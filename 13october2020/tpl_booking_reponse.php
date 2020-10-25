<?php 

/* Template Name: Booking Response */
?>

<?php

if(isset($_POST['radio_data'])) {

    $radio_data = $_POST['radio_data'];

    $all_data = explode('_', $radio_data);

    $jobId = $_POST['jobId'];
    $mobileNumber = $_POST['mobileNumber'];
    $date = $all_data[0];
    $day = $all_data[1];
    $startTime = $all_data[2];
    $endTime = $all_data[3];
    $virtualGroup = $all_data[4];

    $data = array(
        'jobId' =>  (int)$jobId,
        'mobileNumber' => $mobileNumber,
        'virtualSlot' => array(
            'date' => $date,
            'day' => $day,
            'startTime' => $startTime,
            'endTime' => $endTime,
            'virtualGroup' => $virtualGroup
        )
    );

    $data = json_encode($data);
    echo $data; 
  }
?>



