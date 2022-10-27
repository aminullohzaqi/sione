<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table
            {
                border-collapse: collapse;
                font-family: Arial;
            }
	</style>
</head>

<body>	
		<table style="margin-left: 200px">
			<tr>
                <td>
                    <center>
                    <img src="{{ URL::to('/') }}/static/logo-bmkg.png" width="65" height="80">
                    </center>
				</td>
            </tr>
			<tr>
				<td style="font-size: 14px">
				<center>
					<b>	LAPORAN HARIAN ALOPTAMA (SERVER) </b> <br>
					<b> PUSAT DATABASE </b> <br> 
				</center>
				</td>
			</tr>
		</table>

        <br>

		<table style="font-size: 10px; margin-left: 100px">
			<tr class="text2">
				<td>Tanggal</td>
				<td width="550"> &nbsp;&nbsp;&nbsp;: {{ $tanggal }}</td>
			</tr>
			<tr>
				<td>Jam</td>
				<td> &nbsp;&nbsp;&nbsp;: {{ $jam }} WIB</td>
			</tr>
		</table>

		<br>

        <table style="font-size: 10px; margin-left: 100px">
			<tr>
				<td width="610" style="font-size: 10px"><b>1. &nbsp;Server di Sistem Informasi Monitoring Server (SiONE)</b></td>
			</tr>
		</table>

			<table border="1" style="text-align:center; font-size: 10px; margin-left: 100px">
				<tr bgcolor="#666666">
					<td rowspan="2" width="80" center>No</td>
					<td rowspan="2" width="80">Nama Server</td>
					<td colspan="2" width="80">Kondisi Operasional</td>
					<td rowspan="2" width="80">Keterangan</td>
				</tr>
				<tr bgcolor="#666666">
					<td width="80">Power</td>
                    <td width="80">Health Summary</td>
				</tr>
                @foreach ($server_ilo as $server)
                    <tr>
                        <td width="80">1</td>
                        <td width="80">{{ $server[1] }}</td>
                        <td width="80">{{ $server[2] }}</td>
                        <td width="80">{{ $server[3] }}</td>
                        <td width="80"> </td>
                    </tr>
                @endforeach
                @foreach ($server_ipmi as $server)
                    <tr>
                        <td width="80">1</td>
                        <td width="80">{{ $server[1] }}</td>
                        <td width="80">{{ $server[2] }}</td>
                        <td width="80">{{ $server[3] }}</td>
                        <td width="80"> </td>
                    </tr>
                @endforeach
                @foreach ($server_xclarity as $server)
                    <tr>
                        <td width="80">1</td>
                        <td width="80">{{ $server[1] }}</td>
                        <td width="80">{{ $server[2] }}</td>
                        <td width="80">{{ $server[3] }}</td>
                        <td width="80"> </td>
                    </tr>
                @endforeach
			</table>

			<br>

		<table style="font-size: 10px; margin-left: 100px">
			<tr>
				<td width="610" style="font-size: 10px"><b>2. &nbsp;Storage</b></td>
			</tr>
		</table>

			<table border="1" style="text-align:center; font-size: 10px; margin-left: 100px">
				<tr bgcolor="#666666">
					<td width="80">No</td>
                    <td width="80">Nama Server</td>
                    <td width="80">Power</td>
                    <td width="80">Keterangan</td>
				</tr>
                @foreach ($storage_netapp as $server)
                    <tr>
                        <td width="80">1</td>
                        <td width="80">{{ $server[1] }}</td>
                        <td width="80">{{ $server[3] }}</td>
                        <td width="80"> </td>
                    </tr>   
                @endforeach
				<?php 
					$url = 'http://172.19.3.246:8080/cgi-bin/management/manaRequest.cgi?subfunc=sysinfo&sysHealth=1&sid=nfbfg650';

					$qnap = new SimpleXMLElement($url, null, true);
				?>
                    <tr>
                        <td width="80">1</td>
                        <td width="80">ES1686DC</td>
                        <td width="80"><?php 
							if ($qnap->func->ownContent->sysHealth->status == "good") {
								echo "Normal";
							}?>
						</td>
                        <td width="80"></td>
                    </tr>   
			</table>

			<br>

		<table style="font-size: 10px; margin-left: 100px">
			<tr>
				<td width="610" style="font-size: 10px"><b>3. &nbsp;Pusat Database Nasional</b></td>
			</tr>
		</table>

			<table border="1" style="text-align:center; font-size: 10px; margin-left: 100px">
				<tr bgcolor="#666666">
					<td width="80">No</td><td width="80">Nama Server</td><td width="80">Kondisi Operasional</td><td width="80">Keterangan</td>
				</tr>
				<tr>
					<td width="80">1</td><td width="80"> </td><td width="80"> </td><td width="80"> </td>
				</tr>
			</table>

		<br><br><br>

		<table style="font-size: 10px; margin-left: 210px">
			<tr>
				<td width="260">
					<center> Petugas Monitoring : </center>
				</td>
			</tr>
		</table>

		<br>

		<table style="font-size: 10px; margin-left: 210px">
			<tr>
				<td width="260">
					<center>
					<b>ttd.</b>
					</center>
				</td>
			</tr>
		</table>

		<br>

		<table style="font-size: 10px; margin-left: 210px">
			<tr bgcolor="#b7e1cd">
				<td width="260">
					<center>
					@foreach ($operator as $op)
                        <strong>{{ $op->nama }}</strong>
                    @endforeach
					</center>
				</td>
			</tr>
		</table>

		<br><br><br>
		<table style="font-size: 8px; margin-left: 210px">
			<tr>
				<td width="260">
					<center>
					Disusun oleh :
					</center>
				</td>
			</tr>
			<tr>
				<td width="260">
					<center>
					Sub Bidang Pemeliharaan Database Umum
					</center>
				</td>
			</tr>
		</table>
		<br><br><br><br><br><br><br><br><br><br><br>
		<table style="margin-left: 270px">
			<tr>
				<td style="font-size: 14px">
				<center>
					<font size="3"><b>DAFTAR LAMPIRAN</b></font><br>
				</center>
				</td>
			</tr>
		</table>
		<br>
        <table style="font-size: 10px; margin-left: 100px">
			<tr>
				<td width="600" style="font-size: 10px"> &nbsp;Lampiran 1. Dashboard SiOne </td>
			</tr>
		</table>
		<table style="margin-left: 100px">
			<tr>
                <td>
					<br>
                    <center>
                    <img src="{{ URL::to('/') }}/data_file/{{ $file_name }}" width="550" height="400">
                    </center>
				</td>
            </tr>
		</table>
		<br><br><br>
	<!--
		<table>
			<tr>
				<td width="600"> &nbsp;Lampiran 2. Storage Fujitsu </td>
			</tr>
		</table>
		<table>
			<tr>
                <td>
                    <center>
                    <img src=".jpg" width="595" height="400">
                    </center>
				</td>
            </tr>
		</table>
		<br><br><br>
		<table>
			<tr>
				<td width="600"> &nbsp;Lampiran 3. Storage QNAP </td>
			</tr>
		</table>
		<table>
			<tr>
                <td>
                    <center>
                    <img src=".jpg" width="595" height="400">
                    </center>
				</td>
            </tr>
		</table>
		<br><br><br>
		<table>
			<tr>
				<td width="600"> &nbsp;Lampiran 4. Storage NetApp </td>
			</tr>
		</table>
		<table>
			<tr>
                <td>
                    <center>
                    <img src=".jpg" width="595" height="400">
                    </center>
				</td>
            </tr>
		</table>
	-->
		<br><br><br>
</body>
</html>