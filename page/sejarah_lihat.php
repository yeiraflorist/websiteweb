<?php
include('koneksi.php');
$sql   = 'select * from tbl_sejarah';
$query = mysqli_query($koneksi,$sql);
?>
<center>
    <br><hr><h2>DATA SEJARAH</h2><hr>
</center>
<tabel class="table" width="807" border="1" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td width="10" height="29" align="center" valign="middle" bgcolor="red">JUDUL</td>
        <td width="100" align="center" valign="middle" bgcolor="red">ISI</td>
        <td width="30" align="center" valign="middle" bgcolor="red">AKSI</td>
<?php
    while($data = mysqli_fetch_array($query)) {
?>
    <tr>
        <td p allign="center" bgcolor="#FFFFFF"><?php echo $data['judul']; ?></td>
        <td p allign="left" bgcolor="#FFFFFF"><?php echo $data['isi']; ?></td>
        <td p allign="center" bgcolor="#FFFFFF"><a href="index.php?page=sejarah_edit&id=<?php echo $data['id'];?>">EDIT</a></td>
    </tr>
<?php>
}
?>
</table>
</html>