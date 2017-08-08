<article>
    <?php foreach ($data['news'] as $news):?>
        <h2><?php echo $news['title'] ?></h2>
        <p><?php echo $news['news'] ?></p>>
    <?php endforeach; ?>
</article>
<aside>
    <table>
        <?php foreach ($data['images'] as $image):?>
            <tr><td></td><img src="./Images/<?php echo $image->ImageNAME?>"></td></tr>
        <?php endforeach; ?>
    </table>
</aside>