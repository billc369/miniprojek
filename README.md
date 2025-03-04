# miniprojek
Sistem Tabungan Mahasiswa berbasis PHP dan MySQL

Todo
[x] Setup Database
[x] Login
[] Register
[] User add saving (amount + message)
[] Admin System (Can see everybody's savings)
[] Logout
[] Middleware to check admin and login

Notes to document
- Cara mengatur database
1. Buka XAMPPP
2. Aktifkan Apache dan MySQL
3. Buka http://localhost/phpmyadmin
4. Import Database dari file database.sql
5. Database telah dibuat

- Cara menjalankan proyek secara lokal
. menjalankan server pake command php -S localhost:8000 di terminal
. sudah bisa masuk ke beberapa page (belum logic):
1. http://localhost:8000/index.php?url=home
2. http://localhost:8000/index.php?url=login
3. http://localhost:8000/index.php?url=logout
4. http://localhost:8000/index.php?url=register
5. http://localhost:8000/index.php?url=admin
6. http://localhost:8000/index.php?url=save

- Fitur utama yang telah diimplementasikan



- Perubahan setiap commit
1. Commit 1: setup database
2. Commit 2: tes commit
3. Commit 3: menjalankan server pake local command php -S localhost:8000
4. Commit 4: bisa akses beberapa page
5. Commit 5: Page Login sudah dibuat interfacenya, tapi bagian send POST form ke backend blm dibuat.
6. Commit 6: setiap page sudah ada form nya, jadi sudah bisa input data ke dalam form page
7. Commit 7: server sudah bisa terima semua POST nya, tapi blm bisa cek atau proses dari database. Jadi blm ada verification from dari database and data processing. Hanya bisa terima.
8. Commit 8: sudah connect ke DB, dan sudah bisa verify user, tapi blm buat session, and blm bedain admin sama user biasa
9. Commit 9: Register juga Sudah connected to DB
10. Commit 10: Add savings to DB