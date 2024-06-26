<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logoPlay.png">
    <title>Play Wiki</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 104, 1, 0.8);
            padding: 20px 19px;
            box-sizing: border-box;
            transition: background-color 0.3s ease;
            z-index: 10000;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
            float: right;
        }

        nav a:hover {
            opacity: 0.8;
        }

        .sidebar {
            height: calc(100vh - 60px);
            width: 250px;
            position: fixed;
            top: 60px;
            left: 0;
            background-color: #ff6801;
            padding-top: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            z-index: 1000;
        }

        .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-bottom: 20px;
        }

        .sidebar li {
            margin-bottom: 10px;
            display: block;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: #ccc;
        }

        .search-bar {
            width: 95%;
            padding: 8px;
            border: none;
            border-radius: 20px;
            margin-bottom: 10px;
            box-sizing: border-box;
            align-self: center;
        }

        .search-bar:focus {
            outline: none;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                left: -100%;
                transition: left 0.3s ease;
            }

            .open {
                left: 0;
            }
        }
    </style>
</head>

<body>
    <nav>
        <a href="#">Login</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>

    <div class="sidebar">
        <input type="text" class="search-bar" placeholder="Pesquisar..." oninput="filterMenu()">
        <ul id="menu-items">
            <li><a href="#">Grupo 1</a>
                <ul class="sub-menu">
                    <li><a href="#">Subitem 1.1</a></li>
                    <li><a href="#">Subitem 1.2</a></li>
                    <li><a href="#">Subitem 1.3</a></li>
                </ul>
            </li>
            <li><a href="#">Grupo 2</a>
                <ul class="sub-menu">
                    <li><a href="#">Subitem 2.1</a></li>
                    <li><a href="#">Subitem 2.2</a></li>
                    <li><a href="#">Subitem 2.3</a></li>
                </ul>
            </li>
            <li><a href="#">Grupo 3</a>
                <ul class="sub-menu">
                    <li><a href="#">Subitem 3.1</a></li>
                    <li><a href="#">Subitem 3.2</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Main Content Area</h1>
        <p>This is where your main content will go.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id tincidunt mauris. Aliquam erat volutpat. Sed vehicula ipsum nec nunc vehicula, ut vehicula purus pharetra. Fusce rhoncus congue justo, vel feugiat purus tincidunt in.</p>
        <p>Integer nec diam luctus, euismod nulla nec, laoreet turpis. In hac habitasse platea dictumst. Duis vel feugiat libero, non sagittis magna.</p>
        <p>Quisque malesuada lacus eget ligula sollicitudin, vel gravida quam accumsan. Vivamus quis elit id tortor commodo iaculis. Sed euismod nisi vitae odio dictum ultricies.</p>
    </div>

    <script>
        function filterMenu() {
            var input = document.querySelector('.search-bar');
            var filter = input.value.toUpperCase();
            var ul = document.getElementById('menu-items');
            var li = ul.getElementsByTagName('li');

            for (var i = 0; i < li.length; i++) {
                var a = li[i].getElementsByTagName('a')[0];
                var subMenu = li[i].querySelector('.sub-menu');

                // Verifica se o texto do item ou de seus subitens corresponde ao filtro
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = 'block';
                } else {
                    li[i].style.display = 'none';
                }

                // Mostra subitens que correspondem ao filtro
                if (subMenu) {
                    var subItems = subMenu.getElementsByTagName('li');
                    var subItemsVisible = false;
                    for (var j = 0; j < subItems.length; j++) {
                        var subItem = subItems[j].getElementsByTagName('a')[0];
                        if (subItem.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            subItems[j].style.display = 'block';
                            subItemsVisible = true;
                        } else {
                            subItems[j].style.display = 'none';
                        }
                    }
                    // Mostra o submenu pai se algum subitem estiver visível
                    if (subItemsVisible) {
                        subMenu.style.display = 'block';
                    } else {
                        subMenu.style.display = 'none';
                    }
                }
            }
        }

        // Função para alternar visibilidade dos submenus ao clicar nos itens principais
        var menuItems = document.querySelectorAll('#menu-items > li > a');
        for (var i = 0; i < menuItems.length; i++) {
            menuItems[i].addEventListener('click', function(e) {
                e.preventDefault();
                var subMenu = this.nextElementSibling;
                if (subMenu) {
                    if (subMenu.style.display === 'block') {
                        subMenu.style.display = 'none';
                    } else {
                        subMenu.style.display = 'block';
                    }
                }
            });
        }
    </script>
</body>

</html>