<div class="container">

	<h3><?= $pageTitle ?></h3>
	<?php
	foreach ($mahasiswa as $row) : ?>

		<form action="<?php echo base_url('cMhs/Detail?rowID=') . $row->id ?>" method="POST">
			<div class="form-row">
				<div class="col-8">

					<div class="form-group">
						<label>NAME</label><br>
						<input class="form-control" type="text" name="name" readonly="readonly" value="<?= $row->name ?>" /><br>
					</div>
				</div>


				<div class="col-4">
					<div class="form-group">
						<label>NIM</label><br>
						<input class="form-control" type="text" name="nim" readonly="readonly" value="<?= $row->nim ?>" /><br>
					</div>
				</div>
			</div>

			<div class="form-row">
				<div class="col-4">
					<div class="form-group">
						<label>JURUSAN</label><br>
						<input class="form-control" type="text" name="jurusan" readonly="readonly" value="<?= $row->jurusan ?>" /><br>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label>PRODI</label><br>
						<input class="form-control" type="text" name="prodi" readonly="readonly" value="<?= $row->prodi ?>" /><br>
					</div>
				</div>

				<div class="col-4">
					<div class="form-group">
						<label>KELAS</label><br>
						<input class="form-control" type="text" name="kelas" readonly="readonly" value="<?= $row->kelas ?>"></textarea></br>
					</div>
				</div>
			</div>

			<div class="form-row float-right">
				<input type="submit" name="" value="BACK" class='btn btn-primary' />
			</div>


		</form>
	<?php endforeach; ?>
</div>