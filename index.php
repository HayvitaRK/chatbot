<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0">
<title>MyBot</title>
<link rel="stylesheet" href="styles.css">

<!-- fontawesome kit  code created with hayvi004@gmail.com  -  Hayvi@fontawesome -->
<script src="https://kit.fontawesome.com/70dfbe3f31.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- error clear -->
</head>

<body>
<div class="wrapper">
    <div class="title">My Chat Bot</div>
    <div class="form">
    <div class="bot-inbox inbox">
    <div class="icon">
    <i class="fas fa-user"></i>
    </div>
    <div class="msg-header">
    <p>Hi there! How can I help you?</p>
    </div>
    </div>
     </div>
    <div class="typing-field">
    <div class="input-data">
        <input id="data" type="text" placeholder="Type here..." required>
        <button id="send-btn" >Send</button>
    </div>
    </div>
</div>
<script>

    $( document ).ready(function() {
    $("#send-btn").on("click", function(){
    $value= $("#data").val();
    $msg='<div class="user-inbox inbox"><div class="msg-header"><p>'+$value+'</p></div></div>';
    $(".form").append($msg);
    $("#data").val(' ');

    //start ajax code
    $.ajax({
        url    :'message.php',
        type   : 'POST',
        data   :'text='+$value,
        success: function(result){
       $replay='<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i> </div><div class="msg-header"><p>'+ result +'</p></div></div> ';
           $(".form").append($replay);
        //  automatic scrolling
        
        $(".form").scrollTop($(".form")[0].scrollHeight);
        }
    });
});
 });
</script>
</body>
</html>
