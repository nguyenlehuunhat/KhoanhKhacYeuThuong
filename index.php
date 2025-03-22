<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoảnh Khắc Yêu Thương</title>
    <!-- Link tới Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Link tới CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Hiệu ứng trái tim rơi */
        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            background: red; /* Màu đỏ tươi */
            transform: rotate(45deg);
            animation: fall 5s linear infinite;
        }

        .heart::before, .heart::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: red; /* Màu đỏ tươi */
            border-radius: 50%;
        }

        .heart::before {
            top: -10px;
            left: 0;
        }

        .heart::after {
            left: 10px;
            top: 0;
        }

        @keyframes fall {
            0% {
                transform: translateY(0) rotate(45deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(45deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <h1>Chào Mừng Đến Với Khoảnh Khắc Yêu Thương</h1>
        <nav>
            <ul>
                <li><a href="#albums">Album</a></li>
                <li><a href="#about">Giới Thiệu</a></li>
                <li><a href="#contact">Liên Hệ</a></li>
            </ul>
        </nav>
    </header>

    <!-- Phần Album -->
    <section id="albums" class="albums-section">
        <h2>Các Album Của Bạn</h2>
        <div class="album-grid">
            <div class="album-card">
                <img src="mau1.jpg" alt="Album 1">
                <h3>Kỷ Niệm Tháng 1/2025</h3>
            </div>
            <div class="album-card">
                <img src="mau2.jpg" alt="Album 2">
                <h3>Ký Ức Du Lịch</h3>
            </div>
            <div class="album-card">
                <img src="mau3.jpg" alt="Album 3">
                <h3>Ngày Đặc Biệt</h3>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <p>&copy; 2025 Khoảnh Khắc Yêu Thương. Mọi quyền được bảo lưu.</p>
    </footer>

    <!-- Script hiệu ứng trái tim -->
    <script>
        function createHeart() {
            const heart = document.createElement('div');
            heart.classList.add('heart');
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.animationDuration = Math.random() * 3 + 2 + 's';
            heart.style.top = '-50px'; // Bắt đầu từ đầu trang
            document.body.appendChild(heart);

            setTimeout(() => {
                heart.remove();
            }, 5000);
        }

        setInterval(createHeart, 300);
    </script>
</body>
</html>
