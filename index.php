<?php
session_start();
// include_once 'admin/koneksi.php';
// include_once 'admin/Member.php';
// belum fix
global $member;
global $role;

include_once 'header.php';

?>
<?php
error_reporting(0);
$hal = $_GET['hal'];
if($hal == '/'){
	include_once 'home.php';
} else if( !empty($hal)){
	include_once '' .$hal.'.php';
} else {
	include_once 'home.php';
}

?>


<?php
include_once 'footer.php';
?>