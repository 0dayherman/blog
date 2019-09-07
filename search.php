<?php

include "inc/config.php";
include "head.php";

?>
<br><br><br><br><br>
<?php 
if(isset($_POST['cari'])){
$search = @"%{$_POST['cari']}%";
$tampil = $db->cari($search);
echo $tampil;
}
include "footer.php";