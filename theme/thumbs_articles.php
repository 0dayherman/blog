<section id="artikel" class="artikel bg-light">
  <div class="row mb-3 pt-4">
    <div class="col text-center">
      <h3>Artikel</h3>
    </div>
  </div>
 <div class="container">
  <div class="row mb-4">
  <?php while($pecah=$result->fetch_row()) { ?>
    <div class="col-md">
      <div class="card">
        <img src="img/thumbs/1.png" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <span id="admin"><?php echo $pecah['4'];?></span>
          <span id="date"><?php echo $pecah['3'];?></span>
          <i class="fa fa-comment-o" id="comment"> 2</i>
          <h5 class="card-title"><?php echo $pecah['1'];?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="articles/<?php echo $pecah['0'];?>" class="btn btn-primary">Read more</a>
      </div>
     </div>
    </div>
    <?php } ?>
    </div>
 </div>
