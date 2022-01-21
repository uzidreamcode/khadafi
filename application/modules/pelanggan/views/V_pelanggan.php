<div id="page-content">	

  <div class="form-group" style="padding-bottom: 2%">
    <form method="post" action="<?php echo site_url('pelanggan/cari') ?>" >
      <div class="col-md-2" style="padding: 0px">
        <div id="demo-dp-txtinput">
          <?php if($this->uri->segment(2) != 'cari'){?>
            <input type="text" autocomplete="off" name="cari" class="form-control input-sm " placeholder="Cari">
          <?php } ?>
          <?php if($this->uri->segment(2) == 'cari'){
            $cari = $this->input->post('cari'); ?>
            <input type="text" autocomplete="off" value="<?= $cari ?>" name="cari" class="form-control input-sm " placeholder="Outlet">
          <?php } ?> 
        </div>
      </div>


      <div class="col-md-2" style="">

        <button class="btn btn-success btn-sm">
          <span class="fa fa-filter"></span>
          Cari
        </button>
        <a class="btn btn-default btn-sm" href="<?php echo base_url('data_sekolah'); ?>">
          <i class="fa fa-refresh" ></i>
        </a>
      </div>
    </form>


    <div class="col-md-2" style="float: right;">

      <button style="float: right;" class="btn btn-success btn-sm"   data-toggle="modal" data-target="#demo-default-tambah">
        <span class="fa fa-plus"></span>
        Tambah
      </button>
    </div>


  </div>

  <?php foreach($tampil as $res) {
    $id = $res->id_cucian;

    ?>
    <?php
    if ($res->status=='belum') 
      {?>
        <div class="col-lg-4" style="margin-top: 2%">

          <div class="panel widget">
            <div class="widget-header bg-danger text-center">
              <h4 class="text-light mar-no pad-top"><?php echo $res->nama_pelanggan?></h4>

            </div>
            <div class="widget-body">
              <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="<?php echo base_url ()?>assets/img/profil.png">




              <div class="list-group bg-trans mar-no">
                <a class="list-group-item list-item-sm" href="#">
                  <span class="label label-primary pull-right"><?php echo $res->berat?> Kg</span>
                  Berat Cucian
                </a>
                <?php 
                $date = date('d-m-Y', strtotime($res->tanggal));
                ?>

                <a class="list-group-item list-item-sm" href="#">
                  <span class="label label-success pull-right"><?php echo $date?></span>
                  Tanggal
                </a>
                <a class="list-group-item list-item-sm" href="#">
                  <span class="label label-danger pull-right">Rp <?php echo $res->harga?></span>
                  Harga 
                </a>
              </div>
              <div class="pad-all text-center">

                <span>
                  <a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_cucian?>" class=" btn btn-danger btn-sm">
                    <span class="fa fa-trash"></span>
                    &nbsp;Hapus
                  </a>
                  <a data-toggle="modal" data-target="#demo-default-detail<?php echo $res->id_cucian?>" class=" btn btn-default btn-sm">
                    <span class="fa fa-sticky-note"></span>
                    &nbsp;Detail
                  </a>
                </span>           
              </div>
            </div>
          </div>

          <!-- update -->

          <!-- end update -->

          <!-- detail -->
          <div class="modal fade" id="demo-default-detail<?php echo $res->id_cucian?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                <!--Modal detail-->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                  <h4 class="modal-title">Detail</h4>
                </div>


                <!--Modal body--> 
                <div class="modal-body">

                  <div class="panel-body">
                    <div class="col-md-6">
                      <label for="" class="control-label">Nama</label>
                      <input disabled type="text" name="nama" value="<?= $res->nama_pelanggan ?>" placeholder="Nama" class="form-control">
                      <input  type="hidden" value="<?= $res->id_cucian ?>" name="id_user">
                    </div>
                    <div class="col-md-6">
                      <label for="" class="control-label">No Hp</label>
                      <input disabled type="text" name="hp" value="<?= $res->no_hp ?>" placeholder="No Hp" class="form-control">
                    </div>
                    <div style="margin-top: 30px" class="col-md-6">
                      <label for="" class="control-label"> Berat (kg)</label>
                      <input disabled type="text" name="username"  value="<?= $res->berat ?>"  placeholder="Username" class="form-control">
                    </div>

                    <div style="margin-top: 30px" class="col-md-6">
                      <label for="" class="control-label">harga (Rp)</label>
                      <input disabled type="text" value="<?= $res->harga ?>"  name="password"  placeholder="Password" class="form-control">
                    </div>

                    <div style="margin-top: 30px" class="col-md-6">
                      <label for="" class="control-label">Tanggal</label>
                      <input disabled type="text" value="<?= $res->tanggal ?>"  name="password"  placeholder="Password" class="form-control">
                    </div>
                    <div style="margin-top: 30px" class="col-md-6">
                      <label for="" class="control-label">status</label>
                      <input disabled type="text" value="<?= $res->status ?>"  name="password"  placeholder="Password" class="form-control">
                    </div>


             <!-- <div class="col-md-6 " style="margin-top: 2%">
              <label for="" class="control-label">Preview Foto Profile</label>
              <img  src="<?= base_url(); ?>assets/img/<?= $res->foto ?>" width="150px" />
            </div> -->


          </div>


        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>

        </div>

      </div>
    </div>
  </div>
  <!-- end detail -->

  <!-- hapus -->
  <div class="modal fade" id="demo-default-modal2<?php echo $res->id_cucian?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!--Modal header-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
          <h4 class="modal-title">Hapus</h4>
        </div>

        <!--Modal body-->
        <div class="modal-body">
          <p class="text-semibold text-main"></p>
          <p>Anda Yakin Ingin Menghapus Cucian milik <b><?php echo $res->nama_pelanggan ?></b> ? </p>
          <br>



        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
          <a class="btn btn-danger" href="<?php echo base_url('Pelanggan/hapus/'. $res->id_cucian) ?>">Hapus Cucian</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end hapus -->

</div>
<?php }
else{?>


<div class="col-lg-4" style="margin-top: 2%">

      <div class="panel widget">
        <div class="widget-header bg-success text-center">
          <h4 class="text-light mar-no pad-top"><?php echo $res->nama_pelanggan?></h4>

        </div>
        <div class="widget-body">
          <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="<?php echo base_url ()?>assets/img/profil.png">



          
          <div class="list-group bg-trans mar-no">
            <a class="list-group-item list-item-sm" href="#">
              <span class="label label-primary pull-right"><?php echo $res->berat?> Kg</span>
              Berat Cucian
            </a>
            <?php 
            $date = date('d-m-Y', strtotime($res->tanggal));
            ?>

            <a class="list-group-item list-item-sm" href="#">
              <span class="label label-success pull-right"><?php echo $date?></span>
              Tanggal
            </a>
            <a class="list-group-item list-item-sm" href="#">
              <span class="label label-danger pull-right">Rp <?php echo $res->harga?></span>
              Harga 
            </a>
          </div>
          <div class="pad-all text-center">
           
          <span>
            
            <a data-toggle="modal" data-target="#demo-default-detail<?php echo $res->id_cucian?>" class=" btn btn-default btn-sm">
              <span class="fa fa-sticky-note"></span>
              &nbsp;Detail
            </a>
          </span>           
        </div>
      </div>
    </div>

    <!-- update -->
    
    <!-- end update -->

    <!-- detail -->
    <div class="modal fade" id="demo-default-detail<?php echo $res->id_cucian?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <!--Modal detail-->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
            <h4 class="modal-title">Detail</h4>
          </div>


          <!--Modal body--> 
          <div class="modal-body">

            <div class="panel-body">
              <div class="col-md-6">
                <label for="" class="control-label">Nama</label>
                <input disabled type="text" name="nama" value="<?= $res->nama_pelanggan ?>" placeholder="Nama" class="form-control">
                <input  type="hidden" value="<?= $res->id_cucian ?>" name="id_user">
              </div>
              <div class="col-md-6">
                <label for="" class="control-label">No Hp</label>
                <input disabled type="text" name="hp" value="<?= $res->no_hp ?>" placeholder="No Hp" class="form-control">
              </div>
              <div style="margin-top: 30px" class="col-md-6">
                <label for="" class="control-label"> Berat (kg)</label>
                <input disabled type="text" name="username"  value="<?= $res->berat ?>"  placeholder="Username" class="form-control">
              </div>

              <div style="margin-top: 30px" class="col-md-6">
                <label for="" class="control-label">harga (Rp)</label>
                <input disabled type="text" value="<?= $res->harga ?>"  name="password"  placeholder="Password" class="form-control">
              </div>

              <div style="margin-top: 30px" class="col-md-6">
                <label for="" class="control-label">Tanggal</label>
                <input disabled type="text" value="<?= $res->tanggal ?>"  name="password"  placeholder="Password" class="form-control">
              </div>
              <div style="margin-top: 30px" class="col-md-6">
                <label for="" class="control-label">status</label>
                <input disabled type="text" value="<?= $res->status ?>"  name="password"  placeholder="Password" class="form-control">
              </div>

              
             <!-- <div class="col-md-6 " style="margin-top: 2%">
              <label for="" class="control-label">Preview Foto Profile</label>
              <img  src="<?= base_url(); ?>assets/img/<?= $res->foto ?>" width="150px" />
            </div> -->


          </div>


        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>

        </div>

      </div>
    </div>
  </div>
  <!-- end detail -->

  <!-- hapus -->
  
  <!-- end hapus -->

</div>
<?php }?>
<?php } ?>

<!-- tambah -->
<div class="modal fade" id="demo-default-tambah" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!--Modal Update-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        <h4 class="modal-title">Tambah Cucian</h4>
      </div>

      <?= form_open_multipart('Pelanggan/tambah'); ?>
      <!--Modal body--> 
      <div class="modal-body">

        <div class="panel-body">

          <div class="col-md-6">
            <label for="" class="control-label">Nama</label>
            <input readonly=""  type="text" name="nama" value="<?php echo $nama['nama'] ; ?>"  placeholder="Nama" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="" class="control-label">No Hp</label>
            <input  type="text " readonly="" name="hp" value="<?php echo $nama['hp'] ; ?>" placeholder="No Hp" class="form-control">
          </div>
          <div style="margin-top: 30px" class="col-md-6">
            <label for="" class="control-label"> Berat (kg)</label>
            <input  type="text" name="berat"   placeholder="Username" class="form-control">
          </div>

          <div style="margin-top: 30px" class="col-md-6">
            <label for="" class="control-label">harga per kg (Rp)</label>
            <?php foreach($perkg as $ress) 
            {
              ?>
              <input readonly=""  type="text" name="harga_kg" value="<?php echo $ress->total?>"   placeholder="Username" class="form-control">

            <?php }?>    
          </div>
          <div style="margin-top: 30px" class="col-md-6">
            <input  type="hidden" value="<?php echo date('y-m-d')?> "  name="tanggal"  placeholder="Password" class="form-control">
          </div>
          <div style="margin-top: 30px" class="col-md-6">
            <input  type="hidden" value="belum" name="status"  placeholder="Password" class="form-control">
          </div>


             <!-- <div class="col-md-6 " style="margin-top: 2%">
              <label for="" class="control-label">Preview Foto Profile</label>
              <img  src="<?= base_url(); ?>assets/img/<?= $res->foto ?>" width="150px" />
            </div> -->



          </div>


        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
        <?= form_close(); ?>

      </div>
    </div>
  </div>
  <!-- end tambah -->

</div>
<!--jQuery [ REQUIRED ]-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script>
  $(document).ready(function () {


    $('#demo-dp-txtinputmasukkerja input').datepicker({
      format: "yyyy-m-d",
      todayBtn: "linked",
      todayHighlight: true
    });

    $('#demo-dp-txtinputakhirkerja input').datepicker({
      format: "yyyy-m-d",
      todayBtn: "linked",
      todayHighlight: true
    });



  });
</script>


<script type="text/javascript">


  function tampilkanPreview(userfile,idpreview)
  {
    var gb = userfile.files;
    for (var i = 0; i < gb.length; i++)
    {
      var gbPreview = gb[i];
      var imageType = /image.*/;
      var preview=document.getElementById(idpreview);
      var reader = new FileReader();
      if (gbPreview.type.match(imageType))
      {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
    else
    {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
    }
  }
  function tampilkanPreview1(userfile,idpreview1)
  {
    var gb = userfile.files;
    for (var i = 0; i < gb.length; i++)
    {
      var gbPreview1 = gb[i];
      var imageType = /image.*/;
      var preview1=document.getElementById(idpreview1);
      var reader = new FileReader();
      if (gbPreview1.type.match(imageType))
      {
      //jika tipe data sesuai
      preview1.file = gbPreview1;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview1);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview1);
    }
    else
    {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
    }
  }
</script>