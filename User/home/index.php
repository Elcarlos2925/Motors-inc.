<?php
    include 'links.php';
    include 'scripts.php';

    //? inicializar viariables
    $header='';
    $footer='';
    $sidebar='';

    session_start();
    $nameUser = $_SESSION['username'];
    $role = $_SESSION['role'];

    //?Dar valor de html al header
    $header="
        <header class='header-container'>
            <!--?Header-->
            <div class='return-button'>
                <!--?Return Button-->
                <i id='back-button' class='fas fa-arrow-alt-circle-left fa-2x'></i>
            </div>
            <div class='user-container'>
                <!--?Contenedor de usuario-->
                <div class='Employee-name-role'>
                    <p for='' class='Employee-name' id=''>$nameUser</p><!--?Nombre de Empleado-->
                    <p for='' class='Employee-role' id=''>$role</p><!--?Rol de Empleado-->
                </div>
                <div class='user-photo'>
                    <i class='fas fa-user fa-3x'></i>
                </div>
            </div>
        </header>
    ";
    
    //?Dar valor de html al header
    $footer="
        <footer>
            <p id='rights'>Motors INC.© 2024 All rights reserved</p>
        </footer>
    ";

    $sidebar="
        <div class='sidebar'>
            <img id='logo' src='../static/assets/img/logo.jpeg' width=''>
            <div class='menu'>
                <div class='item'><a href='$Dashboard'><i class='fa-solid fa-gauge icon-item'></i>Dashboard</a></div>
                <div class='item'><a href='$Task_Assignment'><i class='fa-solid fa-list-check icon-item'></i>Task Assignment</a></div>
                <div class='item'><a href='$Pcbs_Location'><i class='fa-solid fa-microchip icon-item'></i>Pcbs's Location</a></div>
                <div class='item'><a href='$Calendar_Events'><i class='fa-solid fa-calendar-days icon-item'></i>Calendar & Events</a></div>
                <div class='item'><a class='sub-item' href='$Equipment_Inventory'><i class='fa-solid fa-table-list icon-item'></i>Equipment Inventory</a></div>
                <div class='item'><a class='sub-item' href='$Edit_User'><i class='fa-solid fa-user-pen icon-item'></i>Edit User</a></div>
                <!--?Submenu ICT-->
                <div class='item'>
                    <a href='$ICT' class='sub-menu-btn'><i class='fa-solid fa-gear icon-item'></i>ICT<i class='fas fa-angle-right dropdown rotate'></i></a>
                    <div class='sub-menu'>
                        <a class='sub-item' href='$Mantenaince'><i class='fa-solid fa-screwdriver-wrench icon-item'></i>Mantenaince</a>
                        <a class='sub-item' href='$Pass_Rate'><i class='fa-solid fa-chart-line icon-item'></i>Pass Rate</a>
                    </div>
                </div>
            </div>
            
            <div class='help-logout-container'>
                <div class='help-container'>
                    <div class='help'>
                        <a href='$Documentation'><i class='fa-solid fa-file icon-item'></i>Docs</a>
                    </div>
                </div>
                <div class='logout-container'>
                    <div class='logout'>
                        <a href='$Logout' ><i class='fa-solid fa-arrow-right-from-bracket'></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    ";
?>