<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halim Trending Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        .halim-trending-slider {
            margin-bottom: 20px;
            background-color: #1c1c1c; /* Màu nền cho slider */
            padding: 15px;
            border-radius: 8px;
        }

        .section-bar.clearfix {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #333;
        }

        .section-title {
            margin: 0;
            font-size: 1.5rem;
            color: #eee;
        }

        .section-title span {
            display: flex;
            align-items: center;
        }

        .halim-trending-icon {
            margin-right: 8px;
            color: #ffc107; /* Màu cho icon thịnh hành */
        }

        .halim-trending-container {
            position: relative;
            overflow: hidden;
        }

        .halim-trending-track {
            display: flex;
            transition: transform 0.3s ease;
        }

        .halim-trending-card {
            flex: 0 0 auto;
            width: 200px; /* Tăng chiều rộng card */
            margin-right: 15px; /* Tăng margin right */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .halim-trending-link {
            display: block;
            text-decoration: none;
            color: #eee;
            display: flex; /* Căn giữa nội dung theo chiều dọc */
            flex-direction: column; /* Sắp xếp nội dung theo cột */
            align-items: center; /* Căn giữa nội dung theo chiều ngang */
            text-align: center; /* Căn giữa chữ */
        }

        .halim-trending-poster-container {
            position: relative;
            width: 100%;
            height: 280px; /* Tăng chiều cao poster */
            overflow: hidden;
            margin-bottom: 10px; /* Tăng khoảng cách giữa ảnh và info */
        }

        .halim-trending-poster-mask {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Overlay tối */
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .halim-trending-link:hover .halim-trending-poster-mask {
            opacity: 1;
        }

        .halim-trending-clip-path-odd {
            border-radius: 8px 8px 0 0;
        }

        .halim-trending-clip-path-even {
            border-radius: 8px 8px 0 0;
        }

        .halim-trending-poster-image {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Thay đổi thành cover để lấp đầy vùng chứa */
            transition: transform 0.3s ease;
        }

        .halim-trending-link:hover .halim-trending-poster-image {
            transform: scale(1.05);
        }

        .halim-trending-rating {
            position: absolute;
            top: 5px;
            left: 5px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #ffc107;
            padding: 3px 5px;
            border-radius: 4px;
            font-size: 0.8rem;
        }

        .halim-trending-info {
            /* padding: 8px; */ /* Loại bỏ padding vì đã căn giữa bằng flex */
            text-align: center;
        }

        .halim-trending-number {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 5px;
            color: #eee;
        }

        .halim-trending-details {
            overflow: hidden;
        }

        .halim-trending-title-text {
            font-size: 1rem; /* Tăng kích thước chữ tiêu đề */
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 5px; /* Tăng margin bottom */
        }

        .halim-trending-original-title {
            font-size: 0.8rem; /* Tăng kích thước chữ tiêu đề gốc */
            color: #999;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .halim-trending-nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 1.2rem;
            cursor: pointer;
            z-index: 10;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .halim-trending-nav-button:hover {
            opacity: 1;
        }

        .halim-trending-prev-button {
            left: 0;
            border-radius: 0 8px 8px 0;
        }

        .halim-trending-next-button {
            right: 0;
            border-radius: 8px 0 0 8px;
        }

        /* Điều chỉnh cho responsive */
        @media (max-width: 768px) {
            .halim-trending-card {
                width: 150px; /* Điều chỉnh chiều rộng card nhỏ hơn */
                margin-right: 10px;
            }
            .halim-trending-poster-container {
                height: 200px; /* Điều chỉnh chiều cao poster nhỏ hơn */
            }
            .halim-trending-title-text {
                font-size: 0.9rem;
            }
            .halim-trending-original-title {
                font-size: 0.7rem;
            }
            .halim-trending-nav-button {
                font-size: 1rem;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

    <div class="container section-bar clearfix">
        <div class="halim-trending-slider">
            <div class="section-bar clearfix">
                <h3 class="section-title">
                    <span><i class="fas fa-fire-alt halim-trending-icon"></i> Đang thịnh hành</span>
                </h3>
            </div>
            <div class="halim-trending-container">
                <button class="halim-trending-nav-button halim-trending-prev-button" aria-label="Previous">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="halim-trending-track">
                    <div class="halim-trending-card">
                        <a href="#" class="halim-trending-link">
                            <div class="halim-trending-poster-container halim-trending-clip-path-odd">
                                <div class="halim-trending-poster-mask halim-trending-clip-path-odd"></div>
                                <img class="img-responsive halim-trending-poster-image"  src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}" alt="Phim 1">
                                <div class="halim-trending-rating">
                                    <div class="halim-trending-rating-value">4.1</div>
                                </div>
                            </div>
                            <div class="halim-trending-info">
                                <div class="halim-trending-number">1</div>
                                <div class="halim-trending-details">
                                    <h3 class="halim-trending-title-text">Phim Thịnh Hành 1</h3>
                                    <p class="halim-trending-original-title">Original Title 1</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="halim-trending-card">
                        <a href="#" class="halim-trending-link">
                            <div class="halim-trending-poster-container halim-trending-clip-path-even">
                                <div class="halim-trending-poster-mask halim-trending-clip-path-even"></div>
                                <img class="img-responsive halim-trending-poster-image"  src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}" alt="Phim 2">
                                <div class="halim-trending-rating">
                                    <div class="halim-trending-rating-value">4.4</div>
                                </div>
                            </div>
                            <div class="halim-trending-info">
                                <div class="halim-trending-number">2</div>
                                <div class="halim-trending-details">
                                    <h3 class="halim-trending-title-text">Phim Thịnh Hành 2</h3>
                                    <p class="halim-trending-original-title">Original Title 2</p>
                                </div>
                            </div>
                        </a>
                    </div>
                   
                    <div class="halim-trending-card">
                        <a href="#" class="halim-trending-link">
                            <div class="halim-trending-poster-container halim-trending-clip-path-even">
                                <div class="halim-trending-poster-mask halim-trending-clip-path-even"></div>
                                <img class="img-responsive halim-trending-poster-image"  src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}" alt="Phim 4">
                                <div class="halim-trending-rating">
                                    <div class="halim-trending-rating-value">4.2</div>
                                </div>
                            </div>
                            <div class="halim-trending-info">
                                <div class="halim-trending-number">4</div>
                                <div class="halim-trending-details">
                                    <h3 class="halim-trending-title-text">Phim Thịnh Hành 4</h3>
                                    <p class="halim-trending-original-title">Original Title 4</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="halim-trending-card">
                        <a href="#" class="halim-trending-link">
                            <div class="halim-trending-poster-container halim-trending-clip-path-odd">
                                <div class="halim-trending-poster-mask halim-trending-clip-path-odd"></div>
                                <img class="img-responsive halim-trending-poster-image"  src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}" alt="Phim 5">
                                <div class="halim-trending-rating">
                                    <div class="halim-trending-rating-value">4.4</div>
                                </div>
                            </div>
                            <div class="halim-trending-info">
                                <div class="halim-trending-number">5</div>
                                <div class="halim-trending-details">
                                    <h3 class="halim-trending-title-text">Phim Thịnh Hành 5</h3>
                                    <p class="halim-trending-original-title">Original Title 5</p>
                                </div>
                            </div>
                        </a>
                    </div>
                   
                    <div class="halim-trending-card">
                        <a href="#" class="halim-trending-link">
                            <div class="halim-trending-poster-container halim-trending-clip-path-even">
                                <div class="halim-trending-poster-mask halim-trending-clip-path-even"></div>
                                <img class="img-responsive halim-trending-poster-image"  src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}" alt="Phim 10">
                                <div class="halim-trending-rating">
                                    <div class="halim-trending-rating-value">4.3</div>
                                </div>
                            </div>
                            <div class="halim-trending-info">
                                <div class="halim-trending-number">10</div>
                                <div class="halim-trending-details">
                                    <h3 class="halim-trending-title-text">Phim Thịnh Hành 10</h3>
                                    <p class="halim-trending-original-title">Original Title 10</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="halim-trending-card">
                        <a href="#" class="halim-trending-link">
                            <div class="halim-trending-poster-container halim-trending-clip-path-even">
                                <div class="halim-trending-poster-mask halim-trending-clip-path-even"></div>
                                <img class="img-responsive halim-trending-poster-image"  src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}" alt="Phim 10">
                                <div class="halim-trending-rating">
                                    <div class="halim-trending-rating-value">4.3</div>
                                </div>
                            </div>
                            <div class="halim-trending-info">
                                <div class="halim-trending-number">10</div>
                                <div class="halim-trending-details">
                                    <h3 class="halim-trending-title-text">Phim Thịnh Hành 10</h3>
                                    <p class="halim-trending-original-title">Original Title 10</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                   
                    <div class="halim-trending-card">
                        <a href="#" class="halim-trending-link">
                            <div class="halim-trending-poster-container halim-trending-clip-path-even">
                                <div class="halim-trending-poster-mask halim-trending-clip-path-even"></div>
                                <img class="img-responsive halim-trending-poster-image"  src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}" alt="Phim 10">
                                <div class="halim-trending-rating">
                                    <div class="halim-trending-rating-value">4.3</div>
                                </div>
                            </div>
                            <div class="halim-trending-info">
                                <div class="halim-trending-number">10</div>
                                <div class="halim-trending-details">
                                    <h3 class="halim-trending-title-text">Phim Thịnh Hành 10</h3>
                                    <p class="halim-trending-original-title">Original Title 10</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                <button class="halim-trending-nav-button halim-trending-next-button" aria-label="Next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const trendingContainer = document.querySelector('.halim-trending-container');
        const trendingTrack = document.querySelector('.halim-trending-track');
        const prevButton = document.querySelector('.halim-trending-prev-button');
        const nextButton = document.querySelector('.halim-trending-next-button');
        const cards = document.querySelectorAll('.halim-trending-card');
        if (!cards.length) return;

        const cardWidthWithMargin = cards[0].offsetWidth + 15;
        let scrollPosition = 0;

        function updateButtonVisibility() {
            prevButton.style.visibility = scrollPosition > 0 ? 'visible' : 'hidden';
            nextButton.style.visibility = scrollPosition < maxScroll ? 'visible' : 'hidden';
            prevButton.style.display = cards.length > getVisibleSlideCount() ? 'block' : 'none';
            nextButton.style.display = cards.length > getVisibleSlideCount() ? 'block' : 'none';
        }

        function updateScroll() {
            trendingTrack.style.transform = `translateX(-${scrollPosition}px)`;
            updateButtonVisibility();
        }

        function getVisibleSlideCount() {
            return Math.floor(trendingContainer.offsetWidth / cardWidthWithMargin);
        }

        function calculateMaxScroll() {
            const totalWidth = cards.length * cardWidthWithMargin;
            return Math.max(0, totalWidth - trendingContainer.offsetWidth);
        }

        let maxScroll = calculateMaxScroll();
        updateButtonVisibility();

        nextButton.addEventListener('click', () => {
            scrollPosition = Math.min(scrollPosition + cardWidthWithMargin, maxScroll);
            updateScroll();
        });

        prevButton.addEventListener('click', () => {
            scrollPosition = Math.max(0, scrollPosition - cardWidthWithMargin);
            updateScroll();
        });

        window.addEventListener('resize', () => {
            maxScroll = calculateMaxScroll();
            scrollPosition = Math.min(scrollPosition, maxScroll);
            updateScroll();
        });
    });
</script>
    </script>

</body>
</html>