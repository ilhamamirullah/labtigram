 <main>

  <!-- body -->

  <div class="container z-depth-3 purple">
   <ul class="tabs tabs-transparent tabs-fixed-width">
    <li class="tab"><a class="active" href="#test1">TIMELINE</a></li>
    <li class="tab"><a href="#test2">ADD</a></li>
    <li class="tab"><a href="#test3">ME</a></li>
   </ul>
  </div>

  <div class="container">

    <!-- halaman home -->
    <div id="test1" class="halaman1 z-depth-3 col s12">
     <div class="row">

      <!-- foto pada home -->
      <div class="col s6 m4">
        <div class="waves-effect waves-light">
         <a href="#modal"><img src="<?php echo base_url(); ?>assets/post/ex.jpeg" width="100%"></a>
        </div>
      </div>
      <div class="col s6 m4">
        <div class="waves-effect waves-light">
         <a href="#modal"><img src="<?php echo base_url(); ?>assets/post/ex.jpeg" width="100%"></a>
        </div>
      </div>
      <div class="col s6 m4">
        <div class="waves-effect waves-light">
         <a href="#modal"><img src="<?php echo base_url(); ?>assets/post/ex.jpeg" width="100%"></a>
        </div>
      </div>
      <!-- akhir foto pada home -->

     </div>

     <!-- modal home -->
   <div id="modal" class="modal">
    <div class="z-depth-3 home ">
     <h5>nama pembuat konten</h5>
     <img src="<?php echo base_url(); ?>assets/post/ex.jpeg">
     <p>deskripsi konten</p>
    </div>
   </div>
   <!-- akhir modal home -->

    </div>
    <!-- akhir halaman home -->

    <!-- halaman tambah foto -->
    <div id="test2" class="halaman2 z-depth-3 col s12">

     <div class="z-depth-3 purple">
      <ul class="tabs tabs-transparent tabs-fixed-width">
       <li class="tab"><a class="active" href="#foto">FOTO</a></li>
       <li class="tab"><a href="#video">VIDEO</a></li>
      </ul>
     </div>

     <!-- form tambah foto -->
     <div id="foto">
     <div class="row">
      <form method="post" action="<?php echo base_url(); ?>user/c_user/inputgambar" enctype="multipart/form-data" style="padding: 10px">
       <div class="input-field col s12 m12">
        <input id="icon_prefix" type="text" class="validate" required name="judul">
        <label for="icon_prefix">Judul</label>
       </div>
       <div class="input-field col s12 m6 file-field">
        <div class="btn">
         <span>File</span>
         <input id="uploadImage" type="file" onchange="PreviewImage();" name="image1">
        </div>
        <div class="file-path-wrapper">
         <input class="file-path validate" type="text" placeholder="Upload disini ... " required name="image" >
        </div>
        <img id="uploadPreview" style="width: 100%;" /><br>
       </div>
       <div class="input-field col s12 m6">
        <textarea id="textarea1" class="materialize-textarea" required name="deskripsi"></textarea>
        <label for="textarea1">Deskripsi</label>
       </div>
       <div class="center">
        <input class="waves-effect waves-light btn" type="submit" name="submit" value="UPLOAD">
       </div>
      </form>
     </div>
     </div>

     <!-- form tambah video -->
     <div id="video">
     <div class="row">
      <form method="post" action="<?php echo base_url(); ?>user/c_user/inputvideo" enctype="multipart/form-data" style="padding: 10px">
       <div class="input-field col s12 m12">
        <input id="icon_prefix" type="text" class="validate" required name="judul">
        <label for="icon_prefix">Judul</label>
       </div>
       <div class="input-field col s12 m6 file-field">
        <div class="btn">
         <span>File</span>
         <input id="uploadVideo" type="file" onchange="PreviewImage();" name="video1">
        </div>
        <div class="file-path-wrapper">
         <input class="file-path validate" type="text" placeholder="Upload disini ... " required name="video1" >
        </div>
        <video id="uploadPreview" style="width: 100%;" controls /><br>
       </div>
       <div class="input-field col s12 m6">
        <textarea id="textarea1" class="materialize-textarea" required name="deskripsi"></textarea>
        <label for="textarea1">Deskripsi</label>
       </div>
       <div class="center">
        <input class="waves-effect waves-light btn" type="submit" name="submit" value="UPLOAD">
       </div>
      </form>
     </div>
     </div>

    </div>
    <!-- akhir halaman tambah foto -->

    <!-- halaman profile -->
    <div id="test3" class="halaman3 z-depth-3 col s12">
     <div class="row">

      <!-- header profile -->
      <div class="profile col s12 m12">
       <div class="row">
        <div class="col s4 m2 ">
         <img class="circle responsive-img" src="<?php echo base_url(); ?>assets/user/user.jpg">
        </div>
        <div class="col s8 m10">
         <h5>nama user</h5>
         <p>status akun</p>
        </div>
       </div>
      </div>
      <!-- akhir header profile -->

      <!-- foto pada profile -->
      <div class="col s12 m12">
       <div class="row">

        <!-- tampil foto profile -->
        <div class="col s6 m4">
         <div class="waves-effect waves-light">
          <a href="#modal1"><img src="<?php echo base_url(); ?>assets/post/ex.jpeg" width="100%"></a>
         </div>
        </div>
        <div class="col s6 m4">
         <div class="waves-effect waves-light">
          <a href="#modal1"><img src="<?php echo base_url(); ?>assets/post/ex.jpeg" width="100%"></a>
         </div>
        </div>
        <div class="col s6 m4">
         <div class="waves-effect waves-light">
          <a href="#modal1"><img src="<?php echo base_url(); ?>assets/post/ex.jpeg" width="100%"></a>
         </div>
        </div>
        <!-- akhir tampil foto profile -->

       </div>

       <!-- modal profile -->
       <div id="modal1" class="modal">
        <div class="z-depth-3 home">
         <h5>nama pembuat konten</h5>
         <img src="<?php echo base_url(); ?>assets/post/ex.jpeg">
         <p>deskripsi konten</p>
         <a href="#modal2"><i class="material-icons">edit</i></a>
         <a href=""><i class="material-icons">delete</i></a>
        </div>
       </div>
       <!-- akhir modal profile -->

       <!-- modal edit foto pada profile -->
       <div id="modal2" class="modal">
        <div class="z-depth-3 home">
         <div class="center">
          <h5>Edit deskripsi konten</h5>
         </div>
          <div class="row">
           <form method="post" action="" style="padding: 10px">
            <div class="input-field col s12 m6 file-field">
             <img src="<?php echo base_url(); ?>assets/post/ex.jpeg" width="100%">
            </div>
            <div class="input-field col s12 m6">
             <textarea id="textarea1" class="materialize-textarea" required name="deskripsi"></textarea>
             <label for="textarea1">Deskripsi</label>
            </div>
            <div class="center">
             <input class="waves-effect waves-light btn" type="submit" name="submit" value="UPDATE">
            </div>
          </form>
         </div>
        </div>
       </div>
       <!-- akhir modal edit foto pada profile -->

      </div>
      <!-- akhir foto pada profile -->

     </div>
    </div>
    <!-- akhir halaman profile -->

   </div>
  </main>
