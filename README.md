# DSS MCD
Projek ini dikerjakan menggunakan Laravel PHP Framework

### Menjalankan Program secara lokal
Buka terminal, dan jalankan
```bash
composer install
```

lalu jalankan 
```bash
npm install
```

copy .env.example dan ubah namanya menjadi .env, lalu generate app key. Lalu isi file .env dengan info database server Anda (username, password, etc.)
```bash
cp .env.example .env
php artisan key:generate
```

buat database dengan nama `dss_mcd` dan migrate database dengan menggunakan artisan
```bash
php artisan migrate
```

untuk mempopulasikan tabel `kriterias` yang berisi kriteria dan bobot nya, jalankan

```php
php artisan db:seed --class=KriteriaSeeder
```

program dapat dijalankan secara normal.

Repositori online dapat diakses melalui : https://github.com/Chillrend/dss-mcd

#### Sistem Pendukung Keputusan Karyawan Terbaik

CCIT 5B - 2019

Muhammad Farhan Hanif, Azka Dini Yuntari, Joshua Prima Pramono
