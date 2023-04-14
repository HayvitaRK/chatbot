
<?php
// connecting to database
$conn = mysqli_connect("localhost","root","","bot") or die("Database error");

// getting user message
 $getMesg = mysqli_real_escape_string($conn,$_POST['text']);

// checking user query to db query
$check_data= "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn,$check_data)or die("Error");

// if query matches reply is send from db
if(mysqli_num_rows($run_query) > 0 ){
    // fetching reply
        $fetch_data = mysqli_fetch_assoc($run_query);
//storing reply will send to ajax
        $replay = $fetch_data['replies'];
       echo $replay;
    }
else{
    echo "sorry can't be able to understand you!";
}

?>
