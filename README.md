# Laravel-Blog
Code ประกอบจากวิดีโอ https://www.youtube.com/watch?v=wA75lGFF9E8

##การติดตั้ง

1. เปิด command พิมพ์ composer install
2. สร้างฐานข้อมูลขึ้นมา แล้วไปตั้งค่าชื่อฐานข้อมูลในไฟล์ config/database.php หรือ .env
3. เปิด command พิมพ์ php artisan migrate
4. ต้อง insert user เองไปที่ database
5. เปิด command พิมพ์ php artisan serve แล้วเข้าระบบ url: 127.0.0.1:8000

กรณีที่เอาไฟล์ sql import เข้า database ไม่ต้องทำขั้นตอน 3-4