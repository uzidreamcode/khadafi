<div id="page-head">

	<div class="pad-all text-center">
		<h3>Selamat Datang Admin.</h3>
		<p1>Selamat datang di Aplikasi Pengelolaan Laundry. Aplikasi pengelolaan laundry ini dibuat agar memudahkan pemilik jasa laundry mengelola data pesanannya.<p></p>
		</p1></div>
	</div>



	<div class="row">
		
		
		<div class="col-md-6">
			<div class="panel panel-success panel-colorful media middle pad-all">
				<div class="media-left">
					<div class="pad-hor">
						<i class="ion-checkmark-round icon-3x"></i>
					</div>
				</div>
				<div class="media-body">
					<p class="text-2x mar-no text-semibold"><?php echo $hs?></p>
					<p class="mar-no">Selesai</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-danger panel-colorful media middle pad-all">
				<div class="media-left">
					<div class="pad-hor">
						<i class="ion-close-round icon-3x"></i>
					</div>
				</div>
				<div class="media-body">
					<p class="text-2x mar-no text-semibold"><?php echo $hb?></p>
					<p class="mar-no">Belum</p>
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Order Status</h3>
				</div>

				<!--Data Table-->
				<!--===================================================-->
				<div class="panel-body">
					<div class="pad-btm form-inline">
						
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Pelanggan</th>
									<th>Tanggal</th>
									<th>Harga</th>
									<th class="text-center">Status</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
								$no=1;
								foreach ($tampil as $pecah) 
									{?>
										<tr>
											<td><a href="#"> <?php echo $no;?></a></td>
											<td><?php echo $pecah->nama_pelanggan?></td>
											<?php 
											$date = date('d-m-Y', strtotime($pecah->tanggal));
											?>
											<td><span class="text-muted"><?php echo $date?></span></td>
											<td>Rp <?php echo $pecah->harga?></td>
											<?php
											if ($pecah->status =='selesai') 
												{?>
													<td class="text-center">
														<div class="label label-table label-success">Selesai</div>
													</td>
												<?php }
												else{?>
													<td class="text-center">
														<div class="label label-table label-danger">Belum</div>
													</td>



												<?php }?>
											</tr>
											<?php $no++?>
										<?php }?>
									</tbody>
								</table>
							</div>
							<hr class="new-section-xs">
							
						</div>
						<!--===================================================-->
						<!--End Data Table-->

					</div>
				</div>
			</div>






