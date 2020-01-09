<div class="container">

	<h3><?= $pageTitle ?></h3>
	<?php
	foreach ($mahasiswa as $row) : ?>

		<form action="<?php echo base_url('cMhs/editItem?rowID=') . $row->id ?>" method="POST">
			<div class="form-row">
				<div class="col-8">

					<div class="form-group">
						<label>NAME</label><br>
						<input class="form-control" type="text" name="name" required="required" value="<?= $row->name ?>" /><br>
					</div>
				</div>


				<div class="col-4">
					<div class="form-group">
						<label>NIM</label><br>
						<input class="form-control" type="text" name="nim" required="required" value="<?= $row->nim ?>" /><br>
					</div>
				</div>
			</div>

			<div class="form-row">
				<div class="col-4">
					<div class="form-group">
						<label>JURUSAN</label><br>
						<input class="form-control" type="text" name="jurusan" required="required" value="<?= $row->jurusan ?>" /><br>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label>PRODI</label><br>
						<input class="form-control" type="text" name="prodi" required="required" value="<?= $row->prodi ?>" /><br>
					</div>
				</div>

				<div class="col-4">
					<div class="form-group">
						<label>KELAS</label><br>
						<input class="form-control" type="text" name="kelas" required="required" value="<?= $row->kelas ?>"></textarea></br>
					</div>
				</div>
			</div>

			<div class="form-row float-right">
				<input type="submit" name="" value="EDIT" class='btn btn-success' />
			</div>

			<!-- Modal -->



		</form>
	<?php endforeach; ?>
</div>