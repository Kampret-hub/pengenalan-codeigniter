<div class="content-wrapper">
	<section class="content">
		<?php  foreach ($mahasiswa as $mhs) { ?>

			<form action="<?php echo base_url().'mahasiswa/update'; ?>" method="post">
				<div class="form-group">
					<label>Nama Mahasiswa</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
				</div>
				<div class="form-group">
					<label>NIM</label>
					<input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type="text" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
				</div>
				<div class="form-group">
					<label>Jurusan</label>
	                <select class="form-control" name="jurusan">
						<option value="<?= $mhs->jurusan ?>" ><?= $mhs->jurusan ?></option>
						 <option>Sistem informasi</option>
		                  <option>Akutasni</option>
		                  <option>Farmasi</option>
		                  <option>Teknik sipil</option>
					</select>     
                 </div>
                 <div class="form-group">
					<label>Almat</label>
					<input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
				</div>
				<div class="form-group">
					<label>E-mail</label>
					<input type="text" name="email" class="form-control" value="<?php echo $mhs->email ?>">
				</div>
				<div class="form-group">
					<label>No Hp</label>
					<input type="text" name="no_hp" class="form-control" value="<?php echo $mhs->no_hp ?>">
				</div>
               
					
				<button type="submit" class="btn btn-primary">Simpan </button>
				<button type="reset" class="btn btn-danger">Reset </button>
			</form>
		<?php } ?>
	</section>
</div>