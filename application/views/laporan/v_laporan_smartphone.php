<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
<style>
body {font-family: calibri;
	font-size: 0.7em;
}

.hr { 
    display: block;
    margin-top: 2em;
    margin-bottom: 0.5em;
    margin-left: AUTO;
    margin-right: auto;
    border-style: inset;
    border-width: 20px;
	border: 1px;
    height: 1.5px;
    color: black;
}

aside div.aside-title { width: 40%;  border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
aside div.aside-title {  border-radius: 0.25em; border-style: solid; background: #EEE; border-color: #BBB; }

table { border-collapse: collapse; border-spacing: 2px; }
thead, th { text-align:center; border-radius: 0.8em; border-style: solid; border:1px;  border-collapse: collapse; border-spacing: 2px; }
tbody, td { border-radius: 0.8m; border-style: solid; border:1px;  border-collapse: collapse; border-spacing: 2px; }

p {	margin: 0pt; }
table.items {
	border: 1px;
	border-collapse: collapse;
}

table thead tbody th td { background-color: #EEEEEE;
	text-align: center;
	border: 1px solid #bbbbbb;
	border-collapse: collapse;
}
.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0mm solid #bbbbbb;
	border: 0mm none #bbbbbb;
	border-top: 0mm solid #bbbbbb;
	border-right: 0mm solid #bbbbbb;
}
.items td.totals {
	border-radius: 13px;
	text-align: right;
	border: 1px solid #bbbbbb;
}
.items td.cost {
	text-align: right;
}
</style>
</head>
<body>
	<h5 style="text-align: center; font-size:13px; font-weight:bold">Laporan Smartphone</h5>
	<h5 style="text-align: center; font-size:13px; font-weight:bold"><?php $date=date('d F Y'); echo $date; ?></h5>
	<table class='items' width='50%' style="margin-left:auto;margin-right:auto" border="1">
		<thead>
		  <tr style="background-color: #FFA500; text-align: center">
            <th>No</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
		  </tr>
    	</thead>

    	<tbody>
       	<?php $no=1;
       	foreach  ($stok_smartphone->result() as $key) { ?>            
        <tr>
        	<td><?php echo $no++; ?></td>
		    <td><?php echo $key->product_nama; ?></td>
		    <td><?php echo $key->product_category; ?></td>
		    <td style="text-align:right"><?php 
		    		$harga=number_format($key->product_harga); 
		    		echo "Rp ".$harga;
		    	?>
		    </td>
		    <td style="text-align:right"><?php 
		    		$stok=number_format($key->product_stok);
		    		echo $stok;
		    	?>
		    </td>
		</tr>
    	<?php } ?>
    	</tbody>
	</table>
</body>
</html>