<?php
    include '../home/index.php';
    include '../home/scripts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/assets/icons/house-door-fill.svg" type="image/svg+xml">
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Edit_User_css $Table_css";?>
    <title>Edit User</title>
</head>
<body>

    <?php //?Contenedor Principal?>
    <div class="main-container">

        <?php //? HEADER?>
        <?php echo "$header";?>
        <?php //? SIDEBAR?>
        <?php echo "$sidebar";?>

        <?php //? CONTENIDO?>
        <div class="content-container">
            <div class="title-container">
                <h1>Edit User</h1>
            </div>
            <?php //?Edit user?>
            <div class="edit-user-container">
                <div class="search-container">
                    <form action='/buscar' method='get' class="Search-User">
                       <button class='Search-button' id="Search-user-button" type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                       <input id='Search-input' class='Search-input' type='search' name='Search' placeholder='Search user here...'>
                    </form>
                </div>
                <div class="table-edit-user">
                    <table class="table table-secondary table-hover">
                        <thead>
                            <tr>
                                <td>Number</td>
                                <td>Username</td>
                                <td>Name</td>
                                <td>Subarea</td>
                                <td>Role</td>
                                <td>Phone</td>
                                <td>Options</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php//!Aqui va el cuerpo de la tabla?>
                            <tr>
                                <td>1</td>
                                <td>OdetteF</td>
                                <td>Odette Franco</td>
                                <td>Tics</td>
                                <td>Scrum Master</td>
                                <td>21211546</td>
                                <td>
                                    <button class="Edit-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/pen-to-square.svg" viewBox="0 0 512 512">
                                        <path fill="#3c6e71" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                        </svg>
                                    </button>
                                    <button class="Delete-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/trash-can.svg" viewBox="0 0 512 512">
                                            <path fill="#ff3131" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>KarlaT</td>
                                <td>Karla Trillo</td>
                                <td>Tics</td>
                                <td>Product Owner</td>
                                <td>21211560</td>
                                <td>
                                    <button class="Edit-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/pen-to-square.svg" viewBox="0 0 512 512">
                                        <path fill="#3c6e71" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                        </svg>
                                    </button>
                                    <button class="Delete-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/trash-can.svg" viewBox="0 0 512 512">
                                            <path fill="#ff3131" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CarlosL</td>
                                <td>Carlos Lozoya</td>
                                <td>Tics</td>
                                <td>Backend</td>
                                <td>21211548</td>
                                <td>
                                    <button class="Edit-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/pen-to-square.svg" viewBox="0 0 512 512">
                                        <path fill="#3c6e71" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                        </svg>
                                    </button>
                                    <button class="Delete-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/trash-can.svg" viewBox="0 0 512 512">
                                            <path fill="#ff3131" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>AlexisM</td>
                                <td>Alexis Martinez</td>
                                <td>Tics</td>
                                <td>Backend</td>
                                <td>21211550</td>
                                <td>
                                    <button class="Edit-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/pen-to-square.svg" viewBox="0 0 512 512">
                                        <path fill="#3c6e71" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                        </svg>
                                    </button>
                                    <button class="Delete-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/trash-can.svg" viewBox="0 0 512 512">
                                            <path fill="#ff3131" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>OmarM</td>
                                <td>Omar Mendez</td>
                                <td>Tics</td>
                                <td>Front End</td>
                                <td>21211554</td>
                                <td>
                                    <button class="Edit-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/pen-to-square.svg" viewBox="0 0 512 512">
                                        <path fill="#3c6e71" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                        </svg>
                                    </button>
                                    <button class="Delete-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/trash-can.svg" viewBox="0 0 512 512">
                                            <path fill="#ff3131" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>JulioM</td>
                                <td>Julio Martinez</td>
                                <td>Tics</td>
                                <td>Frontend</td>
                                <td>21211552</td>
                                <td>
                                    <button class="Edit-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/pen-to-square.svg" viewBox="0 0 512 512">
                                        <path fill="#3c6e71" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                        </svg>
                                    </button>
                                    <button class="Delete-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/trash-can.svg" viewBox="0 0 512 512">
                                            <path fill="#ff3131" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>ReneB</td>
                                <td>Rene Beltran</td>
                                <td>Tics</td>
                                <td>Frontend</td>
                                <td>21211544</td>
                                <td>
                                    <button class="Edit-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/pen-to-square.svg" viewBox="0 0 512 512">
                                        <path fill="#3c6e71" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                        </svg>
                                    </button>
                                    <button class="Delete-user-btn">
                                        <svg xmlns="../static/assets/fontawesome-free-6.5.1-web/svgs/regular/trash-can.svg" viewBox="0 0 512 512">
                                            <path fill="#ff3131" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$SubMenu_js";?>
</body>
</html>