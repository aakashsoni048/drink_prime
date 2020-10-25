<?php 
/* Template Name: API RESPONSE */
?>

<?php get_header();?>

<?php

// Given Link -- "http://ec2-15-207-89-27.ap-south-1.compute.amazonaws.com:8080/bookslot/list?jobId=13173&mobileNumber=8310039860"

// Dummy Link -- "https://reqres.in/api/users?page=2"

// $ch = curl_init("https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860");    // initialize curl handle
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// $data = curl_exec($ch);
// print($data);

// $homepage = file_get_contents('https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860');
// echo $homepage;

// $api_url = "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860";
// $json_data = file_get_contents($api_url);
// $response = json_decode($json_data);
// 	echo ("<pre>");
// 	print_r($response);
// 	echo ("</pre>");

// $curl = curl_init();
// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
// ));
// $response = curl_exec($curl);
// curl_close($curl);
// echo $response;


// $api_url = "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860";
// $json_data = file_get_contents($api_url);
// $response = json_decode($json_data);
// 	echo ("<pre>");
// 	print_r($response);
// 	echo ("</pre>");

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo "string";
// echo $response;




// $request = wp_remote_get( 'https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860' );
// $body = wp_remote_retrieve_body( $request );
// $data = json_decode( $body, true );
// if ( is_wp_error( $data ) ) {
//     $error_message = $data->get_error_message();
//     echo "Something went wrong: $error_message";
// } else {
//     echo 'Response:<pre>';
//     print_r( $data ); 
//     echo '</pre>';
// }


// $api_url = "https://reqres.in/api/users?page=2";
// $json_data = file_get_contents($api_url);
// $response_data = json_decode($json_data);
// echo "<pre>";
// echo "string";
// print_r($response_data);
?>
<b>Projects:</b>

 	<select  class="form-control" name="author">
		
	</select>

<div id="new-projects">
	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$( "#new-projects" ).load( "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860" );
</script>


<div class="mypanel"></div>
<script>
$.getJSON('https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860', function(data) {
    
    var text = `Date: ${data}<br>`
    $(".mypanel").html(text);
});
</script>


<button type="button" id="fetchBtn" class="btn btn-primary"> 
        Fetch Data 
    </button> 
  
    <div class="container"> 
        <h1>Employee List</h1> 
        <ul id="list"></ul> 
    </div> 

<script>
        let fetchBtn = document.getElementById("fetchBtn"); 
  
        fetchBtn.addEventListener("click", buttonclickhandler); 
  
        function buttonclickhandler() { 
  
            // Instantiate an new XHR Object 
            const xhr = new XMLHttpRequest(); 
  
            // Open an obejct (GET/POST, PATH, 
            // ASYN-TRUE/FALSE) 
            xhr.open("GET", "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860", true); 
  
             // When response is ready 
            xhr.onload = function () { 
                if (this.status === 200) { 
  
                    // Changing string data into JSON Object 
                    obj = JSON.parse(this.responseText); 
  
                    // Getting the ul element 
                    let list = document.getElementById("list"); 
                    str = "" 
                    for (key in obj.data) { 
                        str +=  
                        `<li>${obj.data[key].date}</li>`; 
                        `<li>${obj.data[key].day}</li>`; 
                        `<li>${obj.data[key].startTime}</li>`; 
                        `<li>${obj.data[key].endTime}</li>`; 
                        `<li>${obj.data[key].virtualGroup}</li>`; 
                    } 
                    list.innerHTML = str; 
                } 
                else { 
                    console.log("File not found"); 
                } 
            } 
            xhr.send(); 
        } 
</script>


<?php get_footer();?>

