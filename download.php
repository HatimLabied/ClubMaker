<?php


    header('Content-Type: application/mp4');
    header('Content-Disposition: attachment; filename=CLUB_OCP.mp4');
    header('Pragma: no-cache');
    header('Expires:0');
    readfile('CLUB_OCP.mp4');
    exit;

?>