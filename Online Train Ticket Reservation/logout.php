<?php
session_start();
?>
<html>
<body>
<?php
session_unset();
session_destroy();
?>
    <script> 
        window.open('/train/log1.php','_parent');
    </script>
</body>
</html>