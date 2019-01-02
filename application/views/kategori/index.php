<section class="content">
	<div class="row">
		<div class="col -xs-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Daftar Kategori</h3>
				</div>
				<!-- / box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-striped" id="example1">
							<thead>
								<tr>
									<th>No</th>
									<th>ID Kategori</th>
									<th>Nama Kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							<?php
							foreach ($show as $key =>$data){
							?>
							<tr>
								<td><?=$key+1;?></td>
								<td><?=$data->id_kategori;?></td>
								<td><?=$data->nama_kategori;?></td>
								 <td>
                                    <a href="#" class="btn btn-xs btn-primary">Detail</a>
                                    <a href="#" class="btn btn-xs btn-warning">Edit</a>
                                    <a href="<?=site_url('kategori/delete/'.$data->id_kategori);?>" class="btn btn-xs btn-danger">Hapus</a>
                              </td>
							</tr>

							<?php 
							} 
							?>
						</tbody>
						<tfoot>
							<tr>
									<th>No</th>
									<th>ID Kategori</th>
									<th>Nama Kategori</th>
									<th>Aksi</th>
								</tr>
						</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>