 <?php
     include"koneksi.php";
if(isset($_POST['btn'])){
    $a = $_POST['nis'];
    $b = $_POST['nama'];
    $c = $_POST['kelas'];
     $qry = $conn->query("......");
if($qry == true){
     echo"<script>alert('Data Berhasil diinput....')</script>";
}else{
     echo"<script>alert('Data gagal diinput....')</script>";
    }      
}
?>
<form mothod="post">
    <label>NIS</label>
    <input type="text" name="nis">
    <label>Nama</label>
    <input type="text" name="nama">
    <label>Kelas</label>
    <input type="text" name="kelas">
    <button type="submit">Submit</button>
</form>

<table class="table">
<thead>
<tr>
<th scope="col">No</th>
<th scope="col">NIS</th>
<th scope="col">Nama</th>
<th scope="col">Kelas</th>
</tr>
</thead>
<tbody>
<?php
     $no = 1;
     $sqlResult = $conn->query("SELECT*FROM tb_siswa");
     foreach ($sqlResult as $data) {
?>
<tr>
<th scope="row">1</th>
<td><?=$data['nis']?></td>
<td><?=$data['nama']?></td>
<td><?=$data['kelas']?></td>
</tr>
<?php
        }
?>
</tbody>
</table>