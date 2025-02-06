document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.nav-link, .btn'); // Include both nav links and buttons
    const sections = document.querySelectorAll('.section');
    const closeButton = document.querySelector('.close-btn'); // Select the close button

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('data-target');

            // Check if the link has a target ID for navigation
            if (targetId) {
                e.preventDefault(); // Prevent default anchor behavior
                
                // Hide all sections
                sections.forEach(section => {
                    section.classList.remove('active');
                });

                // Show the target section
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.classList.add('active');
                }
            }
            // If there's no targetId, it means it's an external link, so do not prevent default
        });
    });

    // Add event listener for the close button
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            // Hide the DIY gallery section
            const diyGallery = document.getElementById('diy-gallery');
            diyGallery.classList.remove('active');

            // Optionally, show the previous section (e.g., Projects)
            const projectsSection = document.getElementById('projects');
            if (projectsSection) {
                projectsSection.classList.add('active');
            }
        });
    }
});

let currentSlide = 0;

function moveSlide(direction) {
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    // Hide current slide
    slides[currentSlide].classList.remove('active');

    // Update current slide index
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

    // Show new slide
    slides[currentSlide].classList.add('active');

    // Move the carousel inner
    const carouselInner =document.querySelector('.carousel-inner');
    carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
}

document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".resume-tab");
    const sections = document.querySelectorAll(".resume-section");

    tabs.forEach(tab => {
        tab.addEventListener("click", function (e) {
            e.preventDefault();
            
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove("active"));
            this.classList.add("active");

            // Hide all sections and show the selected one
            const target = this.getAttribute("data-target");
            sections.forEach(sec => sec.classList.remove("active"));
            document.getElementById(target).classList.add("active");
        });
    });
});