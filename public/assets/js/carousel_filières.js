let index = 0;
        const slides = document.querySelector(".slides1");
        const slides2 = document.querySelector(".slides2");
        const totalSlides = 5
        const dotsContainer = document.querySelector(".dots");

        function showSlide(n) {
            if (n >= totalSlides) {
                index = 0; // Retour au premier slide
            } else if (n < 0) {
                index = totalSlides - 1; // Aller au dernier slide
            } else {
                index = n;
            }

            slides.style.transform = "translateX(" + (-index * 100) + "%)";
            slides2.style.transform = "translateX(" + (-index * 100) + "%)";

        }

        let autoSlideInterval;

        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                showSlide(index + 1);
            }, 10000); // Pause de 5 secondes AVANT le changement de slide
        }

        function resetTimer() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }

        startAutoSlide(); // Lancer l'autoplay au chargement de la page