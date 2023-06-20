<h2>Input Kategori</h2>

<form action="<?php echo URL; ?>/kategori/simpan" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="pel_id_gol"></td>
        </tr>
        <tr>
            <td>Nama Pendonor</td>
            <td><input type="text" name="pel_no"></td>
        </tr>
        <tr>
            <td>Umur Pendonor</td>
            <td><input type="text" name="pel_nama"></td>
        </tr>
        <tr>
            <td>Alamat Pendonor</td>
            <td><textarea name="pel_alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>No hp Pendonor</td>
            <td><input type="text" name="pel_hp"></td>
        </tr>
        <tr>
            <td>No ktp Pendonor</td>
            <td><input type="text" name="pel_ktp"></td>
        </tr>
        <tr>
            <td>Tekanan Darah</td>
            <td><input type="text" name="pel_seri"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>