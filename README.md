# PEMROGRAMAN WEB
Nama  : Asri Liya Astuti

NIM   : 312010104  

Kelas : TI.20.B1

## Pratikum 8

Instruksi Praktikum

 1. Persiapkan text editor misalnya VSCode.
 2. Buat folder baru dengan nama lab8_php_database pada docroot webserver (htdocs)
 3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.
   
   Langkah-langkah Praktikum
   
   Persiapan :
  
  Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.
   Menjalankan MySQL Server.
   Untuk menjalankan MySQL Server dari menu XAMPP Control. 
![Screenshot(371).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(371).png)

### Mengakses MySQL Client menggunakan PHP MyAdmin
Pastikan webserver Apache dan MySQL server sudah dijalankan. Kemudian buka melalui browser: http://localhost/phpmyadmin/
    
#### Membuat Database

CREATE DATABASE latihan 1;

![Screenshot(380).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(380).png)

### Membuat Tabel

CREATE TABLE data_barang (

 id_barang int(10) auto_increment Primary Key,
 
 kategori varchar(30),
 
 nama varchar(30),
 
 gambar varchar(100),
 
 harga_beli decimal(10,0),
 
 harga_jual decimal(10,0),
 
 stok int(4)
 
);

![ss.png](https://github.com/asriliya/Lab8Web/blob/main/Pict/03.Gambar_Code_CREATE_TABLE_data_barang.jpg)

### Menambahkan Data

INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok)

VALUES ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),

('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),

('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);

![Screenshot(378).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(378).png)

### Membuat Program CRUD
Buat folder lab8_php_database pada root directory web server (D:\xampp\htdocs)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab8_php_database/

### Membuat file koneksi database
Buat file baru dengan nama koneksi.php
![Screenshot(372).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(372).png)
Buka melalui browser untuk menguji koneksi database (untuk menyampilkan pesan koneksi berhasil, uncomment pada perintah echo “koneksi berhasil”;

### Membuat file index untuk menampilkan data (Read)
Buat file baru dengan nama index.php
![Screenshot(377).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(377).png)
Untuk lebih jelasnya, coding.an seperti di folder atas ya.

Buka melalui browser http://localhost/lab8_php_database/

![Ss(370).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(370).png)

### Menambah Data (Create) 
Buat file baru dengan nama tambah.php
![screenshot(374).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(374).png)
![Screenshot(368).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(368).png)

### Mengubah Data (Update)
Buat file baru dengan nama ubah.php
![Screenshot(375).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(375).png)
Untuk lebih jelasnya, codingan seperti folder diatas.

Hasil output:
![Screenshot(369).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(369).png)

### Menghapus Data (Delete)
Buat file baru dengan nama hapus.php
![Screenshot(373).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(373).png)
![Screenshot(367).png](https://github.com/asriliya/Lab8Web/blob/main/Pict/Screenshot%20(367).png)

## SEKIAN dan TERIMA KASIH :)







