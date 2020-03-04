<?php
    session_start();
    echo $_SESSION['nome'];
    echo '<br>';
    echo session_id();
?>