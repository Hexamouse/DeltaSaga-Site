<section class="d-flex align-items-center" style="background-image: url('assets/img/hq1.png'); background-size: cover; background-position: center; height: 100vh; padding: 50px; background-attachment: fixed; background-size: 110%;">
    <div class="overlay"></div> <!-- Tambahkan overlay untuk menggelapkan background -->
    <canvas id="animationCanvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 2;"></canvas>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center" style="padding-left: 0;">
                <div>
                    <h2 class="text-white display-4 text-shadow typing-animation">DELTA PROJECT </h2> <!-- Tambahkan kelas untuk animasi mengetik -->
                    <p class="text-white lead text-shadow">THE BEST LOST SAGA PRIVATE SERVER.</p>
                    <button class="btn btn-primary discord-button" style="margin-top: 5px;">
                        <img src="assets/img/discord-logo.png" alt="Discord" style="width: 30px; margin-right: 5px; margin-bottom: 3px;"> Join Discord
                    </button>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="assets/img/ragna-jinkisaragi_chibi.png" class="img-fluid animate-img responsive-img w-75" alt="Karakter">
            </div>
        </div>
    </div>
</section>


<style>
@keyframes float {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
    100% {
        transform: translateY(0);
    }
}

.animate-img {
    animation: float 3s ease-in-out infinite;
}

/* Tambahkan CSS untuk overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Sesuaikan opacity untuk menggelapkan */
    z-index: 1;
}

.text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

section > .container {
    position: relative;
    z-index: 3;
}

/* Tambahkan CSS untuk gambar responsif */
.responsive-img {
    max-width: auto;
    width: 60%;
    height: auto;
    margin-top: 30px; /* Tambahkan margin-top untuk menghindari terpotong oleh navbar */
}

@media (max-width: 1200px) {
    .responsive-img {
        width: 80%;
    }
}

@media (max-width: 992px) {
    .responsive-img {
        width: 70%;
    }
}

@media (max-width: 768px) {
    .responsive-img {
        width: 60%;
    }
}

@media (max-width: 576px) {
    .responsive-img {
        width: 50%;
    }
}

/* Hapus .no-scroll untuk mengizinkan scroll */
html, body {
    overflow: auto; /* Izinkan scroll untuk seluruh halaman */
}

.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8); /* Sesuaikan warna dan opacity */
    color: white;
    padding: 10px 0;
    z-index: 4; /* Pastikan footer berada di atas elemen lain */
    text-align: center;
}

h2 {
    font-family: 'Chakra Petch', sans-serif;
    font-weight: 600 !important;
}

p {
    font-family: 'Chakra Petch', sans-serif;
    font-weight: 600 !important;
    font-size: 1rem;
}

.typing-animation {
    border-right: 2px solid white; /* Garis untuk efek mengetik */
    white-space: nowrap; /* Mencegah teks terputus */
    overflow: hidden; /* Sembunyikan teks yang belum muncul */
    animation: typing 2s steps(16), blink-caret 0.80s step-end infinite; /* Durasi dan langkah animasi */
}

@keyframes typing {
    from { width: 0; }
    to { width: 100%; }
}

@keyframes blink-caret {
    from, to { border-color: transparent; }
    50% { border-color: white; }
}

.discord-button {
    background-color: #7289da; /* Warna latar belakang Discord */
    border: none; /* Hapus border default */
    border-radius: 5px; /* Sudut melengkung */
    color: white; /* Warna teks */
    padding: 10px 20px; /* Padding untuk tombol */
    font-size: 16px; /* Ukuran font */
    transition: background-color 0.3s, transform 0.3s; /* Transisi untuk efek hover */
    font-family: 'Chakra Petch', sans-serif;
    font-weight: 600 !important;
}

.discord-button:hover {
    background-color: #5b6eae; /* Warna saat hover */
    transform: scale(1.03); /* Efek zoom saat hover */
}
</style>

<script>
const canvas = document.getElementById('animationCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const points = [];
const numPoints = 120;

for (let i = 0; i < numPoints; i++) {
    points.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        vx: (Math.random() - 0.5) * 2,
        vy: (Math.random() - 0.5) * 2,
        opacity: Math.random() * 0.5 + 0.5 // Tambahkan opacity random antara 0.5 dan 1
    });
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    points.forEach(point => {
        point.x += point.vx;
        point.y += point.vy;

        if (point.x < 0 || point.x > canvas.width) point.vx *= -1;
        if (point.y < 0 || point.y > canvas.height) point.vy *= -1;

        ctx.fillStyle = `rgba(255, 255, 255, ${point.opacity})`; // Gunakan opacity
        ctx.beginPath();
        ctx.arc(point.x, point.y, 2, 0, Math.PI * 2);
        ctx.fill();
    });

    for (let i = 0; i < numPoints; i++) {
        for (let j = i + 1; j < numPoints; j++) {
            const dx = points[i].x - points[j].x;
            const dy = points[i].y - points[j].y;
            const distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < 100) {
                ctx.strokeStyle = `rgba(255, 255, 255, ${(1 - distance / 100) * points[i].opacity})`; // Gunakan opacity berdasarkan jarak
                ctx.beginPath();
                ctx.moveTo(points[i].x, points[i].y);
                ctx.lineTo(points[j].x, points[j].y);
                ctx.stroke();
            }
        }
    }

    requestAnimationFrame(draw);
}

draw();
</script>
