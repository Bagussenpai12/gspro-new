<?php
session_start();

unset($_SESSION['username']);
session_destroy();
echo "<scripttype='text/javascript'>
        alert('anda berhasil log out')
        window.location = 'index.php'
      </script>;
"

?>