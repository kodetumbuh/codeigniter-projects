# Kumpulan Repository Codeigniter

## Referensi Web Tutorial

[sumber](https://makitweb.com/make-pagination-with-search-filter-in-codeigniter-4/)

## Cara Menginstall

[referensi](https://codeigniter4.github.io/userguide/installation/installing_composer.html#adding-codeigniter4-to-an-existing-project)
masukan perintah command line di projek `composer require codeigniter4/framework`
membuat duplikat `env` dan rename menjadi `.env` serta ubah beberapa dan hapus # kode menjadi seperti ini
`CI_ENVIRONMENT = development`
`database.default.hostname = localhost
 database.default.database = ci4_pagination
 database.default.username = root
 database.default.password = 
 database.default.DBDriver = MySQLi
 database.default.DBPrefix =
 database.default.port = 3306`
membuat database baru dengan nama `ci4_pagination`
masukan perintah command line di projek `php spark migrate` dan `php spark db:seed`
command line akan meminta Seed maka ketikan `UserSeed`
jalankan projek dengan dengan perintah command line `php spark serve`


## Kebutuhan Server

Anda bisa menggunakan XAMPP atau Laragon yang penting versi php ^7.4 || ^8.0 

## Perhatian

untuk catatan, kode ini akan digunakan  kembali untuk keperluan projek jadi projek masih prematur masih memerlukan costumisasi lagi agar sesuai yang diharapkan atau setidaknya lengkap, struktur folder ini bisa saja berubah tanpa pemeberitahuan terlebih dahulu terimakasih