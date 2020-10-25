<?php 

/* Template Name: Booking Response */
?>

<?php 

if(isset($_POST['date'])) {



    $jobId = $_POST['jobId'];
    $mobileNumber = $_POST['mobileNumber'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $virtualGroup = $_POST['virtualGroup'];

    $response = "1";
    //$result = "https://staging.waterwalaprime.in:8443/bookslot/book";

    if(!empty($date)) {

        // API URL
        $url = 'https://staging.waterwalaprime.in:8443/bookslot/book';

        // Create a new cURL resource
        $ch = curl_init($url);

        // Setup request to send json via POST
        $data = array(
            'jobId' => $jobId,
            'mobileNumber' => $mobileNumber,
            'virtualSlot' => array(
                'date' => $date,
                'day' => $day,
                'startTime' => $startTime,
                'endTime' => $endTime,
                'virtualGroup' => $virtualGroup,
            )
        );
        $payload = json_encode(array("data" => $data));
        // print_r($payload);
        // exit();
        // Attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the POST request
        $result = curl_exec($ch);

        echo "success";

        // print_r($result);
        // die();
        // Close cURL resource
        $response = "1";
        die;
        curl_close($ch);
        // $response = '1';
        // die;

        // if (!empty($result)) {
        //     $response = "<h2 style='color: #000000;font-size: 30px;font-weight: 200;text-transform: none;line-height: 1.8;position: relative;display: inline-block;background-color: #FFF;padding-bottom: 30px;'>Error pls submit again ( " . "'" .$jobId . "' )" . " </h2>  ";

        //     echo $response;
        //     die;
        // }
    }
   die;
}

  
?>
