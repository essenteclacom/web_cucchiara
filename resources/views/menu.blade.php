<!DOCTYPE html>
<html>
<head>
    <title>Menú desplegable</title>
    <style>
        /* Estilos CSS para el menú */
        
        /* Estilo básico del menú */
        .menu ul {
            list-style: none;
            padding: 0;
        }
        
        .menu li {
            margin-bottom: 5px;
        }
        
        .menu a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 10px;
            background-color: #eee;
            transition: background-color 0.3s;
        }
        
        /* Estilo de los submenús ocultos */
        .menu ul ul {
            display: none;
            padding-left: 20px;
            max-height: 0; /* Inicialmente, ocultamos el contenido más allá del límite */
            overflow: auto;
            transition: max-height 0.3s ease-in-out;
            position: relative; /* Agregamos posición relativa para las flechas */
        }
        
        /* Mostrar submenús al pasar el mouse sobre el elemento principal */
        .menu li:hover ul {
            display: block;
            max-height: 200px; /* Ajusta esta altura según tus necesidades */
        }
        
        /* Estilo de las flechas de desplazamiento */
        .menu ul ul::before,
        .menu ul ul::after {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            transition: border-color 0.3s ease-in-out;
        }
        
        .menu ul ul::before {
            top: 5px; /* Ajusta la posición vertical de la flecha de arriba */
            left: 50%;
            margin-left: -5px;
            border-width: 6px 6px 0 6px;
            border-color: transparent transparent transparent transparent;
        }
        
        .menu ul ul::after {
            bottom: 5px; /* Ajusta la posición vertical de la flecha de abajo */
            left: 50%;
            margin-left: -5px;
            border-width: 0 6px 6px 6px;
            border-color: transparent transparent transparent transparent;
        }
        
        /* Cambia el color de las flechas al pasar el mouse sobre el submenú */
        .menu li:hover ul::before,
        .menu li:hover ul::after {
            border-color: #333; /* Cambia el color de las flechas al pasar el mouse */
        }
    </style>
    <script>
        // JavaScript para gestionar las flechas de desplazamiento en los submenús
        const submenus = document.querySelectorAll('.menu ul ul');
        
        submenus.forEach((submenu) => {
            submenu.addEventListener('scroll', (e) => {
                const scrollTop = e.target.scrollTop;
                const maxScrollTop = e.target.scrollHeight - e.target.clientHeight;
        
                // Muestra u oculta las flechas de desplazamiento según sea necesario
                submenu.style.setProperty('--scroll-top', scrollTop);
                submenu.style.setProperty('--max-scroll-top', maxScrollTop);
            });
        });
    </script>
</head>
<body>
    <!-- Estructura del menú -->
    <nav class="menu">
        <ul>
            <li>
                <a href="#">Coyuntura Argentina</a>
                <ul class="submenu">
                    <li><a href="#">Charlas y Presentaciones</a></li>
                    <li><a href="#">Macro Local</a></li>
                    <li><a href="#">Bonos Soberanos</a></li>
                    <li><a href="#">Instrumentos en Pesos</a></li>
                    <li><a href="#">Bonos Provinciales</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Coyuntura Global</a>
                <ul class="submenu">
                    <li><a href="#">Charlas y Presentaciones</a></li>
                    <li><a href="#">Macro Global</a></li>
                    <li><a href="#">Renta Variable Global</a></li>
                    <li><a href="#">Renta Fija Global</a></li>
                    <li><a href="#">Commodities</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Bonos Corporativos</a>
                <ul class="submenu">
                    <li><a href="#">Raghsa</a></li>
                    <li><a href="#">Pampa Energía</a></li>
                    <li><a href="#">Aeropuertos Argentina 2000</a></li>
                    <li><a href="#">Capex</a></li>
                    <li><a href="#">Transportadora de Gas del Sur</a></li>
                    <li><a href="#">Arcor</a></li>
                    <li><a href="#">Compañía General de Combustibles</a></li>
                    <li><a href="#">Telecom Argentina</a></li>
                    <li><a href="#">Genneia</a></li>
                    <li><a href="#">Aluar</a></li>
                    <li><a href="#">Pan American Energy</a></li>
                    <li><a href="#">Tecpetrol</a></li>
                    <li><a href="#">MSU Energy</a></li>
                    <li><a href="#">YPF</a></li>
                    <li><a href="#">Corporativos Argentinos</a></li>
                    <li><a href="#">Corporativos Extranjeros</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Renta Variable</a>
                <ul class="submenu">
                    <li><a href="#">Ternium Argentina</a></li>
                    <li><a href="#">Tenaris</a></li>
                    <li><a href="#">Pampa Energía</a></li>
                    <li><a href="#">Loma Negra</a></li>
                    <li><a href="#">Transportadora de Gas del Sur</a></li>
                    <li><a href="#">Aluar</a></li>
                    <li><a href="#">Bioceres</a></li>
                    <li><a href="#">Richmond</a></li>
                    <li><a href="#">YPF</a></li>
                    <li><a href="#">Bancos Locales</a></li>
                    <li><a href="#">Acciones Argentinas</a></li>
                    <li><a href="#">Acciones Extranjeras</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Fondos</a>
                <ul class="submenu">
                    <li><a href="#">Dolares Renta Fija</a></li>
                    <li><a href="#">Pesos Renta Fija</a></li>
                    <li><a href="#">Renta Mixta</a></li>
                    <li><a href="#">Liquidez</a></li>
                    <li><a href="#">Renta Fija USD</a></li>
                </ul>
            </li>
            <!-- Agrega más elementos principales si es necesario -->
        </ul>
    </nav>
</body>
</html>