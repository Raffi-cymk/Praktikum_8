# Praktikum_8: PHP & Database MySQL

Tujuan Praktikum

Tujuan praktikum ini adalah:

1. Memahami konsep dasar database.
2. Memahami konsep dasar operasi CRUD menggunakan PHP.
3. Mampu membuat program CRUD sederhana yang terhubung dengan database MySQL.

---

# Langkah Kerja
1. Menjalankan Web Server

Mengaktifkan Apache dan MySQL melalui XAMPP Control Panel.

Mengakses phpMyAdmin melalui browser pada alamat:
http://localhost/phpmyadmin/

2. Membuat Database

Membuat database baru dengan nama latihan1 menggunakan perintah:
CREATE DATABASE latihan1;

3. Membuat Tabel data_barang

Menjalankan SQL untuk membuat tabel:

CREATE TABLE data_barang (
  id_barang int(10) auto_increment Primary Key,
  kategori varchar(30),
  nama varchar(30),
  gambar varchar(100),
  harga_beli decimal(10,0),
  harga_jual decimal(10,0),
  stok int(4)
);


Setelah dijalankan, tabel dapat dilihat melalui menu Struktur pada phpMyAdmin.


4. Menambahkan Data Awal

Data dapat ditambahkan melalui menu Tambahkan di phpMyAdmin.
Contoh data yang dimasukkan:

Elektronik – HP Samsung Android

Harga beli 2.000.000

Harga jual 2.400.000

Stok 5


5. Mempersiapkan Folder Project

Pada direktori web server (htdocs), dibuat folder:

lab8_php_database/


Seluruh file PHP CRUD diletakkan di dalam folder ini.

6. Membuat File koneksi.php

File ini digunakan untuk menghubungkan PHP dengan database MySQL.

7. Membuat File index.php (Read)

File ini menampilkan seluruh data dari tabel data_barang dalam bentuk tabel HTML.

8. Membuat File tambah.php (Create)

Digunakan untuk menambah data baru melalui form input.

9. Membuat File ubah.php (Update)

Digunakan untuk memperbarui data yang sudah ada.

10. Membuat File hapus.php (Delete)

Digunakan untuk menghapus data berdasarkan id_barang.

---

# Penjelasan Screenshot
**1. Screenshot Pembuatan Database dan Tabel**

Menampilkan proses pembuatan database latihan1 dan tabel data_barang di phpMyAdmin.

<img width="1072" height="590" alt="Screenshot 2025-11-19 131053" src="https://github.com/user-attachments/assets/c50417dc-6c18-42fb-96e4-cc77a7731b95" />


**2. Screenshot SQL CREATE TABLE**

Menampilkan proses menjalankan perintah SQL untuk membuat struktur tabel.

<img width="705" height="384" alt="Screenshot 2025-11-19 133451" src="https://github.com/user-attachments/assets/327ed32d-cd52-48a1-8d5f-2defa720f10b" />


**3. Screenshot Struktur Tabel**

Menampilkan seluruh kolom yang telah terbentuk (id_barang, kategori, nama, gambar, harga_beli, harga_jual, stok).

<img width="1323" height="476" alt="Screenshot 2025-11-19 141012" src="https://github.com/user-attachments/assets/27e22447-3950-4484-8b1d-dbc8b4626783" />


**4. Screenshot Tampilan Awal Folder Project di Browser**

Menampilkan halaman Index of / saat mengakses:
http://localhost/lab8_php_database/
Menunjukkan bahwa semua file CRUD sudah berada di direktori web server.

<img width="643" height="478" alt="Screenshot 2025-11-19 141930" src="https://github.com/user-attachments/assets/495fafd8-1905-4ca8-bece-ccc0574ee2c9" />


**5. Screenshot Tampilan Data Barang (Tampilan Akhir)**

Menunjukkan tampilan data barang yang langsung muncul saat folder project diakses, berisi:

Gambar

Nama Barang

Kategori

Harga Beli

Harga Jual

Stok

<img width="731" height="288" alt="Screenshot 2025-11-19 141940" src="https://github.com/user-attachments/assets/e902e3b0-f2b0-451b-a908-292a6fd65d9f" />

Seluruh data tersebut tampil dari hasil pemanggilan file PHP pada folder project, yang menggabungkan seluruh proses CRUD yang telah dibuat sebelumnya.
Tampilan ini merupakan hasil akhir dari praktikum, yaitu data barang yang berhasil ditampilkan dari database.

---

# Kesimpulan

Praktikum ini berhasil menghasilkan aplikasi CRUD sederhana menggunakan PHP dan MySQL.
Proses yang dicapai:

* Menambah data (Create)
* Menampilkan data (Read)
* Mengubah data (Update)
* Menghapus data (Delete)

Seluruh fitur berjalan dengan baik pada lingkungan XAMPP dan dapat diakses melalui browser.
