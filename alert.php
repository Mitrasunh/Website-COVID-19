<?php 
	if (@$_GET['code']=='1') { ?>
		<div class="alert alert-success">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Berhasil!</strong> Data User berhasil di TAMBAH.
		</div>
		<?php
		}
	if (@$_GET['code']=='2') { ?>
	  	<div class="alert alert-success">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Berhasil!</strong> Data User berhasil di EDIT.
		</div>
		<?php
		}
	if (@$_GET['code']=='3') { ?>
	  	<div class="alert alert-success">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Berhasil!</strong> Data User berhasil di HAPUS.
		</div>
		<?php
		}
	if (@$_GET['code']=='4') { ?>
		<div class="alert alert-warning">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Error!</strong> Harap Lengkapi Semua Isian Data Covid-19
	  	</div>
		<?php
		}

?>
