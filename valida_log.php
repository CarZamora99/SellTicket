<?php
      $conn = oci_connect("admisell", "admisell", "localhost/XE");
      if (!$conn) {
         $m = oci_error();
         trigger_error(htmlentities($m['message']), E_USER_ERROR);
         }

      $user= $_POST['uname']; 
      $password= $_POST['psw'];
      $compara= $user.$password;

$stid = oci_parse($conn,"SELECT nom_usua,contra FROM login WHERE nom_usua='".$user."' and contra='".$password."'");
oci_execute($stid);
While(($row = oci_fetch_array($stid, OCI_BOTH)) != false){
   $contra = $row[0].$row[1];
     }
      if($contra == $compara) {
         header("location:index2.php?usuario=".urlencode($user));

         
      }
      else{
         header("location:index.html");
      }
          
        oci_free_statement($stid);
         oci_close($conn);
         
?>
