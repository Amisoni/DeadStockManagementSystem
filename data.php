<?php
session_start();
?>
<?php
 echo '<img src="<?Php echo " $_SESSION[profile_photo]"; ?>" width="36" height="36" class="ks-avatar rounded-circle">';
echo ucwords($_SESSION['firstname']) . " " . ucwords($_SESSION['lastname']);

?>