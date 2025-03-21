<style>

  nav {
    background-color: #333 !important; /* Màu nền tối cho navbar */
}

nav .container {
    padding: 10px 20px; /* Padding cho container */
}

nav ul {
    list-style: none; /* Gỡ bỏ dấu chấm mặc định */
    padding: 0; /* Gỡ bỏ padding */
    margin: 0; /* Gỡ bỏ margin */
    display: flex; /* Sử dụng flexbox cho layout */
    justify-content: space-around; /* Căn giữa các mục trong navbar */
}

nav .nav-item {
    flex: 1; /* Chiếm đều không gian */
    text-align: center; /* Căn giữa text trong từng mục */
}

nav .nav-link {
    display: block; /* Hiển thị như block */
    padding: 15px; /* Padding cho các liên kết */
    color: #fff; /* Màu chữ trắng */
    text-decoration: none; /* Gỡ bỏ gạch chân */
    transition: background-color 0.3s ease, color 0.3s ease; /* Hiệu ứng chuyển màu nền và chữ */
    position: relative; /* Để sử dụng cho hiệu ứng border */
}

nav .nav-link .font-semibold {
    font-weight: 600; /* Áp dụng font-weight cho chữ in đậm */
}

nav .nav-link.active,
nav .nav-link:hover {
    background-color: #444; /* Màu nền khi hover hoặc active */
    color: #3b82f6; /* Thay đổi màu chữ khi active */
}

/* Đường kẻ dưới cho item active */
nav .nav-link:after {
    content: '';
    display: block;
    width: 100%;
    height: 2px;
    background-color: #3b82f6; /* Màu đường kẻ dưới */
    position: absolute;
    bottom: 0; /* Đặt đường kẻ ở dưới cùng */
    left: 0;
    right: 0;
    opacity: 0; /* Bắt đầu với đường kẻ ẩn */
    transition: opacity 0.3s ease; /* Hiệu ứng chuyển đổi cho đường kẻ */
}

nav .nav-link:hover:after,
nav .nav-link.active:after {
    opacity: 1; /* Hiện đường kẻ khi hover hoặc active */
}
    .section-title {
    margin: 20px 0; /* Tạo khoảng cách trên và dưới cho tiêu đề */
}

.section-title span {
    font-size: 2rem; /* Kích thước chữ lớn hơn */
    font-weight: bold; /* Chữ đậm */
    letter-spacing: 1px; /* Khoảng cách giữa các ký tự */
    text-transform: uppercase; /* Viết hoa tất cả các chữ cái */
    background: linear-gradient(to right, #ff8a00, #ff2070); /* Gradient màu cam */
    -webkit-background-clip: text; /* Clip background cho chữ */
    -webkit-text-fill-color: transparent; /* Màu chữ trong suốt */
    display: inline-block; /* Để áp dụng padding hoặc margin nếu cần */
    padding: 5px 0; /* Thêm không gian xung quanh chữ */
    text-align: center; /* Căn giữa văn bản */
    border-bottom: 3px solid #ff2070; /* Dòng kẻ dưới chân màu cam */
    margin-bottom: 10px; /* Khoảng cách giữa dòng kẻ và nội dung phía dưới */
}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navItems = document.querySelectorAll('.nav-item');

        navItems.forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();

                // Loại bỏ lớp 'active' khỏi tất cả các mục
                navItems.forEach(i => i.classList.remove('active'));

                // Thêm lớp 'active' vào mục được chọn
                this.classList.add('active');
            });
        });
    });
</script>
<section>

    <nav class="container "id="container-contents">
        <div class="container " style="background-color: #333 !important;">
            <ul class="flex justify-around nav nav-pills nav-justified">
                <li class="nav-item active">
                    <a class="nav-link text-blue-500" href="#" title="">
                        <span class="h-text">Mới<br>Cập Nhật</span>
                    </a>
                </li>
                <li class="nav-item" data-id="thu-hai">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="font-semibold text-lg">Mon</span><br>Thứ Hai
                    </a>
                </li>
                <li class="nav-item" data-id="thu-ba">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="font-semibold text-lg">Tue</span><br>Thứ Ba
                    </a>
                </li>
                <li class="nav-item" data-id="thu-tu">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="font-semibold text-lg">Wed</span><br>Thứ Tư
                    </a>
                </li>
                <li class="nav-item" data-id="thu-nam">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="font-semibold text-lg">Thu</span><br>Thứ Năm
                    </a>
                </li>
                <li class="nav-item" data-id="thu-sau">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="font-semibold text-lg">Fri</span><br>Thứ Sáu
                    </a>
                </li>
                <li class="nav-item" data-id="thu-bay">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="font-semibold text-lg">Sat</span><br>Thứ Bảy
                    </a>
                </li>
                <li class="nav-item" data-id="chu-nhat">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="font-semibold text-lg">Sun</span><br>Chủ Nhật
                    </a>
                </li>
            </ul>
        </div>
    </nav>
{{--
    <ul class="nav nav-pills nav-justified halim-schedule-block-mobile mt-3">
        <li role="presentation" class="active" id="moviesLatest">
            <a href="" title="">
                <span class="h-text">Mới Cập Nhật</span>
            </a>
        </li>
        <li role="presentation" id="pull">
            <a href="javascript:;">Lịch Chiếu</a>
        </li>
    </ul>
    <ul class="nav nav-pills nav-justified halim-schedule-block-mobile menu schedule">
        <li role="presentation" data-id="thu-hai">
            <a href="javascript:;">Thứ Hai</a>
        </li>
        <li role="presentation" data-id="thu-ba">
            <a href="javascript:;">Thứ Ba</a>
        </li>
        <li role="presentation" data-id="thu-tu">
            <a href="javascript:;">Thứ Tư</a>
        </li>
        <li role="presentation" data-id="thu-nam">
            <a href="javascript:;">Thứ Năm</a>
        </li>
        <li role="presentation" data-id="thu-sau">
            <a href="javascript:;">Thứ Sáu</a>
        </li>
        <li role="presentation" data-id="thu-bay">
            <a href="javascript:;">Thứ Bảy</a>
        </li>
        <li role="presentation" data-id="chu-nhat">
            <a href="javascript:;">Chủ Nhật</a>
        </li>
    </ul> --}}

    <div class="container
    section-bar clearfix">
        <h3 class="section-title">
             <span>Mới cập nhật</span>

        </h3>
     </div>


     <div class="container grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
        <article class="thumb grid-item post-740">
            <div class="halim-item">
                <a class="halim-thumb" href="https://hoathinh3d.mom/the-gioi-hoan-my" title="Thế Giới Hoàn Mỹ">
                    <figure>
                        <img class="img-responsive"
                            src="https://hoathinh3d.mom/wp-content/uploads/2021/04/the-gioi-hoan-my-7-300x450.jpg"
                            alt="Thế Giới Hoàn Mỹ" title="Thế Giới Hoàn Mỹ">
                    </figure>
                    <span class="status">HD</span>
                    <span class="episode"><span class="episode-label">Tập </span>207</span>
                    <div class="icon_overlay"></div>
                    <div class="halim-post-title-box">
                        <div class="halim-post-title">
                            <h2 class="entry-title">Thế Giới Hoàn Mỹ</h2>
                            <p class="original_title">Perfect World</p>
                        </div>
                    </div>
                </a>
            </div>
        </article>

        <!-- Các bài viết khác cũng làm tương tự -->

        <article class="thumb grid-item post-11734">
            <div class="halim-item">
                <a class="halim-thumb" href="https://hoathinh3d.mom/hoa-phung-lieu-nguyen"
                    title="Hỏa Phụng Liêu Nguyên">
                    <figure>
                        <img class="img-responsive"
                            src="https://hoathinh3d.mom/wp-content/uploads/2023/04/hoa-phung-lieu-nguyen-1-300x450.jpg"
                            alt="Hỏa Phụng Liêu Nguyên" title="Hỏa Phụng Liêu Nguyên">
                    </figure>
                    <span class="status">HD</span>
                    <span class="episode"><span class="episode-label">Tập </span>27</span>
                    <div class="icon_overlay"></div>
                    <div class="halim-post-title-box">
                        <div class="halim-post-title">
                            <h2 class="entry-title">Hỏa Phụng Liêu Nguyên</h2>
                            <p class="original_title">Huo Feng Liao Yuan</p>
                        </div>
                    </div>
                </a>
            </div>
        </article>

        <article class="thumb grid-item post-1467">
            <div class="halim-item">
                <a class="halim-thumb" href="https://hoathinh3d.mom/van-co-than-thoai" title="Vạn Cổ Thần Thoại">
                    <figure>
                        <img class="img-responsive"
                            src="https://hoathinh3d.mom/wp-content/uploads/2022/08/van-co-than-thoai-1-300x450.jpg"
                            alt="Vạn Cổ Thần Thoại" title="Vạn Cổ Thần Thoại">
                    </figure>
                    <span class="status">HD</span>
                    <span class="episode"><span class="episode-label">Tập </span>274</span>
                    <div class="icon_overlay"></div>
                    <div class="halim-post-title-box">
                        <div class="halim-post-title">
                            <h2 class="entry-title">Vạn Cổ Thần Thoại</h2>
                            <p class="original_title">Wangu Shenhua</p>
                        </div>
                    </div>
                </a>
            </div>
        </article>

        <article class="thumb grid-item post-702375">
            <div class="halim-item">
                <a class="halim-thumb" href="https://hoathinh3d.mom/vinh-hang-kiem-to" title="Vĩnh Hằng Kiếm Tổ">
                    <figure>
                        <img class="img-responsive"
                            src="https://hoathinh3d.mom/wp-content/uploads/2024/12/vinh-hang-kiem-to-1-300x450.jpg"
                        alt="Vĩnh Hằng Kiếm Tổ" title="Vĩnh Hằng Kiếm Tổ">
                </figure>
                <span class="episode"><span class="episode-label">Tập </span>29</span>
                <div class="icon_overlay"></div>
                <div class="halim-post-title-box">
                    <div class="halim-post-title">
                        <h2 class="entry-title">Vĩnh Hằng Kiếm Tổ</h2>
                        <p class="original_title">Rebirth of the Sword Patriarch</p>
                    </div>
                </div>
            </a>
        </div>
    </article>


    <article class="thumb grid-item post-702375">
        <div class="halim-item">
            <a class="halim-thumb" href="https://hoathinh3d.mom/vinh-hang-kiem-to" title="Vĩnh Hằng Kiếm Tổ">
                <figure>
                    <img class="img-responsive"
                        src="https://hoathinh3d.mom/wp-content/uploads/2024/12/vinh-hang-kiem-to-1-300x450.jpg"
                    alt="Vĩnh Hằng Kiếm Tổ" title="Vĩnh Hằng Kiếm Tổ">
            </figure>
            <span class="episode"><span class="episode-label">Tập </span>29</span>
            <div class="icon_overlay"></div>
            <div class="halim-post-title-box">
                <div class="halim-post-title">
                    <h2 class="entry-title">Vĩnh Hằng Kiếm Tổ</h2>
                    <p class="original_title">Rebirth of the Sword Patriarch</p>
                </div>
            </div>
        </a>
    </div>
</article>

</div>








    </div>
    <div class="clearfix"></div>
    <div class="text-center">
        <ul class="page-numbers">
            <li><span aria-current="page" class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="https://hoathinh3d.mom/page/2">2</a></li>
            <li><a class="page-numbers" href="https://hoathinh3d.mom/page/3">3</a></li>
            <li><span class="page-numbers dots">…</span></li>
            <li><a class="page-numbers" href="https://hoathinh3d.mom/page/16">16</a></li>
            <li><a class="next page-numbers" href="https://hoathinh3d.mom/page/2"><i
                        class="hl-down-open rotate-right"></i></a></li>
        </ul>
    </div>
    </div>

</section>

<style>
    .episode {
    position: relative; /* Để có thể định vị phần tử */
    color: white; /* Màu chữ */
    background-color: rgba(0, 0, 0, 0.5); /* Màu nền bán trong suốt */
    padding: 5px 10px; /* Khoảng cách bên trong */
    border-radius: 5px; /* Bo cong các góc */
    top: 10px; /* Đưa lên một chút để không che ảnh */
    left: 10px; /* Đưa vào bên trái một chút */
}

.grid-item .episode {
    right: 2px;
    bottom: 52px;
    background: rgb(71, 132, 19);
    color: #fff;
    padding: 3px 5px 1px;
    z-index: 9;
    border-radius: 2px;
    background-size: 200% 100%;
    background-image: linear-gradient(to right, #C02425 0%, #F0CB35 51%, #C02425 100%);
    transition: .7s;
    text-transform: capitalize;
}
.grid-item .episode {
    right: unset !important;
    bottom: unset !important;
    left: 0px !important;
    top: 0px !important;
}
.page-numbers {
            padding: 0;
            margin: 20px 0;
            color: #fff;
            list-style: none;
        }

        .page-numbers li {
            line-height: 35px;
            display: inline-block; /* Hiển thị inline */
        }

        .page-numbers li a {
            background: #1b364e;
            transition: .5s all;
            color: #feffff;
            text-shadow: 0 1px 0 rgba(0, 0, 0, .5);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.07), 0px 1px 3px rgba(0, 0, 0, 0.29);
            padding: 5px 10px; /* Thêm padding cho các liên kết */
            border-radius: 5px; /* Bo cong cho các liên kết */
        }

        .page-numbers li a:hover {
            background: #333; /* Màu nền khi hover */
        }
</style>
