<!DOCTYPE html>
<html>
    <head>
        <title>Menú desplegable</title>
        <style>
            /* Estilos para el menú desplegable */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }
        </style>
    </head>
    <body>
        <h2>Menú desplegable</h2>

        <div class="dropdown">
            <button class="dropbtn">Menú</button>
            <div class="dropdown-content">
                <a href="#">Elemento 1</a>
                <a href="#">Elemento 2</a>
                <a href="#">Elemento 3</a>
            </div>
        </div>

        <script>
            // Agrega interactividad al menú desplegable
            document.querySelector(".dropdown").addEventListener("click", function() {
                this.querySelector(".dropdown-content").classList.toggle("show");
            });
        </script>
    </body>
</html>