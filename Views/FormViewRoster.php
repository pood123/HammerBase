<ul>
<?php foreach ($data->detachments as $detachment) :?>
    <li><h1><?php echo $detachment->detach_type?></h1>
        <ul>
        <?php foreach ($detachment->detach_units as $unit) :?>
            <li><?php echo $unit->unit_type.'   '.$unit->unit_name?></li>
        <?php endforeach;?>
        </ul></li>>
    <?php endforeach;?>
</ul>


