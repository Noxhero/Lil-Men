<header>
    <nav class="navbar is-fixed-top bg-lil-black bg-opacity-90 backdrop-blur-md shadow-lg" role="navigation" aria-label="main navigation">
        <div class="container mx-auto px-4">
            <div class="navbar-brand">
                <a class="navbar-item py-4" href="index.php">
                    <span class="logo-text text-3xl font-extrabold text-lil-pink drop-shadow-lg hover:scale-105 transition-transform duration-300" style="text-shadow: 2px 2px #FFDD00;">LIL-MEN</span>
                </a>
                <a role="button" class="navbar-burger py-4" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarMenu" class="navbar-menu bg-lil-black bg-opacity-95">
                <div class="navbar-end">
                    <a class="navbar-item nav-link text-white font-semibold hover:text-lil-pink transition-colors duration-300" href="index.php">
                        ACCUEIL
                    </a>
                    <a class="navbar-item nav-link text-white font-semibold hover:text-lil-pink transition-colors duration-300" href="#">
                        MANGA
                    </a>
                    <a class="navbar-item nav-link text-white font-semibold hover:text-lil-pink transition-colors duration-300" href="#">
                        PERSONNAGES
                    </a>
                    <a class="navbar-item nav-link text-white font-semibold hover:text-lil-pink transition-colors duration-300" href="#">
                        AUTEUR
                    </a>
                    <a class="navbar-item nav-link text-white font-semibold hover:text-lil-pink transition-colors duration-300" href="#">
                        ACTUALITÉS
                    </a>
                    <div class="navbar-item">
                        <a class="button is-lil-pink text-white font-bold py-2 px-6 rounded-full hover:bg-opacity-80 hover:scale-105 transition-all duration-300">
                            <strong>LIRE EN LIGNE</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Burger menu functionality
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
            if ($navbarBurgers.length > 0) {
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');
                    });
                });
            }

            // Scroll animation for navbar
            window.addEventListener('scroll', () => {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });

            // Hover animation for nav links
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('mouseenter', () => {
                    link.classList.add('magictime', 'swashIn');
                });
            });
        });
    </script>
</header>