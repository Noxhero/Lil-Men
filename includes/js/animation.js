document.addEventListener('DOMContentLoaded', function() {
    // Animation 3D pour la couverture
    const mangaCover = document.querySelector('.manga-cover');
    if (mangaCover) {
        document.addEventListener('mousemove', (e) => {
            const rect = mangaCover.getBoundingClientRect();
            const mouseX = e.clientX - rect.left - rect.width / 2;
            const mouseY = e.clientY - rect.top - rect.height / 2;
            const rotateX = (mouseY / rect.height) * 15;
            const rotateY = (mouseX / rect.width) * -15;
            mangaCover.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
        });
        document.addEventListener('mouseleave', () => {
            mangaCover.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
            mangaCover.style.transition = 'transform 0.5s ease';
        });
    }

    // Effet parallaxe amélioré
    const hero = document.querySelector('.manga-hero');
    if (hero) {
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;
            hero.style.backgroundPositionY = `${scrollPosition * 0.2}px`;
            hero.querySelector('.hero-body').style.transform = `translateY(${scrollPosition * 0.05}px)`;
        });
    }

    // Animation des cartes manga
    const mangaCards = document.querySelectorAll('.manga-card');
    mangaCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('magictime', 'puffIn');
            const img = card.querySelector('img');
            if (img) img.style.transform = 'scale(1.1)';
        });
        card.addEventListener('mouseleave', () => {
            card.classList.remove('magictime', 'puffIn');
            const img = card.querySelector('img');
            if (img) img.style.transform = 'scale(1)';
        });
    });

    // Animation titre lettre par lettre
    const heroTitle = document.querySelector('.manga-title');
    if (heroTitle) {
        const titleText = heroTitle.textContent;
        heroTitle.textContent = '';
        for (let i = 0; i < titleText.length; i++) {
            const letter = document.createElement('span');
            letter.textContent = titleText[i];
            letter.style.opacity = '0';
            letter.style.transform = 'translateY(30px)';
            letter.style.transition = `opacity 0.4s ease ${i * 0.08}s, transform 0.4s ease ${i * 0.08}s`;
            heroTitle.appendChild(letter);
            setTimeout(() => {
                letter.style.opacity = '1';
                letter.style.transform = 'translateY(0)';
            }, 100 + i * 80);
        }
    }

    // Animation défilement images
    const scrollAnimations = () => {
        const imgElements = document.querySelectorAll('.manga-card-image img, .manga-character-spotlight img');
        imgElements.forEach(img => {
            const imgPosition = img.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            if (imgPosition < screenPosition) {
                img.style.animation = 'fadeInUp 0.7s ease forwards';
            }
        });
    };
    window.addEventListener('scroll', scrollAnimations);
    scrollAnimations();

    // Animation boutons
    const buttons = document.querySelectorAll('.button');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.classList.add('animate__animated', 'animate__pulse');
        });
        button.addEventListener('mouseleave', () => {
            button.classList.remove('animate__animated', 'animate__pulse');
        });
    });

    // Effet sections
    const sections = document.querySelectorAll('section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('section-visible');
            }
        });
    }, { threshold: 0.2 });
    sections.forEach(section => {
        section.classList.add('section-animated');
        observer.observe(section);
    });

    // Animation volume
    const volumeNumbers = document.querySelectorAll('.volume-number');
    volumeNumbers.forEach(number => {
        card.addEventListener('mouseenter', () => {
            number.style.transform = 'scale(1.2) rotate(10deg)';
            number.style.transition = 'transform 0.3s ease';
        });
        card.addEventListener('mouseleave', () => {
            number.style.transform = 'scale(1) rotate(0deg)';
        });
    });

    // Surlignage titres
    const sectionTitles = document.querySelectorAll('.section .title');
    sectionTitles.forEach(title => {
        const highlight = document.createElement('span');
        highlight.classList.add('title-highlight');
        highlight.style.position = 'absolute';
        highlight.style.bottom = '0';
        highlight.style.left = '0';
        highlight.style.width = '0';
        highlight.style.height = '30%';
        highlight.style.background = 'var(--lil-gradient)';
        highlight.style.zIndex = '-1';
        highlight.style.transition = 'width 0.6s ease';
        title.style.position = 'relative';
        title.appendChild(highlight);
        const titleObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) highlight.style.width = '100%';
            });
        }, { threshold: 0.5 });
        titleObserver.observe(title);
    });

    // Animation texte
    const revealTexts = document.querySelectorAll('.content p');
    revealTexts.forEach(text => {
        text.style.opacity = '0';
        text.style.transform = 'translateY(20px)';
        text.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        const textObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    text.style.opacity = '1';
                    text.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.5 });
        textObserver.observe(text);
    });

    // Animation améliorée pour l'inscription à la newsletter
    const newsletterForm = document.querySelector('.newsletter-form');
    const subscribeButton = newsletterForm.querySelector('.button');
    const emailInput = document.querySelector('.input');

    // Débogage pour vérifier la sélection des éléments
    console.log('Newsletter Form:', newsletterForm);
    console.log('Subscribe Button:', subscribeButton);
    console.log('Email Input:', emailInput);

    if (newsletterForm && subscribeButton && emailInput) {
        subscribeButton.addEventListener('click', (e) => {
            e.preventDefault(); // Empêche le rechargement de la page
            console.log('Subscribe button clicked');
            const email = emailInput.value.trim();

            if (email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                console.log('Valid email:', email);
                // Création de la notification
                const notification = document.createElement('div');
                notification.className = 'fixed top-4 left-4 z-50 bg-gradient-to-r from-lil-black to-gray-900 p-6 rounded-2xl shadow-xl border border-lil-yellow flex items-center space-x-4 transform magictime tinLeftIn max-w-sm w-11/12 sm:max-w-md notification';
                notification.setAttribute('role', 'alert');
                notification.setAttribute('aria-live', 'assertive');
                notification.setAttribute('data-aos', 'fade-right');
                notification.setAttribute('data-aos-duration', '800');
                notification.innerHTML = `
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-lil-yellow text-lil-black rounded-full flex items-center justify-center animate__animated animate__bounceIn">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="is-size-5 has-text-weight-bold text-lil-yellow animate__animated animate__fadeIn">Inscription réussie !</h3>
                        <p class="is-size-6 text-gray-300 animate__animated animate__fadeIn animate__delay-1s">Vous êtes abonné à la newsletter Lil-Men !</p>
                    </div>
                    <button class="close-notification text-gray-400 hover:text-lil-yellow focus:outline-none transition-colors duration-300" tabindex="0" aria-label="Fermer la notification">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                `;
                document.body.appendChild(notification);

                // Gestion du bouton de fermeture
                const closeButton = notification.querySelector('.close-notification');
                if (closeButton) {
                    closeButton.addEventListener('click', () => {
                        notification.classList.remove('tinLeftIn');
                        notification.classList.add('magictime', 'tinLeftOut');
                        setTimeout(() => {
                            notification.remove();
                        }, 600); // Temps de l'animation tinLeftOut
                    });
                    // Fermeture avec la touche "Entrée" pour l'accessibilité
                    closeButton.addEventListener('keypress', (e) => {
                        if (e.key === 'Enter') {
                            notification.classList.remove('tinLeftIn');
                            notification.classList.add('magictime', 'tinLeftOut');
                            setTimeout(() => {
                                notification.remove();
                            }, 600);
                        }
                    });
                }

                // Disparition automatique après 5 secondes
                setTimeout(() => {
                    if (document.body.contains(notification)) {
                        notification.classList.remove('tinLeftIn');
                        notification.classList.add('magictime', 'tinLeftOut');
                        setTimeout(() => {
                            notification.remove();
                        }, 600);
                    }
                }, 5000);

                // Réinitialisation du formulaire
                emailInput.value = '';
            } else {
                console.log('Invalid email:', email);
                // Animation d'erreur si l'email est invalide
                emailInput.classList.add('animate__animated', 'animate__shakeX', 'border', 'border-red-500');
                setTimeout(() => {
                    emailInput.classList.remove('animate__animated', 'animate__shakeX', 'border', 'border-red-500');
                }, 1000);
            }
        });
    } else {
        console.error('Newsletter form elements not found');
    }

    // Page load animation
    const pageReveal = () => {
        document.body.classList.add('page-loaded');
    };
    setTimeout(pageReveal, 200);
});

document.head.insertAdjacentHTML('beforeend', `
<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes zoomInUp {
        from { opacity: 0; transform: scale(0.8) translateY(50px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }
    .section-animated {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .section-visible {
        opacity: 1;
        transform: translateY(0);
    }
    .page-loaded .hero {
        animation: zoomInUp 1s ease forwards;
    }
    .manga-cover-container:hover .manga-cover {
        animation: swing 0.8s ease infinite alternate;
    }
    @keyframes swing {
        from { transform: rotate(-3deg); }
        to { transform: rotate(3deg); }
    }
</style>
`);