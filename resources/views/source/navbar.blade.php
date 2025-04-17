<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Bootstrap - Font Đẹp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQmXVf9TB/5sGczn0jl0jjeWUAVTm1lbxv0Y/VhCQPd17hAOVAEAdy9CTr+J+b06FXcVyVmObcnKMHeKnCw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Nunito', sans-serif; /* Sử dụng font Nunito mặc định cho toàn trang */
        }

        .navbar {
            background-color: #1f2021 !important;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link:focus {
            color: #a0aec0; /* Màu hover nhạt hơn */
        }

        .navbar-dark .navbar-nav .active > .nav-link,
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .show > .nav-link {
            color: #4299e1; /* Màu active nổi bật */
        }

        .dropdown-menu {
            background-color: #2d3748; /* Nền tối hơn cho dropdown */
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .dropdown-item {
            color: #fff;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: #4a5568;
            color: #fff;
        }

        .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: .255em;
            vertical-align: .255em;
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" title=" Trang chủ" href="https://hoathinh3d.mom/">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        &nbsp;Trang chủ
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Thể Loại">
                        Thể Loại 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" title="Huyền Huyễn" href="https://hoathinh3d.mom/huyen-huyen">Huyền Huyễn</a>
                        <a class="dropdown-item" title="Xuyên Không" href="https://hoathinh3d.mom/xuyen-khong">Xuyên Không</a>
                        <a class="dropdown-item" title="Trùng Sinh" href="https://hoathinh3d.mom/trung-sinh">Trùng Sinh</a>
                        <a class="dropdown-item" title="Tiên Hiệp" href="https://hoathinh3d.mom/tien-hiep">Tiên Hiệp</a>
                        <a class="dropdown-item" title="Cổ Trang" href="https://hoathinh3d.mom/co-trang">Cổ Trang</a>
                        <a class="dropdown-item" title="Hài Hước" href="https://hoathinh3d.mom/hai-huoc">Hài Hước</a>
                        <a class="dropdown-item" title="Kiếm Hiệp" href="https://hoathinh3d.mom/kiem-hiep">Kiếm Hiệp</a>
                        <a class="dropdown-item" title="Hiện Đại" href="https://hoathinh3d.mom/hien-dai">Hiện Đại</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Phim Lẻ" href="https://hoathinh3d.mom/phim-hoat-hinh-3d-le">Phim Lẻ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title=" Đang Chiếu" href="https://hoathinh3d.mom/phim-dang-chieu">
                        <i class="fas fa-sync" aria-hidden="true" style="font-size:1.3em;"></i>
                        &nbsp;Đang Chiếu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title=" Lịch Chiếu" href="https://hoathinh3d.mom/lich-chieu">
                        <i class="far fa-calendar-times" aria-hidden="true"></i>
                        &nbsp;Lịch Chiếu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title=" Hoàn Thành" href="https://hoathinh3d.mom/phim-hoan-thanh">
                        <i class="far fa-check-circle" aria-hidden="true" style="font-size:1.4em;"></i>
                        &nbsp;Hoàn Thành
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title=" Top 10 HH3D" href="https://hoathinh3d.mom/bang-xep-hang-hoat-hinh-trung-quoc">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        &nbsp;Top 10 HH3D
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title=" Đánh Giá Cao" href="https://hoathinh3d.mom/hh3d-danh-gia-cao">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        &nbsp;Đánh Giá Cao
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>