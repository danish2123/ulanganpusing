document.addEventListener("DOMContentLoaded", function() {
    const csButton = document.getElementById('cs-options-btn');
    const csOptions = document.getElementById('cs-options');

    csButton.addEventListener('click', function() {
        csOptions.style.display = csOptions.style.display === 'none' || csOptions.style.display === '' ? 'block' : 'none';
    });
});
