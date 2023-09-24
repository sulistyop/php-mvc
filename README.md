- [Penjelasan MVC](#Singkatan-MVC)
- [Instalasi Aplikasi](#Instalasi-Proyek-Menggunakan-Composer)
- [Prasyarat](#Prasyarat)

# Model-View-Controller (MVC) - Singkatan dan Konsep Dasar

MVC adalah sebuah pola desain arsitektur perangkat lunak yang membagi aplikasi menjadi tiga komponen utama: Model, View, dan Controller. Pola desain ini membantu dalam mengorganisasi kode, memisahkan tanggung jawab, dan membuat aplikasi lebih mudah untuk dipahami dan dikembangkan.

## Singkatan MVC

MVC merupakan singkatan dari tiga komponen utamanya:

- **Model**: Merepresentasikan data dalam aplikasi. Ini mencakup berbagai jenis data seperti data permintaan (request), data respons (response), data tabel, dan lain-lain. Model bertanggung jawab untuk mengelola data dan logika bisnis terkait.

- **View**: Merepresentasikan tampilan dari aplikasi, yang dapat berupa halaman web, antarmuka desktop, aplikasi mobile, atau bentuk lainnya. View bertanggung jawab untuk menampilkan data dari Model kepada pengguna.

- **Controller**: Bertanggung jawab atas alur kerja aplikasi. Ini menerima input dari pengguna, memanipulasi data yang ada di Model, dan mengarahkan tampilan yang sesuai di View. Controller dianggap sebagai inti logika dari aplikasi.

## Konsep Dasar

Pola desain MVC membantu dalam menciptakan pemisahan yang jelas antara komponen-komponen tersebut, sehingga memudahkan pemeliharaan, pengembangan, dan pengujian aplikasi. Berikut adalah beberapa konsep dasar dalam MVC:

- **Pemisahan Tanggung Jawab**: Setiap komponen memiliki tanggung jawab yang jelas. Model mengurus data, View menangani tampilan, dan Controller mengatur alur kerja. Hal ini mengurangi ketergantungan antara komponen-komponen tersebut.

- **Reusabilitas**: Kode dalam aplikasi MVC dapat digunakan kembali dengan mudah. Model dapat digunakan di berbagai bagian aplikasi, dan View dapat digunakan dengan Controller yang berbeda. Ini meningkatkan efisiensi pengembangan.

- **Pengujian yang Mudah**: Pemisahan yang baik antara Model, View, dan Controller memudahkan pengujian aplikasi. Anda dapat menguji setiap komponen secara terpisah untuk memastikan bahwa semuanya berfungsi dengan baik.

- **Skalabilitas**: MVC memungkinkan aplikasi untuk berkembang dengan mudah. Anda dapat menambahkan lebih banyak Model, View, dan Controller sesuai kebutuhan tanpa mengganggu komponen yang sudah ada.

Dengan memahami konsep dasar MVC dan singkatannya, Anda dapat mengorganisasi kode Anda dengan lebih baik, membuat aplikasi yang lebih modular, dan meningkatkan kualitas pengembangan perangkat lunak.

**Selamat mengembangkan aplikasi Anda dengan MVC!**

# Instalasi Proyek Menggunakan Composer

Ini adalah panduan singkat tentang cara menginstal proyek ini menggunakan Composer. Composer adalah alat manajemen dependensi PHP yang digunakan untuk mengelola dependensi dan pustaka yang diperlukan dalam proyek PHP.

## Prasyarat

Sebelum Anda mulai menginstal proyek menggunakan Composer, pastikan Anda telah memenuhi prasyarat berikut:

- [Composer](https://getcomposer.org/download/): Anda harus menginstal Composer pada sistem Anda. Pastikan Composer dapat diakses dari baris perintah.
- [PHP 8](https://www.php.net/downloads): Anda harus menginstal PHP pada sistem Anda. Pastikan PHP Menggunakan version >8.

## Langkah-langkah Instalasi

Berikut adalah langkah-langkah untuk menginstal proyek ini menggunakan Composer:

1. **Clone Repositori**: Clone repositori proyek ini ke direktori lokal Anda dengan perintah berikut:

   ```bash
   git clone https://github.com/sulistyop/php-mvc.git
   
2. **Install Menggunakan Composer**: Install dependency yang dibutuhkan dengan perintah berikut:
    ```bash
   composer install
   
3. **Menjalankan Aplikasi / Server**: Eksekusi command berikut di Terminal anda. 
    ```bash
   php - S localhost:8080
   
4. **Buka Browser Anda dan akses Url** `localhost:8080`.
5. Selamat Belajar.