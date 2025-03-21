<body>

    <div class="container mx-auto p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner" id="carouselInner">
                        <div class="carousel-item active">
                            <a href="../website/list.php">
                                <img src="{{ asset('images/dau-la-dai-luc-poster.jpg') }}" class="d-block w-100" alt="Đấu La Đại Lục">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Đấu La Đại Lục</h5>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="../website/list.php">
                                <img src="{{ asset('images/hoa-giang-ho-chi-bat-luong-nhan-phan-6-2-1.jpg') }}" class="d-block w-100" alt="Hoa Giang Hồ">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Hoa Giang Hồ</h5>
                                </div>
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="../website/list.php">
                                <img src="{{ asset('images/gia-thien-poster-1.jpg') }}" class="d-block w-100" alt="gia-thien">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>gia-thien</h5>
                                </div>
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="../website/list.php">
                                <img src="{{ asset('images/thuong-nguyen-dp.jpg') }}" class="d-block w-100" alt="Thương Nguyên">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Thương Nguyên</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Chương trình JavaScript để tự động chuyển slide
        var slideInterval = setInterval(function() {
            $('#slideshow').carousel('next');
        }, 2000);

        $('#slideshow').on('click', function() {
            clearInterval(slideInterval); // Dừng tự động chuyển slide khi người dùng nhấp
        });
    </script>

    <style>
        .carousel-item {
            height: 400px; /* Chiều cao cố định cho mỗi slide */
            overflow: hidden; /* Giấu bất cứ phần nào của hình ảnh không nằm trong khung */
        }

        .carousel-item img {
            max-height: 100%; /* Giới hạn chiều cao hình ảnh chiếm đầy container */
            width: auto; /* Giữ chiều rộng tự động để giữ tỷ lệ */
            position: absolute; /* Đặt ảnh ở vị trí tuyệt đối */
            top: 50%; /* Đặt ở giữa chiều dọc */
            left: 50%; /* Đặt ở giữa chiềuleft: 50%; /* Đặt ở giữa chiều ngang */
            transform: translate(-50%, -50%); /* Điều chỉnh vị trí trung tâm của ảnh */
            object-fit: contain; /* Giữ nguyên tỷ lệ hình ảnh mà không bị cắt */
        }

        .carousel-inner {
            position: relative; /* Đảm bảo carousel-inner không làm các items chồng lên nhau */
        }

        .carousel-caption {
            position: absolute;
            bottom: 10px; /* Đặt caption ở dưới cùng */
            left: 50%; /* Căn giữa theo chiều ngang */
            transform: translateX(-50%); /* Điều chỉnh cho đúng vị trí giữa */
            color: white; /* Đổi màu chữ để dễ đọc */
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7); /* Thêm bóng đổ cho chữ */
        }
    </style>

</body>
</html>

