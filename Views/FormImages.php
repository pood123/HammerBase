<?php
include_once 'FormHeader.php' ?>
<html>
    <body>
        <table>
            <tr><th>Название Фотографии</th><th>Фотография</th></tr>
            <?php foreach ($data as $image):?>
                   <tr><td><?php echo $image->ImageNAME?></td><td><img src="./Images/<?php echo $image->ImageNAME?>"></td></tr>
            <?php endforeach;?>
        </table>
    </body>
</html>