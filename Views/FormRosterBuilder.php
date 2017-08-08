<?php
/*$dsn = 'mysql:dbname=HammerBase;host=localhost';
$dbh = new PDO($dsn, 'root', '321456');
$sth = $dbh->prepare('SELECT detach_rules.detach_id, detach_rules.detach_name FROM detach_rules');
$sth->execute();
$data = $sth->fetchAll();
*/?><!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./Src/Css/hammerbase.css">
</head>
<body>-->

    <form method="post" action="index.php">
        <div><input type="submit" value="Добавить ростер"></div>
        <input type="hidden" name="action" value="AddRoster">
        <input type="hidden" name="controller" value="Roster">
        <div id="rosterform" class="roster">
          <div id="detachment0" class="detachment">
            <div id="detachmenu" class="detachmenu">
                <label class="label">Детачмент 0: </label>
                <select name="detachment[0]" id="select_det">
                    <?php foreach ($data as $detachment): ?>
                        <option value="<?php echo $detachment['detach_id']?>"><?php echo $detachment['detach_name']?></option>
                    <?php endforeach; ?>
                </select>
                <input type="button" value="Добавить детачмент" onclick="addDetachment(this)" id="button0">
            </div>
          </div>
        </div>
    </form>
</body>



<script type='text/javascript'>

    var num = 0;
    var rosterform = document.getElementById("rosterform");
    var xmlhttp = getXmlHttp();

    function addDetachment(button) {
        num++;

        var currButton = button;
        // alert(currButton.id);
        var currDetachMenu = currButton.parentNode; //detachmenu
        var currDetachment = currButton.parentNode.parentNode; //detachment
        var currSelect = currDetachMenu.getElementsByTagName("select")[0];
        var detachSelected = currSelect.options[currSelect.selectedIndex];

        var newDetachment = document.createElement("div"); //new detachment
        newDetachment.name = "detachment["+num+"]";
        newDetachment.setAttribute("class", "detachment");

        currButton.parentNode.removeChild(currButton);
        currSelect.parentNode.removeChild(currSelect);

        var newLabel = document.createElement("label");
        newLabel.innerHTML = detachSelected.text;
        currDetachMenu.appendChild(newLabel);

        var newButton = document.createElement("input");
        newButton.type = "button";
        newButton.value = "удалить";
        newButton.setAttribute("onclick", "deleteDetachment(this)");
        currDetachMenu.appendChild(newButton);


        xmlhttp.onreadystatechange = function() {
            rosterform.appendChild(newDetachment);  //Добавление нового дива
            if (this.readyState == 4 && this.status == 200) {
                var response = this.responseText.split('||||');
                newDetachment.innerHTML += response[0];
                currDetachment.innerHTML += response[1];
            }
        };
        xmlhttp.open("POST", "./Func/ajaxFormAddDetach.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("detach_num="+num+"&detach_id="+detachSelected);
        return false;
    }

    function addUnits(id) {
        var detachDiv = document.getElementById(id);
        detachDiv = detachDiv.parentNode;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                detachDiv.innerHTML += this.responseText;
            }
        };
        xmlhttp.open("GET", "./Func/ajaxFormAddUnits.php");
        xmlhttp.send();
    }

    function deleteDetachment(button) {
        //var currDetachDiv = document.getElementById(id);
        num--;
        currDetachment = button.parentNode.parentNode; //detachment
        currDetachment.parentNode.removeChild(currDetachment);
       // rosterform.removeChild(div);
        renameAll();
        return false;
    }

    function renameAll() {
        var select = document.getElementsByTagName("select");
        for (var i=0; i < select.length; i++) {
            select[i].name = "detachment["+i+"]";
        }
        var detachDiv = document.getElementsByClassName("detachment");
        for (i=0; i < detachDiv.length; i++) {
            detachDiv[i].name = "detachment["+i+"]";
            var units = detachDiv[i].getElementById("units");
            units = units.getElementsByClassName("unitrole")
        }
        var label = document.getElementsByClassName("label");
        for (i=0; i < label.length; i++) {
            label[i].innerText = "Детачмент "+i+": ";
        }
    }

    function getXmlHttp() {
        var x = false;
        try {
            x = new XMLHttpRequest();
        }catch(e) {
            try {
                x = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(ex) {
                try {
                    req = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e1) {
                    x = false;
                }
            }
        }
        return x;
    }

</script>



