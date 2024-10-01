function isMobileDevice() {
    return /Mobi|Android/i.test(navigator.userAgent);
}

function blockMobileDevices() {
    if (isMobileDevice()) {
        alert("Mobile is Blocked. Access via Dekstop!~");
        window.location.href = "https://example.com/blocked";
    }
}

window.onload = blockMobileDevices;
