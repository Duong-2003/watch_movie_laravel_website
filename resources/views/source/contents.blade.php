<style>
 /* CSS cho giao diện hiển thị tên phim vào trong ảnh */

/* Reset cơ bản để đảm bảo tính nhất quán */
body, h1, h2, h3, p, ul, li, figure, figcaption {
    margin: 0;
    padding: 0;
    list-style: none;
}

body {
    font-family: sans-serif; /* Chọn font chữ phù hợp */
    background-color: #f4f4f4; /* Màu nền trang */
    color: #333; /* Màu chữ mặc định */
    line-height: 1.6;
}

.container {
    max-width: 1300px; /* Độ rộng tối đa của container */
    margin: 20px auto; /* Căn giữa container */
    padding: 0 20px; /* Padding hai bên container */
}





/* Tiêu đề Section */
.section-title {
    margin-bottom: 20px;
    text-align: center;
}

.section-title span {
    font-size: 2rem;
    font-weight: bold;
    color: #e44d26; /* Màu tiêu đề */
    display: inline-block;
    padding-bottom: 5px;
    border-bottom: 3px solid #e44d26;
}

/* Grid hiển thị phim */
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Tạo layout grid responsive */
    gap: 20px; /* Khoảng cách giữa các item */
}

.grid-item {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.halim-item {
    position: relative;
    display: block;
}

.halim-thumb {
    position: relative;
    display: block;
    overflow: hidden;
}

.halim-thumb figure {
    margin: 0;
    overflow: hidden;
}

.halim-thumb img.img-responsive {
    width: 100%;
    height: auto;
    object-fit: cover;
    display: block;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.halim-thumb:hover img.img-responsive {
    transform: scale(1.05);
}

.halim-post-title-box {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 10px;
    box-sizing: border-box;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.halim-thumb:hover .halim-post-title-box {
    opacity: 1;
}

.halim-post-title {
    text-align: left;
}

.halim-post-title .entry-title {
    font-size: 1rem;
    margin-bottom: 3px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.halim-post-title .original_title {
    font-size: 0.8rem;
    color: #ccc;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.icon_overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
    border-radius: 8px;
}

.halim-thumb:hover .icon_overlay {
    opacity: 1;
}

.episode {
    position: absolute;
    top: 8px;
    left: 8px;
    background: linear-gradient(to right, #C02425, #F0CB35, #C02425);
    color: white;
    padding: 3px 7px;
    font-size: 0.75rem;
    border-radius: 4px;
    font-weight: bold;
    z-index: 2;
}

.grid-item .episode {
    left: 8px !important;
    top: 8px !important;
    right: unset !important;
    bottom: unset !important;
}

/* Phân trang */
.page-numbers {
    padding: 0;
    margin: 20px 0;
    color: #333;
    list-style: none;
    text-align: center;
}

.page-numbers li {
    line-height: 35px;
    display: inline-block;
    margin: 0 5px;
}

.page-numbers li a,
.page-numbers li span {
    background: #ddd;
    color: #333;
    text-shadow: none;
    box-shadow: none;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.page-numbers li a:hover {
    background: #ccc;
}

.page-numbers li span.current {
    background: #e44d26;
    color: #fff;
}

.page-numbers .next,
.page-numbers .prev {
    background: #bbb;
    color: #fff;
}

.page-numbers .next:hover,
.page-numbers .prev:hover {
    background: #aaa;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 10px;
    }

    .halim-post-title .entry-title {
        font-size: 0.9rem;
    }

    .halim-post-title .original_title {
        font-size: 0.7rem;
    }

    .halim-post-title-box {
        padding: 8px;
    }
}

@media (max-width: 576px) {
    .grid {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 8px;
    }

    .halim-post-title .entry-title {
        font-size: 0.8rem;
    }

    .halim-post-title-box {
        padding: 6px;
    }
}
</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.nav-item');

    navItems.forEach(item => {
      item.addEventListener('click', function(e) {
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

  <div class="container
    section-bar clearfix">
    <h3 class="section-title">
      <span>Mới cập nhật</span>

    </h3>
  </div>


  <div class="container grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
  <article class="thumb grid-item post-740">
    <div class="halim-item">
        <a class="halim-thumb" href="https://hoathinh3d.mom/the-gioi-hoan-my" title="Thế Giới Hoàn Mỹ">
            <figure>
                <img class="img-responsive" src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}" alt="Thế Giới Hoàn Mỹ"
                     title="Thế Giới Hoàn Mỹ">
                <span class="episode"><span class="episode-label">Tập </span>207</span>
            </figure>
            <div class="halim-post-title-box">
                <div class="halim-post-title">
                    <h2 class="entry-title">Thế Giới Hoàn Mỹ</h2>
                    <p class="original_title">Perfect World</p>
                </div>
            </div>
            <div class="icon_overlay"></div>
        </a>
    </div>
</article>

<article class="thumb grid-item post-11734">
    <div class="halim-item">
        <a class="halim-thumb" href="https://hoathinh3d.mom/hoa-phung-lieu-nguyen" title="Hỏa Phụng Liêu Nguyên">
            <figure>
                <img class="img-responsive" src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}"
                     alt="Hỏa Phụng Liêu Nguyên" title="Hỏa Phụng Liêu Nguyên">
                <span class="episode"><span class="episode-label">Tập </span>27</span>
            </figure>
            <div class="halim-post-title-box">
                <div class="halim-post-title">
                    <h2 class="entry-title">Hỏa Phụng Liêu Nguyên</h2>
                    <p class="original_title">Huo Feng Liao Yuan</p>
                </div>
            </div>
            <div class="icon_overlay"></div>
        </a>
    </div>
</article>


<article class="thumb grid-item post-11734">
    <div class="halim-item">
        <a class="halim-thumb" href="https://hoathinh3d.mom/hoa-phung-lieu-nguyen" title="Hỏa Phụng Liêu Nguyên">
            <figure>
                <img class="img-responsive" src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}"
                     alt="Hỏa Phụng Liêu Nguyên" title="Hỏa Phụng Liêu Nguyên">
                <span class="episode"><span class="episode-label">Tập </span>27</span>
            </figure>
            <div class="halim-post-title-box">
                <div class="halim-post-title">
                    <h2 class="entry-title">Hỏa Phụng Liêu Nguyên</h2>
                    <p class="original_title">Huo Feng Liao Yuan</p>
                </div>
            </div>
            <div class="icon_overlay"></div>
        </a>
    </div>
</article>
<article class="thumb grid-item post-11734">
    <div class="halim-item">
        <a class="halim-thumb" href="https://hoathinh3d.mom/hoa-phung-lieu-nguyen" title="Hỏa Phụng Liêu Nguyên">
            <figure>
                <img class="img-responsive" src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}"
                     alt="Hỏa Phụng Liêu Nguyên" title="Hỏa Phụng Liêu Nguyên">
                <span class="episode"><span class="episode-label">Tập </span>27</span>
            </figure>
            <div class="halim-post-title-box">
                <div class="halim-post-title">
                    <h2 class="entry-title">Hỏa Phụng Liêu Nguyên</h2>
                    <p class="original_title">Huo Feng Liao Yuan</p>
                </div>
            </div>
            <div class="icon_overlay"></div>
        </a>
    </div>
</article>



<article class="thumb grid-item post-11734">
    <div class="halim-item">
        <a class="halim-thumb" href="https://hoathinh3d.mom/hoa-phung-lieu-nguyen" title="Hỏa Phụng Liêu Nguyên">
            <figure>
                <img class="img-responsive" src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}"
                     alt="Hỏa Phụng Liêu Nguyên" title="Hỏa Phụng Liêu Nguyên">
                <span class="episode"><span class="episode-label">Tập </span>27</span>
            </figure>
            <div class="halim-post-title-box">
                <div class="halim-post-title">
                    <h2 class="entry-title">Hỏa Phụng Liêu Nguyên</h2>
                    <p class="original_title">Huo Feng Liao Yuan</p>
                </div>
            </div>
            <div class="icon_overlay"></div>
        </a>
    </div>
</article>


<article class="thumb grid-item post-11734">
    <div class="halim-item">
        <a class="halim-thumb" href="https://hoathinh3d.mom/hoa-phung-lieu-nguyen" title="Hỏa Phụng Liêu Nguyên">
            <figure>
                <img class="img-responsive" src="{{ asset('images/the-gioi-hoan-my-newposter.jpg') }}"
                     alt="Hỏa Phụng Liêu Nguyên" title="Hỏa Phụng Liêu Nguyên">
                <span class="episode"><span class="episode-label">Tập </span>27</span>
            </figure>
            <div class="halim-post-title-box">
                <div class="halim-post-title">
                    <h2 class="entry-title">Hỏa Phụng Liêu Nguyên</h2>
                    <p class="original_title">Huo Feng Liao Yuan</p>
                </div>
            </div>
            <div class="icon_overlay"></div>
        </a>
    </div>
</article>

  </div>








  <div class="clearfix"></div>
  <div class="text-center">
    <ul class="page-numbers">
      <li><span aria-current="page" class="page-numbers current">1</span></li>
      <li><a class="page-numbers" href="https://hoathinh3d.mom/page/2">2</a></li>
      <li><a class="page-numbers" href="https://hoathinh3d.mom/page/3">3</a></li>
      <li><span class="page-numbers dots">…</span></li>
      <li><a class="page-numbers" href="https://hoathinh3d.mom/page/16">16</a></li>
      <li><a class="next page-numbers" href="https://hoathinh3d.mom/page/2"><i class="hl-down-open rotate-right"></i></a></li>
    </ul>
  </div>
  </div> 

</section>