<div class="container">
	<h3><?= $pageTitle ?></h3>

	<form action="<?php echo base_url() . 'cMhs/addItem' ?>" method="POST">
		<div class="form-row">
			<div class="col-8">

				<div class="form-group">
					<label>NAME</label><br>
					<input class="form-control" type="text" name="name" required="required" /><br>
				</div>
			</div>


			<div class="col-4">
				<div class="form-group">
					<label>NIM</label><br>
					<input class="form-control" type="text" name="nim" required="required" /><br>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="col-4">
				<div class="form-group">
					<label>JURUSAN</label><br>
					<input class="form-control" type="text" name="jurusan" required="required" /><br>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label>PRODI</label><br>
					<input class="form-control" type="text" name="prodi" required="required"><br>
				</div>
			</div>

			<div class="col-4">
				<div class="form-group">
					<label>KELAS</label><br>
					<input class="form-control" type="text" name="kelas" required="required"></textarea><br>
				</div>
			</div>
		</div>

		<div class="form-row float-right">
			<input type="submit" name="" value="Simpan" class='btn btn-success' />
		</div>


	</form>
</div>