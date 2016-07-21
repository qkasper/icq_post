<?php
if (isset($_POST['text'])) {
    $text = $_POST['text'];
    if ($text == '') {
        unset($text);
    }}
    if (empty($text)) {
    exit("Error!");
}
include ("icq.class.php");
    define('UIN', '628046346');
    define('PASSWORD', '80664516813');
    $icq = new WebIcqLite();
    if($icq->connect(UIN, PASSWORD)){
        if(!$icq->send_message('352506023', $text)){
            echo $icq->error;
        }else{
            echo 'ok!';
        }
        $icq->disconnect();
    }else{
        echo $icq->error;
    }
?>

