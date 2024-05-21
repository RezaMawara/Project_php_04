var galleryImages = document.querySelectorAll('.gallery img');
//
galleryImages.forEach(function(image) {
    // Add event listener for each image
    image.addEventListener('click', function() {
        // Get source and alt of the clicked image
        var src = this.getAttribute('src');
        var alt = this.getAttribute('alt');

        // Set the source and alt of the enlarged image
        document.getElementById('enlargedImg').setAttribute('src', src);
        document.getElementById('enlargedImg').setAttribute('alt', alt);

        // Show the overlay
        document.getElementById('overlay').classList.add('active');

        // Show caption
        var caption = document.getElementById('imgCaption');
        caption.textContent = alt;
    });
});
// 
document.getElementById('overlay').addEventListener('click', function(event) {
    if (event.target === this) {
        this.classList.remove('active');
        // Remove caption
        var caption = document.getElementById('imgCaption');
        caption.textContent = '';
    }
});

// Display all sections on the home page
document.querySelectorAll('section').forEach(function(section) {
    section.style.display = 'block';
});

document.querySelectorAll('nav a').forEach(function(link) {
    link.addEventListener('click', function(event) {
        var targetId = link.getAttribute('href').substring(1); // Get the target ID from the href attribute
        var targetSection = document.getElementById(targetId); // Find the section with the corresponding ID
        event.preventDefault(); // Prevent the default behavior of the link
        // Hide all sections, then only display the corresponding section
        document.querySelectorAll('section').forEach(function(section) {
            section.style.display = 'none';
        });
        targetSection.style.display = 'block';
    });
});

// Fungsi untuk membuat bintang
function createStar() {
    const star = document.createElement('div');
    star.classList.add('star');
    star.style.left = Math.random() * 100 + 'vw'; // Random posisi horizontal
    star.style.animationDuration = Math.random() * 3 + 2 + 's'; // Random durasi animasi
    document.getElementById('myHeader').appendChild(star);
    // Hapus bintang setelah selesai animasi
    star.addEventListener('animationend', () => {
        star.remove();
    });
}


setInterval(createStar, 5000); 

// script.js

document.addEventListener("DOMContentLoaded", function() {
    var titles = document.querySelectorAll('.blog-title');

    titles.forEach(function(title) {
        title.addEventListener('click', function() {
            var id = this.getAttribute('data-id');
            var content = document.getElementById('content-' + id);

            // Toggle display of the content
            if (content.style.display === 'none') {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });
    });
});
