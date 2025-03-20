<style>
    <style>nav.shadow {
        background-color: #333 !important;
        /* Màu nền đen */
    }

    nav.shadow .container {
        padding: 10px 20px;
        /* Thêm padding cho container */
    }

    nav.shadow ul.flex {
        list-style: none;
        /* Loại bỏ dấu chấm mặc định */
        padding: 0;
        margin: 0;
    }

    nav.shadow .nav-item {
        flex: 1;
        /* Chia đều không gian */
        text-align: center;
    }

    nav.shadow .nav-link {
        display: block;
        padding: 10px 15px;
        color: #fff;
        /* Màu chữ trắng */
        text-decoration: none;
        /* Loại bỏ gạch chân mặc định */
        transition: background-color 0.3s ease, border-bottom 0.3s ease;
        /* Hiệu ứng transition */
        border-bottom: 2px solid transparent;
        /* Border dưới trong suốt ban đầu */
    }

    nav.shadow .nav-link.active,
    nav.shadow .nav-link:hover {
        background-color: #444;
        /* Màu nền khi hover hoặc active */
        border-bottom: 2px solid #3b82f6;
        /* Border dưới khi hover hoặc active */
    }

    nav.shadow .nav-link .font-semibold {
        font-weight: 600;
        /* Đảm bảo font-semibold được áp dụng */
    }

    nav.shadow .nav-link.active {
        color: #3b82f6;
        /* Màu chữ khi active */
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

    <nav class="shadow">
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
    </ul>

    <div id="-ajax-box" class="halim_box halim-schedule-box">
        <div class="halim-ajax-popular-post-loading hidden"></div>
        <div class="section-bar clearfix">
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
                        <span class="status">HD</span><span class="episode">Tập 207</span>
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

            <article class="thumb grid-item post-11734">
                <div class="halim-item">
                    <a class="halim-thumb" href="https://hoathinh3d.mom/hoa-phung-lieu-nguyen"
                        title="Hỏa Phụng Liêu Nguyên">
                        <figure>
                            <img class="img-responsive"
                                src="https://hoathinh3d.mom/wp-content/uploads/2023/04/hoa-phung-lieu-nguyen-1-300x450.jpg"
                                alt="Hỏa Phụng Liêu Nguyên" title="Hỏa Phụng Liêu Nguyên">
                        </figure>
                        <span class="status">HD</span><span class="episode">Tập 27</span>
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
                        <span class="status">HD</span><span class="episode">Tập 274</span>
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
            <article class="thumb grid-item post-1467">
                <div class="halim-item">
                    <a class="halim-thumb" href="https://hoathinh3d.mom/van-co-than-thoai" title="Vạn Cổ Thần Thoại">
                        <figure>
                            <img class="img-responsive"
                                src="https://hoathinh3d.mom/wp-content/uploads/2022/08/van-co-than-thoai-1-300x450.jpg"
                                alt="Vạn Cổ Thần Thoại" title="Vạn Cổ Thần Thoại">
                        </figure>
                        <span class="status">HD</span><span class="episode">Tập 274</span>
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
                        <span class="episode">Tập 29</span>
                        <div class="icon_overlay"></div>

                        <div class="halim-post-title-box">
                            <div class="<div class=" halim-post-title ">
                        <h2 class=" entry-title">Vĩnh Hằng Kiếm Tổ</h2>
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
