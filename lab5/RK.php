<?php
    session_start();
    if (!isset($_SESSION['start_time'])) {
        $_SESSION['start_time'] = time();
      }
      $elapsedTime = time() - $_SESSION['start_time'];
      echo $elapsedTime
?>