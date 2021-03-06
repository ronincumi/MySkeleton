Symfonian Indonesia Admin Skeleton
==================================

Ini adalah skeleton untuk [Symfonian Indonesia Admin Bundle](https://github.com/SymfonyId/AdminBundle)

###Pre Requirement

- NodeJs
- UglifyJs
- UglifyCss

Untuk menginstall diatas, dapat dibaca dokumentasi resmi [Symfony](http://symfony.com/doc/current/cookbook/assetic/uglifyjs.html)

Setting dan ubah bagian berikut sesuai dengan instalasi Anda:

```lang=yml
assetic:
    bundles: ['AppBundle', 'SymfonianIndonesiaAdminBundle']
    node: /usr/bin/nodejs #change to your path
    filters:
        cssrewrite: ~
        uglifyjs2:
            bin: /usr/local/bin/uglifyjs #change to your path
        uglifycss:
            bin: /usr/local/bin/uglifycss #change to your path
```

###Cara Install####

```lang=shell
git clone git@github.com:SymfonyId/Skeleton.git
```

Buat **database** sesuai kebutuhan(hanya database tanpa table apapun). Kemudian jalankan perintah berikut dari root project, jalankan composer install

```lang=shell
composer update --prefer-dist
```

Setelah semuanya terinstall jalankan

```lang=shell
php bin/console siab:skeleton:setup
```

Kemudian Anda dapat menjalankan web server dengan perintah

```lang=shell
php bin/console server:run
```

Buka browser

```lang=shell
localhost:8000/admin
```