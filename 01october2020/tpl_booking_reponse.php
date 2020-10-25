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

    // print_r($radio_data);
    // print_r($all_data);
    // print_r($virtualGroup);
    // die();

    if(!empty($date)) {

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
        //print_r($payload);
        //die();
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://staging.waterwalaprime.in:8443/bookslot/book",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>"{\"data\":{\"jobId\":\"13173\",\"mobileNumber\":\"8310039860\",\"virtualSlot\":{\"date\":\"2020-10-06\",\"day\":\"TUESDAY\",\"startTime\":\"11:00:00\",\"endTime\":\"14:00:00\",\"virtualGroup\":\"G2\"}}}",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
          ),
        ));

        $result = curl_exec($curl);

        print_r($result);
        echo $result;
        if($result === FALSE) {
            $response = "2";
            die(curl_error($curl));
        }
        curl_close($curl);
        echo $result;
    }
   $response = "1";
   die;
}

  
?>


