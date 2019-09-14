
<?php
require_once "load.php";
include __DIR__ . "/theme/head.php";
if(isset($_POST['cari'])){
$search = @"%{$_POST['cari']}%";
$tampil = $db->cari($search);
?>
<section id="artikel" class="artikel bg-light">
<div class="container">
  <div class="row mb-3 pt-5 ml-1">
    <h3><?php echo "You Search : ".htmlspecialchars($_POST['cari']);?></h3>
</div>
</div>
    <div class="col">
   <div class="col-md">
      <div class="card" style="width: 18rem; margin-left: 6rem;">
        <!-- <img src="img/thumbs/3.png" class="card-img-top" alt="Card image cap"> -->
        <div class="card-body">
          <span id="admin"><?php echo $tampil['4'];?></span>
          <span id="date"><?php echo $tampil['3'];?></span>
          <!-- <i class="fa fa-comment-o" id="comment"> 2</i> -->
          <h5 class="card-title"><?php echo $tampil['1'];?></h5>
          <p class="card-text text-justify"><?php echo substr($tampil['2'],0,100);?>..</p>
          <a href="<?php echo 'articles/'.$tampil['0'];?>" class="btn btn-primary">Read more</a>
        </div>
     </div>
    </div>
  </div>
</section>
<?php
} else {
    $db->thumbs_articles();
}
include "theme/footer.php";
