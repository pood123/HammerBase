<?php
echo <<<_HTML
<html>
    <head>
        <title>Фотогаллерея</title>   
    </head>
    <body>
        <form method="post" action="./Controller/ImageController.php" enctype="multipart/form-data">
           <table>
               <tr><td> Выберите файл: </td><td><input type="file" name="userImage" size="10"></td></tr>
               <tr><td><input type="submit" value="Залить" name="addImage"></td></tr>
           </table>
        </form>
    </body>
</html>
_HTML;



