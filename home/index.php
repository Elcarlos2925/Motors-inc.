<?php
    //? inicializar viariables
    $header='';
    $footer='';
    $sidebar='';

    //?Dar valor de html al header
    $header="
        <header class='header-container'>
            <!--?Header-->
            <div class='return-button'>
                <!--?Return Button-->
                <i id='' class='fas fa-arrow-alt-circle-left fa-2x'></i>
            </div>
            <div class='search-container'>
                <!--?Formulario Buscar-->
                <form action='/buscar' method='get'>
                    <button class='Search-button' type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                    <input id='Search-input' class='Search-input' type='search' name='Search' placeholder='Search here...'>
                </form>
            </div>
            <div class='message-notifications-container'>
                <!--?Contenedores de mensajes y notificaciones-->
                <div class='message-container'>
                    <!--?Contenedor de mensajes-->
                    <i class='fas fa-envelope fa-lg'></i>
                </div>
                <div class='notification-container'>
                    <!--?Contenedor de notificaciones-->
                    <i class='fas fa-bell fa-lg'></i>
                </div>
            </div>
            <div class='user-container'>
                <!--?Contenedor de usuario-->
                <div class='Employee-name-role'>
                    <label for='' class='Employee-name' id=''>Employee Name</label><!--?Nombre de Empleado-->
                    <label for='' class='Employee-role' id=''>Employee Role</label><!--?Rol de Empleado-->
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
    
    //?Dar valor de html al header
    $sidebar="
        <nav class='navbar'>
            <img id='logo' src='../static/assets/img/logo.jpeg' width=''>
            <ul>
                <li><a href=''><i class='fa-solid fa-gauge'></i>Dashboard</a></li>
                <li><a href=''><i class='fa-solid fa-list-check'></i>Task Assignment</a></li>
                <li><a href=''><i class='fa-solid fa-box-archive'></i>Storage</a></li>
                <li><a href=''><i class='fa-solid fa-microchip'></i>Pcbs's Location</a></li>
                <li><a href=''><i class='fa-solid fa-calendar-days'></i>Calendar & Events</a></li>
                <li><a href=''><i class='fa-solid fa-magnifying-glass'></i>Know Issues</a></li>
                <li><a href=''><i class='fa-solid fa-gear'></i>ICT</a></li>
                <li><a href=''><i class='fa-solid fa-display'></i>SPI & AOI</a></li>
                <li><a href=''><i class='fa-solid fa-gauge'></i>Departament</a></li>
                <li><a href=''><i class='fa-solid fa-gauge'></i>Managment</a></li>
                <li><a href=''><i class='fa-solid fa-code'></i>iFrame</a></li>
                <li><a href=''><i class='fa-solid fa-file'></i>Documentation</a></li>
            </ul>
            <div class='help-logout-container'>
                <div class='help-container'>
                    <div class='help'>
                        <a href=''><i class='fa-solid fa-question'></i>Help</a>
                    </div>
                </div>
                <div class='logout-container'>
                    <div class='logout'>
                        <a href=''><i class='fa-solid fa-arrow-right-from-bracket'></i>Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    ";
?>