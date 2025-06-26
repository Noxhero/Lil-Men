<?php
/**
 * Page d'accueil du site Lil-Men
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lil-Men Manga - Accueil</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    
    <!-- AOS CSS pour les animations au scroll -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <!-- Magic CSS pour les effets visuels -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magic/1.1.0/magic.min.css">
    
    <!-- Animate.css pour des animations supplémentaires -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Nos styles personnalisés -->
    <link rel="stylesheet" href="includes/css/index.css">
    <link rel="stylesheet" href="includes/css/header.css">
    <link rel="stylesheet" href="includes/css/footer.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'lil-yellow': '#FFDD00',
                        'lil-pink': '#FF3E96',
                        'lil-black': '#111111',
                        'lil-gradient': 'linear-gradient(135deg, #FFDD00, #FF3E96)'
                    },
                    backgroundImage: {
                        'hero-pattern': "url('https://via.placeholder.com/1920x1080')"
                    },
                    fontFamily: {
                        'manga': ['"Montserrat"', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="has-navbar-fixed-top bg-lil-black text-white font-manga overflow-x-hidden">
    <?php include('includes/header.php'); ?>

    <main>
        <!-- Hero Section -->
        <section class="hero relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1920x1080');">
            <div class="absolute inset-0 bg-lil-black opacity-70 z-0"></div>
            <div class="container mx-auto px-6 lg:px-12 relative z-10">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                    <div class="lg:w-1/2 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1200">
                        <h1 class="text-5xl sm:text-6xl lg:text-8xl font-extrabold text-lil-yellow animate__animated animate__zoomIn" style="text-shadow: 4px 4px #FF3E96;">
                            LIL-MEN
                        </h1>
                        <p class="text-lg sm:text-xl lg:text-2xl mt-6 text-gray-200 animate__animated animate__fadeInUp animate__delay-1s">
                            Découvrez un univers manga révolutionnaire plein d'action et d'émotion !
                        </p>
                        <div class="mt-8 flex flex-col sm:flex-row justify-center lg:justify-start gap-6 animate__animated animate__fadeInUp animate__delay-2s">
                            <button class="button is-lil-pink text-white font-bold py-3 px-8 rounded-full hover:bg-lil-yellow hover:text-lil-black transition-all duration-300 transform hover:scale-110 magictime puffIn">
                                LIRE MAINTENANT
                            </button>
                            <button class="button is-outlined is-white text-white font-bold py-3 px-8 rounded-full hover:bg-lil-pink hover:text-white transition-all duration-300 transform hover:scale-110">
                                EN SAVOIR PLUS
                            </button>
                        </div>
                    </div>
                    <div class="lg:w-1/2 relative" data-aos="zoom-in" data-aos-duration="1500">
                        <div class="manga-cover bg-gradient-to-br from-lil-yellow to-lil-pink p-6 rounded-2xl shadow-2xl transform hover:rotate-3 hover:scale-105 transition-all duration-500">
                            <span class="absolute -top-6 -left-6 w-16 h-16 bg-lil-black text-lil-yellow text-3xl font-extrabold flex items-center justify-center rounded-full shadow-lg animate-pulse">3</span>
                            <img src="assets/images/71fUXPIyXSL._AC_UF1000,1000_QL80_.jpg" alt="Lil-Men Tome 3" class="w-full h-auto rounded-lg border-4 border-lil-black object-cover">
                            <h2 class="absolute -right-16 top-1/2 transform -translate-y-1/2 rotate-90 text-3xl font-bold text-lil-yellow" style="text-shadow: 2px 2px #FF3E96;">LIL-MEN</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Releases Section -->
        <section class="py-16 lg:py-24 bg-gradient-to-r from-lil-black to-gray-900 relative">
            <div class="container mx-auto px-6 lg:px-12">
                <h2 class="text-4xl lg:text-5xl font-bold text-center text-lil-pink mb-12 animate__animated animate__bounceIn" data-aos="fade-down" style="text-shadow: 3px 3px #FFDD00;">
                    DERNIÈRES SORTIES
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Volume 1 -->
                    <div class="manga-card bg-gray-800 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:-translate-y-4 transition-all duration-500" data-aos="flip-up" data-aos-delay="200">
                        <div class="relative">
                            <img src="assets/images/71pP5GeXaeL._AC_UF1000,1000_QL80_.jpg" alt="Lil-Men Volume 1" class="w-full h-72 object-cover transition-transform duration-500 hover:scale-110">
                            <span class="absolute top-4 left-4 w-12 h-12 bg-lil-yellow text-lil-black font-bold text-xl flex items-center justify-center rounded-full animate-bounce">1</span>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-semibold text-lil-yellow">Lil-Men Volume 1</h3>
                            <p class="text-gray-400 italic mt-2">Takuma Tokashiki</p>
                            <button class="button is-lil-pink text-white mt-4 py-2 px-6 rounded-full hover:bg-lil-yellow hover:text-lil-black transition-all duration-300 magictime swashIn">
                                VOIR DÉTAILS
                            </button>
                        </div>
                    </div>
                    <!-- Volume 2 -->
                    <div class="manga-card bg-gray-800 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:-translate-y-4 transition-all duration-500" data-aos="flip-up" data-aos-delay="400">
                        <div class="relative">
                            <img src="assets/images/Lili-Men_T02_-_Ki-oon_medium.webp" alt="Lil-Men Volume 2" class="w-full h-72 object-cover transition-transform duration-500 hover:scale-110">
                            <span class="absolute top-4 left-4 w-12 h-12 bg-lil-yellow text-lil-black font-bold text-xl flex items-center justify-center rounded-full animate-bounce">2</span>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-semibold text-lil-yellow">Lil-Men Volume 2</h3>
                            <p class="text-gray-400 italic mt-2">Takuma Tokashiki</p>
                            <button class="button is-lil-pink text-white mt-4 py-2 px-6 rounded-full hover:bg-lil-yellow hover:text-lil-black transition-all duration-300 magictime swashIn">
                                VOIR DÉTAILS
                            </button>
                        </div>
                    </div>
                    <!-- Volume 3 -->
                    <div class="manga-card bg-gray-800 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:-translate-y-4 transition-all duration-500" data-aos="flip-up" data-aos-delay="600">
                        <div class="relative">
                            <img src="assets/images/71fUXPIyXSL._AC_UF1000,1000_QL80_.jpg" alt="Lil-Men Volume 3" class="w-full h-72 object-cover transition-transform duration-500 hover:scale-110">
                            <span class="absolute top-4 left-4 w-12 h-12 bg-lil-yellow text-lil-black font-bold text-xl flex items-center justify-center rounded-full animate-bounce">3</span>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-semibold text-lil-yellow">Lil-Men Volume 3</h3>
                            <p class="text-gray-400 italic mt-2">Takuma Tokashiki</p>
                            <button class="button is-lil-pink text-white mt-4 py-2 px-6 rounded-full hover:bg-lil-yellow hover:text-lil-black transition-all duration-300 magictime swashIn">
                                VOIR DÉTAILS
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-lil-pink to-transparent opacity-20"></div>
        </section>

        <!-- About Section -->
        <section class="py-16 lg:py-24 bg-gray-900 relative">
            <div class="container mx-auto px-6 lg:px-12">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-1/2 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1200">
                        <h2 class="text-4xl lg:text-5xl font-bold text-lil-pink mb-6 animate__animated animate__pulse" style="text-shadow: 3px 3px #FFDD00;">
                            À PROPOS DE LIL-MEN
                        </h2>
                        <p class="text-lg text-gray-300 mb-4 animate__animated animate__fadeInLeft">
                            Lil-Men est une œuvre captivante qui suit des héros extraordinaires dans un monde où la bravoure est mise à l'épreuve. Créé par Takuma Tokashiki, ce manga mêle action intense et émotions profondes.
                        </p>
                        <p class="text-lg text-gray-300 mb-6 animate__animated animate__fadeInRight">
                            Avec des visuels époustouflants et des personnages mémorables, Lil-Men redéfinit les codes du manga moderne.
                        </p>
                        <button class="button is-outlined is-lil-yellow text-lil-yellow font-bold py-2 px-8 rounded-full hover:bg-lil-yellow hover:text-lil-black transition-all duration-300 magictime vanishIn">
                            LIRE L'HISTOIRE
                        </button>
                    </div>
                    <div class="lg:w-1/2" data-aos="fade-left" data-aos-duration="1200">
                        <img src="https://via.placeholder.com/500x600" alt="Personnage principal" class="w-full h-auto rounded-xl shadow-2xl transform hover:scale-105 transition-all duration-500">
                    </div>
                </div>
            </div>
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-lil-yellow opacity-10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-lil-pink opacity-10 rounded-full blur-3xl animate-pulse"></div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-16 lg:py-24 bg-gradient-to-br from-lil-black to-lil-pink relative">
            <div class="container mx-auto px-6 lg:px-12 text-center relative z-10">
                <h2 class="text-4xl lg:text-5xl font-bold text-lil-yellow mb-6 animate__animated animate__zoomIn" data-aos="fade-down" style="text-shadow: 3px 3px #FF3E96;">
                    RESTEZ CONNECTÉ
                </h2>
                <p class="text-lg text-gray-200 mb-8 max-w-lg mx-auto animate__animated animate__fadeInUp">
                    Inscrivez-vous pour recevoir les dernières mises à jour et ne manquez aucun chapitre !
                </p>
                <div class="max-w-md mx-auto newsletter-form" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="field has-addons">
                        <div class="control is-expanded">
                            <input class="input is-large bg-gray-800 text-white placeholder-gray-400 border-none rounded-l-full focus:bg-gray-700 transition-all duration-300" type="email" placeholder="Votre email">
                        </div>
                        <div class="control">
                            <button class="button is-lil-yellow is-large text-lil-black font-bold rounded-r-full hover:bg-lil-pink hover:text-white transition-all duration-300 transform hover:scale-105 magictime swashIn">
                                S'ABONNER
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 bg-lil-black opacity-30"></div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="includes/js/animation.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true
        });
    </script>
    
</body>
</html>