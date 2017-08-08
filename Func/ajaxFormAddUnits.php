<?php
    $dsn = 'mysql:dbname=HammerBase;host=localhost';
    $dbh = new PDO($dsn, 'root', '321456');
    $sth = $dbh->prepare('SELECT units.unit_id, units.unit_name FROM units');
    $sth->execute();
    $units = $sth->fetchAll();
    $sth = $dbh->prepare('SELECT detachments.detach_id, detachments.detach_type FROM detachments');
    $sth->execute();
    $detachments = $sth->fetchAll();
?>



        <?php for ($i = 0; $i<=7; $i++): ?>
            <select name="unit<?php echo $i?>">
                <?php foreach ($units as $unit): ?>
                     <option value="<?php echo $unit['unit_id']?>"><?php echo $unit['unit_name']?></option>
                <?php endforeach; ?>
            </select>
        <?php endfor; ?>
        <br><select name="detachment3" id="select_det">
            <?php foreach ($detachments as $detachment): ?>
                <option value="<?php echo $detachment['detach_id']?>"><?php echo $detachment['detach_type']?></option>
            <?php endforeach; ?>
        </select>
        <input type="button" value="Добавить детачмент" onclick="addDetachment(this.id)" id="button">

