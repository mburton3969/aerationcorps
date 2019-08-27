<?php
if($_SESSION['in'] != 'Yes'){
  echo '<script>
          window.location = "index.php?logout=y";
        </script>';
}

?>