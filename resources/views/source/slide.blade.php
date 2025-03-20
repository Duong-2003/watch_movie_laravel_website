<body>

    <div class="container mx-auto p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" id="carouselInner">
                        <div class="carousel-item active">
                            <a href="../website/list.php">
                                <div class="position-relative">
                                    <img src="{{ asset('images/dau-la-dai-luc-poster.jpg') }}" class="d-block w-100" alt="Đấu La Đại Lục">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Đấu La Đại Lục</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="../website/list.php">
                                <div class="position-relative">
                                    <img src="{{ asset('images/hoa-giang-ho-chi-bat-luong-nhan-phan-6-2-1.jpg') }}" class="d-block w-100" alt="Hoa Giang Hồ">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Hoa Giang Hồ</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="../website/list.php">
                                <div class="position-relative">
                                    <img src="{{ asset('images/thuong-nguyen-dp.jpg') }}" class="d-block w-100" alt="Thương Nguyên">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Thương Nguyên</h5>
                                    </div>
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
        .carousel-caption {
            position: absolute;
            bottom: 20px; /* Position the caption at the bottom */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%); /* Adjust for the center */
            color: white; /* Change text color for better visibility */
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7); /* Add shadow for readability */
        }
    </style>

</body>
</html>
