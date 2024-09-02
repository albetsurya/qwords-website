Pastikan Anda telah menginstal perangkat lunak berikut di sistem Anda:

PHP >= 7.4
Composer
Node.js & npm (versi terbaru direkomendasikan)
Git
Instalasi
Ikuti langkah-langkah di bawah ini untuk menyiapkan proyek di lingkungan lokal Anda.

1. Clone repositori:
    ``git clone https://github.com/username/repository.git
cd repository``

2. Instal dependensi PHP:
    ``composer install``

3. Instal dependensi JavaScript:
   ``npm install``

4. Untuk mengompilasi asset frontend, jalankan:
   ``npm run dev``

5. Atau, jika Anda ingin menjalankan secara otomatis saat ada perubahan file:
   ``npm run watch``


**Setelah semua instalasi selesai, Anda dapat menjalankan server pengembangan Laravel dengan perintah berikut:**
``php artisan serve``

Akses aplikasi di browser Anda melalui http://localhost:8000.

Struktur Direktori Penting
app/: Berisi file PHP utama untuk aplikasi, seperti model, controller, dan lainnya.
resources/views/: Berisi file blade template untuk tampilan frontend.
resources/js/: Berisi file JavaScript yang akan dikompilasi oleh Laravel Mix.
resources/sass/: Berisi file SCSS yang akan dikompilasi oleh Laravel Mix.
public/: Direktori ini berisi file hasil kompilasi (CSS, JS) yang akan diakses oleh pengguna.
