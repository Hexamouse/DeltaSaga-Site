document.addEventListener('copy', function(e) {
    e.preventDefault();
    alert('Copying content is not allowed on this website.');
});

document.addEventListener('cut', function(e) {
    e.preventDefault();
    alert('Cutting content is not allowed on this website.');
});

document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
    alert('Right-click is disabled on this website.');
});