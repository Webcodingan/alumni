<!DOCTYPE html>
<html>
<head>
 <title>Laporan Data Donasi</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: Trebuchet MS;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;
text-align: center;
 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <br>
 <h2 style='text-align: center;'>Laporan Data Donasi </h2>
 <hr>
 <table>
    <br>
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Email</th>
 <th>No Telepone</th>
 </tr>
 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","pendaftaran");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select * from donasi");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id'] ?></td>
 <td><?php echo $d['nama']; ?></td>
 <td><?php echo $d['email']; ?></td>
 <td><?php echo $d['no_telepone']; ?></td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>