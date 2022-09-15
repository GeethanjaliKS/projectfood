<?php
// Start the session
session_start();
session_unset();

// destroy the session
session_destroy();
echo "<script>
alert('Logged Out successfully');
window.location.href='login.php';
</script>";
?>
