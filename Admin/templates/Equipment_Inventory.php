<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/icons.php';
include '../home/ConnectionDB/equipment_inventory.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$Equipment_Inventory_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$Equipment_Inventory_css $Pcbs_location_css $Calendar_Events_css $FontAwesome_css $Style_css $Bootstrap_4_6_0_css $DataTables_css $jQuery_js";?>
    <title>Equipment Inventory</title>
</head>
<body>
    <div class="main-container">
        <?php //? HEADER?>
        <?php echo "$header";?>
        <?php //? SIDEBAR?>
        <?php echo "$sidebar";?>

        <?php //?Contenido?>
        <div class="content-container">
            <div class="title-container">
            <h1>Equipment Inventory</h1>
            </div>
            <div class="equipment-inventory-container">
            <?php//?Menú para ver o modificar inventario y la barra de busqueda?>
                <div class='search-container-equipment-inventory'>
                    <button class="btn btn-outline-primary" onclick='modalAdd()'>+ add</button>
                    <form action='' method='get'>
                        <button class='Search-button-equipment-inventory' id='Search-equipment-inventory-button' type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                        <input id='Search-input-equipment-inventory' class='Search-input-equipment-inventory' type='search' name='name' placeholder='Search name here...'>
                    </form>
                </div>
                <div class="inventory-container">
                    <div class="table-container">
                        <table class="table table-secondary table-hover">
                            <thead>
                            <tr>
                                <td >Name</td>
                                <td>Hostname</td>
                                <td>IP Adress</td>
                                <td>Classification</td>
                                <td>Location</td>
                                <td>Department</td>
                                <td>Assigned To</td>
                                <td>Trademark</td>
                                <td>Model</td>
                                <td>CPU</td>
                                <td>HDD Size</td>
                                <td>RAM Size</td>
                                <td>Service Tag</td>
                                <td>Serial Number</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                if (isset($_GET['name'])) {
                                    $name = $_GET['name'];
                                    search_EquipmentInventory($connection, $name);
                                } else {
                                    EquipmentInventory($connection);
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="FormEquipmentInventory" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" name="button" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="add-user">
                            <div class="form-row">
                                <div class="form-group col-md-12" >
                                    <label for="name-input">Name: </label> 
                                    <input type="text" id="name-input" class="form-control" name='name' placeholder="Type the name" required minlength="1" maxlength="20">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="hostname-input">Host Name: </label> 
                                    <input type="text" id="hostname-input" class="form-control" name='hostname' placeholder="Type the host name" required minlength="1" maxlength="20">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="ipAddress-input">Ip Address: </label> 
                                    <input type="text" id="ipAddress-input" class="form-control" name='ipAddress' placeholder="Type the ip Address" required minlength="1" maxlength="15">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="classification-input">Classification: </label> 
                                    <input type="text" id="classification-input" class="form-control" name='classification' placeholder="Type the classification" required minlength="1" maxlength="15">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="location-input">Location: </label> 
                                    <input type="text" id="location-input" class="form-control" name='location' placeholder="Type the location" required minlength="1" maxlength="10">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="department-input">Department: </label> 
                                    <input type="text" id="department-input" class="form-control" name='department' placeholder="Type the name" required minlength="1" maxlength="70">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="assignedTo-input">Assigned To: </label> 
                                    <input type="text" id="assignedTo-input" class="form-control" name='name' placeholder="Type the assigned to" required minlength="1" maxlength="50">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="trademark-input">Trademark: </label> 
                                    <input type="text" id="trademark-input" class="form-control" name='trademark' placeholder="Type the trademark" required minlength="1" maxlength="30">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="model-input">Model: </label> 
                                    <input type="text" id="model-input" class="form-control" name='model' placeholder="Type the model" required minlength="1" maxlength="30">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12" >
                                    <label for="cpu-input">CPU: </label> 
                                    <input type="text" id="cpu-input" class="form-control" name='cpu' placeholder="Type the cpu" required minlength="1" maxlength="50">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="hddSize-input">HDD Size: </label> 
                                    <input type="text" id="hddSize-input" class="form-control" name='hddSize' placeholder="Type the hdd size" required minlength="1" maxlength="15">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="ramSize-input">RAM Size: </label> 
                                    <input type="text" id="ramSize-input" class="form-control" name='ramSize' placeholder="Type the ram size" required minlength="1" maxlength="15">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="serviceTag-input">Service Tag: </label> 
                                    <input type="text" id="serviceTag-input" class="form-control" name='serviceTag' placeholder="Type the service tag" required minlength="1" maxlength="10">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="serialNumber-input">Serial Number: </label> 
                                    <input type="text" id="serialNumber-input" class="form-control" name='serialNumber' placeholder="Type the serial number" required minlength="1" maxlength="10">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="button-add" class="btn btn-success">Add</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$equipment_Inventory_Modal_js $SubMenu_js $Back_Button_js $FullCalendar_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
</body>
</html>