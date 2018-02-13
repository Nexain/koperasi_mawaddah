<?php
	echo"
		<h3 class='content-title'><img src='../img/edit.svg' class='menu-icon' style='width:20px;'>Pengajuan Pembelian (ID = $record[id_pengajuan])</h3>
		<div class='content content-aju'>
			<div class='aju-det bg-img'>
				<img src='../img/barang/$record[gambar]' class='aju-img'/>
			</div>
			<div class='aju-det'>
				<table>
					<tr><td>NIK</td><td>:</td><td>$record[nik]</td></tr>
					<tr><td>Tanggal Pengajuan</td><td>:</td><td>$tgl</td></tr>
					<tr><td>Nama Pengaju</td><td>:</td><td>$record[nama_anggota]</td></tr>
					<tr><td>Alamat</td><td>:</td><td>$record[alamat]</td></tr>
					<tr><td>Pekerjaan</td><td>:</td><td>$record[pekerjaan]</td></tr>
					<tr class='batas'><td>Gaji/bulan</td><td>:</td><td>Rp$gaji</td></tr>
					<tr><td>Nama Barang</td><td>:</td><td>$record[nama]</td></tr>
					<tr><td>Kategori</td><td>:</td><td>$record[kategori_barang]</td></tr>
					<tr><td>Harga</td><td>:</td><td>Rp$money</td></tr>
					<tr><td>Banyak Angsuran</td><td>:</td><td>$record[jml_angsur] kali</td></tr>
				</table>
			</div>
			<div class='aju-det'>
				Spesifikasi Barang :
				<p>$record[spesifikasi]</p>
			</div>
			<div class='clear'></div>
			<div class='aju-det-2'>
				Peruntukan Barang :
				<p>$record[peruntukan]</p>
			</div>
			<div class='clear'></div>
			<a href='../proses/accPengajuan/$record[id_pengajuan]'>
			<button class='dash-button-green' style='width:48%;float:left;cursor:pointer;margin-right:20px;'>
				Terima</button>
			</a>
			<a href='../proses/decPengajuan/$record[id_pengajuan]'>
			<button class='dash-button-red' style='width:48%;float:left;cursor:pointer;'>Tolak</button>
			<div class='clear'></div>
			</a>
		</div>";
?>