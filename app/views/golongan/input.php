<h2>Input Golongan Darah</h2>

<form action="<?php echo URL; ?>/golongan/simpan" method="post">
    <table>
    <tr>
            <td>Id Pendonor</td>
            <td><input type="text" name="gol_id"></td>
        </tr>
        <tr>
            <td>Kode Golongan</td>
            <td><input type="text" name="gol_kode"></td>
        </tr>
        <tr>
            <td>Golongan Darah</td>
            <td><input type="text" name="gol_nama"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>