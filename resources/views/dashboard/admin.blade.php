@extends('voyager::master')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Dashboard</title>
<style id="applicationStylesheet" type="text/css">
	body {
		margin: 0;
		padding: 0;
	}
	:root {
		--web-view-ids: Dashboard_Admin;
	}
	#Dashboard_Admin * {
		margin: 0;
		padding: 0;
	}
	#Dashboard_Admin {
		position: absolute;
		box-sizing: border-box;
		background: #E5E5E5;
		width: 1920px;
		height: 1080px;
		background-color: rgba(255,223,51,0.702);
		overflow: hidden;
		margin: 0;
		padding: 0;
		opacity: 1;
		--web-view-name: Dashboard Admin;
		--web-view-id: Dashboard_Admin;
		--web-enable-deep-linking: true;
	}
	#merlin_142440675_385e5bd0_de37 {
		opacity: 1;
		fill: url(#merlin_142440675_385e5bd0_de37_A0_Rectangle_2_pattern);
		stroke: rgb(0, 0, 0);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.merlin_142440675_385e5bd0_de37 {
		position: absolute;
		overflow: visible;
		width: 693px;
		height: 860px;
		left: 60px;
		top: 160px;
	}
	#Tupoksi_Operator_Sekolah {
		opacity: 1;
		fill: url(#Tupoksi_Operator_Sekolah_A0_Rectangle_4_pattern);
		stroke: rgb(0, 0, 0);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Tupoksi_Operator_Sekolah {
		position: absolute;
		overflow: visible;
		width: 676px;
		height: 380px;
		left: 763px;
		top: 160px;
	}
	#free_vector_classroom {
		opacity: 1;
		fill: url(#free_vector_classroom_A0_Rectangle_6_pattern);
		stroke: rgb(0, 0, 0);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.free_vector_classroom {
		position: absolute;
		overflow: visible;
		width: 675px;
		height: 473px;
		left: 763px;
		top: 547px;
	}
	#Rectangle_15 {
		opacity: 0.6;
		fill: rgba(0,0,0,1);
		stroke: rgb(112, 112, 112);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_15 {
		position: absolute;
		overflow: visible;
		width: 693px;
		height: 150px;
		left: 60px;
		top: 160px;
	}
	#Rectangle_16 {
		opacity: 0.6;
		fill: rgba(0,0,0,1);
		stroke: rgb(112, 112, 112);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_16 {
		position: absolute;
		overflow: visible;
		width: 676px;
		height: 150px;
		left: 763px;
		top: 160px;
	}
	#Rectangle_17 {
		opacity: 0.6;
		fill: rgba(0,0,0,1);
		stroke: rgb(112, 112, 112);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_17 {
		position: absolute;
		overflow: visible;
		width: 676px;
		height: 150px;
		left: 763px;
		top: 547px;
	}
	#User {
		opacity: 1;
		filter: drop-shadow(0px 3px 6px rgba(255, 223, 51, 0.502));
		position: absolute;
		left: 94px;
		top: 193px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		overflow: visible;
		width: 69px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(255,255,255,1);
	}
	#Tugas {
		opacity: 1;
		filter: drop-shadow(0px 3px 6px rgba(255, 223, 51, 0.502));
		position: absolute;
		left: 808px;
		top: 193px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		overflow: visible;
		width: 95px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(255,255,255,1);
	}
	#Guide_____1__User____Buat__dan {
		opacity: 1;
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 1));
		position: absolute;
		left: 1525px;
		top: 193px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		overflow: visible;
		width: 371px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(255,255,255,1);
	}
	#Kelas {
		opacity: 1;
		filter: drop-shadow(0px 3px 6px rgba(255, 223, 51, 0.502));
		position: absolute;
		left: 808px;
		top: 569px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		overflow: visible;
		width: 84px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(255,255,255,1);
	}
</style>
</head>
<body>
<div id="Dashboard_Admin">
	<svg class="merlin_142440675_385e5bd0_de37">
		<pattern elementId="merlin_142440675_385e5bd0_de37_A0_Rectangle_2" id="merlin_142440675_385e5bd0_de37_A0_Rectangle_2_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="merlin_142440675_385e5bd0_de37_A0_Rectangle_2_pattern.png" xlink:href="merlin_142440675_385e5bd0_de37_A0_Rectangle_2_pattern.png"></image>
		</pattern>
		<rect id="merlin_142440675_385e5bd0_de37" rx="0" ry="0" x="0" y="0" width="693" height="860">
		</rect>
	</svg>
	<svg class="Tupoksi_Operator_Sekolah">
		<pattern elementId="Tupoksi_Operator_Sekolah_A0_Rectangle_4" id="Tupoksi_Operator_Sekolah_A0_Rectangle_4_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="Tupoksi_Operator_Sekolah_A0_Rectangle_4_pattern.png" xlink:href="Tupoksi_Operator_Sekolah_A0_Rectangle_4_pattern.png"></image>
		</pattern>
		<rect id="Tupoksi_Operator_Sekolah" rx="0" ry="0" x="0" y="0" width="676" height="380">
		</rect>
	</svg>
	<svg class="free_vector_classroom">
		<pattern elementId="free_vector_classroom_A0_Rectangle_6" id="free_vector_classroom_A0_Rectangle_6_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="free_vector_classroom_A0_Rectangle_6_pattern.png" xlink:href="free_vector_classroom_A0_Rectangle_6_pattern.png"></image>
		</pattern>
		<rect id="free_vector_classroom" rx="0" ry="0" x="0" y="0" width="675" height="473">
		</rect>
	</svg>
	<svg class="Rectangle_15">
		<rect id="Rectangle_15" rx="0" ry="0" x="0" y="0" width="693" height="150">
		</rect>
	</svg>
	<svg class="Rectangle_16">
		<rect id="Rectangle_16" rx="0" ry="0" x="0" y="0" width="676" height="150">
		</rect>
	</svg>
	<svg class="Rectangle_17">
		<rect id="Rectangle_17" rx="0" ry="0" x="0" y="0" width="676" height="150">
		</rect>
	</svg>
	<div id="User">
		<span>User</span>
	</div>
	<div id="Tugas">
		<span>Tugas</span>
	</div>
	<div id="Guide_____1__User____Buat__dan">
		<span>Guide : <br/><br/>1. User <br/>  Buat  dan edit akun <br/>  dosen dan mahasiswa.<br/>2. Kelas<br/>   Buat dan edit jumlah<br/>   dan isi kelas.<br/>3. Tugas<br/>    Publish tugas <br/>    mahasiswa. <br/>       <br/></span>
	</div>
	<div id="Kelas">
		<span>Kelas</span>
	</div>
</div>
</body>
</html>
@stop


