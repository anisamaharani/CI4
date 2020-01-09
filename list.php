	<div class="container">
		<div class="form-row mt-3 mb-3">
			<a class="btn btn-outline-primary " href="cMhs/showAddForm"><i class="fa fa-plus"></i>ADD</a>
		</div>

		<?= $this->session->flashdata('mhs_flash'); ?>

		<nav class="navbar navbar-light bg-light">
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</nav>

		<div class="form-row">
			<table class="table table-striped text-center ">
				<thead class="thead-dark">
					<tr>
						<th scope="col">NO</th>
						<th scope="col">NAME</th>
						<th scope="col">NIM</th>
						<th scope="col">JURUSAN</th>
						<th style="width: 280px;" scope="col">PRODI</th>
						<th scope="col">KELAS</th>
						<th scope="col">OPSI</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($mahasiswa as $row) : ?>
						<tr>
							<td scope="row"><?= $no++ ?></td>
							<td><?= $row['name'] ?></td>
							<td><?= $row['nim'] ?></td>
							<td><?= $row['jurusan'] ?></td>
							<td><?= $row['prodi'] ?></td>
							<td><?= $row['kelas'] ?></td>
							<td>

								<a title="DETAIL" class="btn btn-warning btn-sm" href="cMhs/showDetail?rowID=<?= $row['id'] ?>">
									<i class="far fa-eye"></i>
								</a>
								<a title="EDIT" class="btn btn-success btn-sm" href="cMhs/showEditForm?rowID=<?= $row['id'] ?>">
									<i class="far fa-edit"></i>
								</a>
								<a title="DELETE" onclick="return confirm('Anda yakin mau menghapus data ini ?')" class="btn btn-danger btn-sm" href="cMhs/deleteItem?rowID=<?= $row['id'] ?>">
									<i class="far fa-trash-alt"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>

				</tbody>
			</table>
		</div>

	</div>

	<script>
		$(document).ready(function() {
			// ALERT - ANIMATION
			$('.mhs_alert').fadeTo(100, 500).slideUp(500, function() {
				$('.mhs_alert').slideUp(500);
			});
		});
	</script>