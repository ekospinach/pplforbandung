<?php $jenis = 'IzinUsahaPusatPerbelanjaan';?>
<?php $stats = 'admin';?>

@extends ('home.header')

@section ('content')
		<div class="col-xs-2">
			@include ('home.sidebar')
		</div>
			
		<div class="col-xs-9 col-offset-xs-1">
			<br><br><br><br><br><br>
			<h1> Izin Usaha Pusat Perbelanjaan</h1>
			@include ('izin.admin.listizin')
		</div>
	</div>
@endsection