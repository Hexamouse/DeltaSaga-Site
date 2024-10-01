// Fungsi untuk memeriksa apakah perangkat adalah mobile
function isMobileDevice() {
    return /Mobi|Android/i.test(navigator.userAgent);
}

// Fungsi untuk memblokir akses dari perangkat mobile
function blockMobileDevices() {
    if (isMobileDevice()) {
        alert("Mobile is Blocked. Access via Dekstop!~");
        // window.location.href = "https://example.com/blocked"; // Ganti dengan URL halaman blokir
    }
}

// Panggil fungsi saat halaman dimuat
window.onload = blockMobileDevices;
