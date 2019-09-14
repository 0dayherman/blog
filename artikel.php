<?php

require_once __DIR__ . "/load.php";
include __DIR__ . "/theme/head.php";
echo "<br><br><br>";
if(@$_GET['id']){
$id = @$_GET['id'];
$tampil = $db->articles($id);
	echo '<section class="artikel" id="artikel">
  <div class="container-artikel">
    <div class="row">
      <div class="col text-justify mt-5">
        <h3>'.$tampil['1'].'</h3>
        <p>
        Author by <i class="fa fa-user"></i> '.$tampil['4'].'<br>
        Date post '.$tampil['3'].'
        </p>
        <p>'.$tampil['2'].'.</p>
      </div>
    </div>
  </div>
</section>';
} else {
	$db->thumbs_articles();
}
include __DIR__ . "/theme/footer.php";
