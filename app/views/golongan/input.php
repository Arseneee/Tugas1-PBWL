<h2>Input GOLONGAN</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
<input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>" required>
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="gol_kode" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="gol_nama" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>