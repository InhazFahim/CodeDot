<?/php

    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailForm = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "potatoe.gamerr@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have a meesage ".$name"./n/n".$message;

        mail($mailTo,$name,$txt,$headers);
        header("Location: index.html?messageSent")
    }        

?>