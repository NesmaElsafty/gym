<?php

session_start();

require_once '../../admin/config/connect.php';
require_once '../../admin/config/functions.php';
require_once '../../admin/config/db.php';

checkAuth('doctors','../index.php');

      $doctor_name2 = $_POST['doctor_name1'];
      $msg2 = $_POST['msg1'];
      $client_name2 = $_POST['client_name1'];
      $sender2 = $_POST['sender1'];
      $client_unID2 = $_POST['client_unID1'];
      $doctor_unID2 = $_POST['doctor_unID1'];

      $query = 'INSERT INTO chat (doctor_name,msg,client_name,sender, client_unID, doctor_unID) VALUES ("'.$doctor_name2.'","'.$msg2.'","'.$client_name2.'","'.$sender2.'","'.$client_unID2.'","'.$doctor_unID2.'")';
      $run = mysqli_query($connect, $query);
      if ($run) {
            // die($query);
      }

?>