Jadi COmposer ini adalah Dependency Management Tool yang populer di PHP
Composer ini terinspirasi dari NPM (nodejs) dan Bundler (ruby)

Dengan composer inicukup buat konfigurasi file yang berisi library yang dibutuhkan
Bisa update library juga di file konfigurasinya
File yang berisi depedency itu pake format .json


Jsdi kalo mau commit ke git jangan commit vendornya, cukup lock sama json nya

Composer update akan mengupdate dan menginstall dari .json
Composer install buat install yang udah ada di lock

Kalo gamau make composer lagi tinggal hapus .json, .lock sama vendornya

Cara include file library nya adalah dengan cara __DIR__."/venfor/autoload.php"

Bisa memasukkan source code sendiri menggunakan fitur autoload agar gaperlu include satu satu lagi
Tapi ada standart nya untuk melakukan autoload
Harus ubah file .json untuk menambahkan autoload
Kalo file .json nya diubah pake composer dump-autoload

Kalo filenya ada di namespace yang sesuai dengan di file .josn maka foldernya sama
Tapi klao namespace nya ditambahin, maka harus ada di folder yang ditambahkan dengan namespace nya
Misal namsespace Code = src, Code\]Coba = src\Coba
filenamenya juga harus sama kayak nama classnya kayak java

Repository sebagai temoat untuk menyimpan semua library sama framework dari composer
Secara default repo yang digunakan di Packagist, bisa nambahin repo sendiri juga

Repository ini juga bisa disimpan di github

Bisa menambahkan depedency menggunakan composer, ada 2 jenis, yaitu library ketika development dan ketika aplikasi berjalan
Untuk menambah library di composer bisa dengan menambahkan attribute require ketika aplikasi berjalan
require-dv digunakan hanya ketika dilakukan development
Buat pake library, harus tau versi librarynya
Ada beberapa cara menggunakan versi library di composer
Biasanya versinya mengikuti semantic versioning dengan format (MAJOR.MINOR.PATCH)
Bisa pake versi range seperti >=1.0 <2.0, 1.0 - 2.0, 1.0.* (* ini akan mengikuti versi terbaru)

Cara membuat library menggunakan composer
Cara membuatnya sama, tapi di package type nya nanti pake library bukan project

Library yang telah dibuat bisa di up ke git repository
Library yang di up ke github bisa di download, dan jika public bisa dipake sama orang lain juga
git repository juga bisa ditambahkan sebagai depedency di composer dengan cara
"repositories": [
    {
        "type": "vcs",
        "url": "url githubnya"
    }
],
"require": {
    "php": ">=8.0",
    "ini name di file .json nya": "versi tag di githubnya",
    "monolog/monolog": "versi monolognya"
}

Bagaimana cara update librarynya di composer pada github dengan membuat tag baru
Lalu ubah di file jason versinya

Bisa juga library yang sudah dibuat di submit ke packagist yang librarynya open source
Packagist ini akan otomatis mendeteksi versinya dengan yang ada di github
Keuntungan up ke packagist gaperlu lagi nambahin satu-satu repositoriesnya

Masih ada fitur lain dari composer
- Script : Digunakan untuk membuat custom script
Contoh
"scripts"; {
    "jalankan-server": "php -S localhost:8080",
    "hello": "echo 'Hello World'"
}

- plugin
- vendor binary (jika mau jalanin binary file, library yang populer adalah PHPUnit)

