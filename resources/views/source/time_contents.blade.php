<style>
  nav#container-contents {
    background-color: #333;
    padding: 10px 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  nav#container-contents ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap; /* giúp hiển thị tốt hơn trên mobile */
  }

  nav#container-contents li {
    margin: 5px 10px;
  }

  nav#container-contents a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 6px;
    transition: background-color 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  nav#container-contents a:hover,
  nav#container-contents a.active {
    background-color: #555;
  }

  nav#container-contents .nav-item.active a {
    background-color: #ffc107;
    color: #000;
    font-weight: 700;
  }

  nav#container-contents span:first-child {
    font-size: 1.1em;
    font-weight: bold;
  }

  nav#container-contents span:last-child {
    font-size: 0.85em;
  }
</style>

<nav class="container" id="container-contents">
  <div class="container">
    <ul class="nav nav-pills nav-justified">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <span>Mới</span>
          <span>Cập Nhật</span>
        </a>
      </li>
      <li class="nav-item" data-id="thu-hai">
        <a class="nav-link" href="javascript:void(0);">
          <span>Mon</span>
          <span>Thứ Hai</span>
        </a>
      </li>
      <li class="nav-item" data-id="thu-ba">
        <a class="nav-link" href="javascript:void(0);">
          <span>Tue</span>
          <span>Thứ Ba</span>
        </a>
      </li>
      <li class="nav-item" data-id="thu-tu">
        <a class="nav-link" href="javascript:void(0);">
          <span>Wed</span>
          <span>Thứ Tư</span>
        </a>
      </li>
      <li class="nav-item" data-id="thu-nam">
        <a class="nav-link" href="javascript:void(0);">
          <span>Thu</span>
          <span>Thứ Năm</span>
        </a>
      </li>
      <li class="nav-item" data-id="thu-sau">
        <a class="nav-link" href="javascript:void(0);">
          <span>Fri</span>
          <span>Thứ Sáu</span>
        </a>
      </li>
      <li class="nav-item" data-id="thu-bay">
        <a class="nav-link" href="javascript:void(0);">
          <span>Sat</span>
          <span>Thứ Bảy</span>
        </a>
      </li>
      <li class="nav-item" data-id="chu-nhat">
        <a class="nav-link" href="javascript:void(0);">
          <span>Sun</span>
          <span>Chủ Nhật</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
