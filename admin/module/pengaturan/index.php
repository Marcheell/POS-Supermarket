 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Pengaturan Supermarket</h3>
						<br>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Ubah Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-stripped">
							<thead>
								<tr>
									<td>Nama Supermarket</td>
									<td>Alamat Supermarket</td>
									<td>Kontak (Hp)</td>
									<td>Nama Pemilik Supermarket</td>
									<td>Aksi</td>
								</tr>
							</thead>
							<tbody>
								<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">		
								<tr>
									<td><input class="form-control" name="namaSupermarket" value="<?php echo $Supermarket['nama_Supermarket'];?>" placeholder="Nama Supermarket"></td>
									<td><input class="form-control" name="alamat" value="<?php echo $Supermarket['alamat_Supermarket'];?>" placeholder="Alamat Supermarket"></td>
									<td><input class="form-control" name="kontak" value="<?php echo $Supermarket['tlp'];?>" placeholder="Kontak (Hp)"></td>
									<td><input class="form-control" name="pemilik" value="<?php echo $Supermarket['nama_pemilik'];?>" placeholder="Nama Pemilik Supermarket"></td>
									<td><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Data</button></td>
								</tr>
								</form>
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
