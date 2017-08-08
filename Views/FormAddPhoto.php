<form method="post" action="index.php" enctype="multipart/form-data">
    <table>
        <tr><td> Выберите файл: </td><td><input type="file" name="uploadImage" size="10"></td></tr>
    </table>
    <input type="hidden" name="controller" value="Image">
    <input type="hidden" name="action" value="AddImage">
    <input type="submit" value="Залить">
</form>



