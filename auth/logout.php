<?php
session_start();
if(isset($_SESSION["uid"])){
    session_destroy();
    echo "<script>window.location.href='index.php'</script>";
}
?>