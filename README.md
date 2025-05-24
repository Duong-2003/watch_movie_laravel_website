"1. composer install
Mục đích: Cài đặt tất cả các thư viện (package) được khai báo trong file composer.json.

Khi chạy lệnh này, Composer sẽ tải và cài đặt các package cần thiết vào thư mục vendor/.

2. mv .env.example .env
Mục đích: Đổi tên file .env.example thành .env.

File .env chứa các cấu hình môi trường (database, mail, key,...) cho ứng dụng Laravel.

Bạn thường bắt đầu dự án bằng việc copy hoặc rename file .env.example thành .env để chỉnh sửa các thông số phù hợp.

3. php artisan cache:clear
Mục đích: Xóa cache của ứng dụng Laravel.

Cache ở đây bao gồm các dữ liệu tạm như cấu hình, route, view,... giúp Laravel chạy nhanh hơn.

Khi bạn thay đổi cấu hình hoặc code, nên chạy lệnh này để đảm bảo Laravel load dữ liệu mới nhất.

4. composer dump-autoload
Mục đích: Tái tạo file autoload của Composer.

Khi bạn thêm hoặc sửa đổi các class hoặc namespace, lệnh này giúp Composer nhận diện đúng và autoload các class.

5. php artisan key:generate
Mục đích: Tạo khóa ứng dụng mới và ghi vào file .env.

Khóa này được sử dụng để mã hóa dữ liệu (session, password reset, etc.).

Quan trọng để đảm bảo an toàn cho ứng dụng.

6. php artisan config:clear
Mục đích: Xóa cache cấu hình ứng dụng.

Khi bạn thay đổi các thông số trong file .env hoặc config, lệnh này sẽ giúp Laravel không dùng cache cấu hình cũ.

7. php artisan cache:clear
Lặp lại lệnh này nhằm đảm bảo cache được xóa sạch.

8. php artisan migrate
Mục đích: Thực thi các migration, tạo hoặc sửa bảng trong cơ sở dữ liệu.

Migration là cách quản lý thay đổi database bằng file code, dễ dàng deploy.

Khi chạy lệnh này, Laravel sẽ áp dụng tất cả các migration chưa chạy vào database.



cp .env.example .env
gc .env
type .env
notepad .env
code .env
