<?php function index() { ?>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <img src="img/profile1.png" width="20%" class="rounded-circle img-thumbnail">
    <p style="font-size: 30px;">&nbsp;<span id="lol"></span></p>
    <span class="badge badge-primary"><i class="fa fa-globe"></i> Web Developer</span>
  <span class="badge badge-secondary"><i class="fa fa-android"></i> Android Developer</span>
  <span class="badge badge-success"><i class="fa fa-camera"></i> Photographer</span>
  <span class="badge badge-danger"><i class="fa fa-video-camera"></i> Videographer</span>
  <hr></hr>
    <p class="lead">Selamat datang di Digitalent Scholarship 2019</p>
    <button type="button" class="btn btn-primary btn-sm text-center" data-toggle="modal" data-target="#exampleModal">
      Touch me
    </button>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About me</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="text-align: justify;">Saya <b>Hermansyah</b>, biasa dipanggil <b>Herman</b> juga saya melakukan hal yang membuat saya senang. seperti melakukan hobi, dll. <br>Saat ini saya sedang dalam pelatihan <a href="https://digitalent.kominfo.go.id/" style="text-decoration: none;">Digitalent Scholarship dari Kominfo</a>.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<section id="about" class="about">
<div class="container">
  <div class="row mb-3">
    <div class="col text-center">
     
      <h3>Tentang</h3>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
</section>
<?php }
