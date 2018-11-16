<html>
    <body>
        <form method="post">
            <p>Enter your credit card number</p>
            Credit Card Number: <input type="text" name="card_no" size="50"> <br><br>
            <button type="submit">Enter</button>
            <br><br> <hr> <br><br>
        </form>
    </body>
</html>



<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    $card_no = $_POST['card_no'];   // '42000000000000000000000000000000000000'

    if( 9223372036854775807 == intval($card_no) ){
        echo "Success card use";
    } 
    else{
        echo "Fail card use";
    }
}
?>