# Laporan Modul 1: Perkenalan Laravel
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Deva Risny  
**NIM:** 2024573010060  
**Kelas:** TI-2C 

---

## Abstrak 
Praktikum ini membahas penggunaan Laravel sebagai framework PHP untuk membuat aplikasi web. Membahas struktur Laravel, komponen utama seperti routing, controller, blade, dan eloquent ORM, serta cara melakukan testing dengan PHPUnit. Dari hasil praktikum, Laravel dapat mempermudah pembuatan aplikasi karena kodenya lebih rapi, teratur, dan mudah dikembangkan.


---

## 1. Pendahuluan

Laravel adalah salah satu framework PHP yang paling populer dan serbaguna di dunia saat ini. dipilih oleh Taylor Otwell pada tahun 2011, Laravel telah merevolusi cara pengembang web membangun aplikasi dengan PHP. Membantu pembangunan situs Web atau Aplikasi Online dengan lebih mudah dan cepat. Slogannya “The PHP Framework” pada laravel dibuat dengan bahasa pemrograman PHP, dan bagian “for Web Artisan” artisan diambil dari kata seniman yang mana laravel ini ditujukan untuk para seniman web.                  

Laravel adalah framework PHP open-source yang dirancang untuk membuat pengembangan web menjadi lebih mudah dan lebih cepat. Secara default, framework ini menggunakan pola arsitektur MVC (Model-View-Controller) yang membantu memisahkan logika aplikasi dari tampilan dan pengelolaan data. Framework ini menawarkan berbagai alat dan pustaka yang membantu pengembang dalam menangani berbagai aspek pengembangan web, mulai dari routing, otentikasi, hingga manajemen basis data.

Karakteristik utama MVC adalah:
- Proses pengujian program yang mudah dan minim masalah. MVC adalah framework yang sangat mudah untuk diuji,    dapat dikembangkan, dan dapat diterapkan di kode pr0gram apapun.
- Untuk mengembangkan aplikasi web menggunakan pola Model-View-Controller, MVC akan menawarkan kontrol penuh atas HTML serta URL.
- Framework yang memanfaatkan fitur yang disediakan oleh ASP.NET, JSP, Django, dan sejenisnya.
- Sesuai dengan pengertian sebelumnya, MVC adalah komponen pemrograman yang memisahkan 3 logika: Model, View, Controller.
- Pola pengembangan aplikasi yang mendukung Test Driven Development (TDD).
 
Laravel adalah salah satu framework PHP yang cocok digunakan untuk membangun berbagai jenis aplikasi web. Beberapa contoh aplikasi yang dapat dikembangkan dengan Laravel antara lain e-commerce, platform media sosial, sistem manajemen konten CMS, aplikasi blogging, portal lowongan kerja, hingga Progressive Web App (PWA). Kelebihan utama Laravel terletak pada kemampuannya dalam mengelola data yang kompleks, fitur keamanan yang baik, serta kemudahan pengembangan melalui penerapan pola Model-View-Controller (MVC).

---

## 2. Komponen Utama Laravel (ringkas)

- Blade (templating)<br>
Blade adalah mesin templating Laravel yang ringan, tapi tetap kuat. Blade memungkinkan pengembang untuk menggunakan sintaksis sederhana untuk membuat tampilan dinamis dan dapat digunakan kembali. Jadi kita tidak perlu menulis kode berulang kali untuk membuat sebuah tampilan yang berulang seperti header, navbar, dan footer.

- Eloquent (ORM)<br>
Eloquent adalah sebuah ORM ( Object-Relational-Mapping ) yang disediakan oleh Laravel untuk mengakses dan memanipulasi data dalam database menggunakan PHP Objects dan model-model terkait. Salah satu fitur yang disediakan oleh Eloquent ORM adalah terdapat fungsi-fungsi query SQL untuk mengelola data pada database sehingga kita tidak perlu mengetik query SQL secara manual. Selain itu, Eloquent juga memudahkan kita ketika ingin berinteraksi dengan database , yaitu menyediakan Object-Oriented Approach untuk menambah, memperbarui, dan menghapus data, sehingga memudahkan kita dalam mengelola data dalam aplikasi.

- Routing<br>
Laravel menyediakan sistem routing yang sederhana dan fleksibel untuk menangani request berdasarkan URL. Rute didefinisikan di routes/web.php untuk aplikasi web dan routes/api.php untuk API. Selain itu, Laravel juga menambahkan middleware seperti session dan CSRF protection agar aplikasi lebih aman.

- Controllers<br>
Controller di Laravel berfungsi sebagai penghubung antara route, model, dan view. Semua logika aplikasi sebaiknya ditempatkan di controller agar kode lebih rapi, terorganisir, dan mudah untuk dikembangkan. Dengan begitu, route hanya berisi definisi jalur, sementara controller menangani proses bisnisnya.

- Migrations & Seeders<br>
Laravel menyediakan sistem migrasi dan seeder yang kuat untuk mengelola skema basis data, . Pengembang dapat dengan mudah membuat, mengubah, dan menghapus tabel serta mengisi tabel dengan data dummy untuk pengujian

- Artisan CLI<br>
Artisan CLI: Artisan adalah command line interface (CLI) milik Laravel yang menawarkan berbagai perintah bawaan untuk mempermudah pengembangan. Dengan Artisan, pengembang dapat membuat kontroler, model, dan komponen lainnya hanya dengan beberapa perintah.

- Testing (PHPUnit)<br>
Laravel dirancang dengan mempertimbangkan pengujian. Framework menyediakan integrasi dengan PHPUnit secara bawaan melalui file phpunit.xml, sehingga pengujian otomatis terhadap kode bisa langsung dilakukan. Testing ini memastikan fitur berjalan sesuai harapan, mencegah bug saat ada perubahan, dan menjaga kualitas aplikasi tetap stabil



---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.
Berikut adalah folder-folder yang tersedia secara default:
1. App<br>
 Folder app berisi kode-kode inti dari aplikasi seperti Model, Controller, Commands, Listener, Events, dll. Poinnya, hampir semua class dari aplikasi berada di folder ini.
2. Bootstrap<br>
 Folder bootstrap berisi file app.php yang dimana akan dipakai oleh Laravel untuk boot setiap kali dijalankan.
3. Config<br>
 Folder config seperti namanya, berisi semua file konfigurasi aplikasi Anda.
4. Database<br>
 Folder database berisi database migrations, model factories, dan seeds. Folder ini akan bertanggung jawab dengan pembuatan dan pengisian tabel-tabel database.
5. Public<br>
 Folder public memiliki file index.php yaitu entry point dari semua requests yang masuk/diterima ke aplikasi. Folder ini juga tempat menampung gambar, Javascript, dan CSS.
6. Resources<br>
 Folder resources berisi semua route yang disediakan aplikasi. Sebagai default, beberapa file routing akan tersedia seperti: web.php, api.php, console.php, dan channels.php. Folder ini adalah tempat dimana kita memberikan koleksi definisi route aplikasi.
7. Storage<br>
 Folder storage adalah tempat dimana cache, logs, dan file sistem yang ter-compile hidup.
8. Tests<br>
 Folder tests adalah tempat dimana unit dan integration tests tinggal.
9. Vendor<br>
 Folder vendor adalah dimana tempat folder-folder dependencies third-party yang telah di-install oleh composer berada.

Berikut adalah file-file yang tersedia secara default:
1. .editorconfig <br>
    Berguna untuk memberi IDE/text editor instruksi tentang standar coding Laravel seperti whitespace, besar identasi, dll.
2. .env dan .env.example <br>
    Tempat dimana variable environment aplikasi ditempatkan (variabel yang diekspektasikan akan berbeda di setiap sistem) seperti nama database, username database, password database. 
3. .gitignore dan .gitattributes <br>
    File konfigurasi git.
4. artisan <br>
    Memungkinkan anda untuk menjalankan perintah artisan dari command line.
5. composer.json dan composer.lock <br>
 File konfigurasi untuk composer. File ini adalah informasi dasar tentang projek dan juga mendefinisikan dependencies yang digunakan.
6. package.json<br>
 Mirip-mirip dengan composer.json tapi untuk aset-aset dan dependencies front-end.
7. phpunit.xml<br>
 Sebuah file konfigurasi untuk PHPUnit, tools yang digunakan Laravel untuk testing.
8. readme.md<br>
 Sebuah markdown file yang memberikan pengenalan dasar tentang Laravel.
9. server.php<br>
 Server cadangan yang mencoba untuk tetap menjalankan aplikasi Laravel kepada server yang kurang mampu.
10. webpack.mix.js <br>
 Konfigurasi file untuk Mix (opsional). File ini adalah untuk membangun arahan system soal bagaimana meng-compile


---

## 4. Diagram MVC dan Cara kerjanya

Model View Controller (MVC) adalah sebuah pola arsitektur dalam pengembangan  aplikasi dengan membagi kode menjadi tiga, yaitu Model, view, controller. Hal ini bertujuan agar aplikasi lebih tersetruktur dan mudah di kelola. 
- Model
Bertugas menyiapkan, mengatur, memanipulasi, dan mengorganisasi data yang ada di database.
- View
Bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).
- Controller
Bertugas menghubungkan serta mengatur alur kerja antara Model dan View agar dapat saling berinteraksi.

Cara kerja MVC:
- Proses pertama adalah view akan meminta data untuk ditampilkan dalam bentuk grafis kepada pengguna.
- Permintaan tersebut diterima oleh controller dan diteruskan ke model untuk diproses.
- Model akan mencari dan mengolah data yang diminta di dalam database
- Setelah data ditemukan dan diolah, model akan mengirimkan data tersebut kepada controller untuk ditampilkan di view.
- Controller akan mengambil data hasil pengolahan model dan mengaturnya di bagian view untuk ditampilkan kepada pengguna.

<img src="../laporan1/gambar/Diagram MVC.jpg">


---

## 6. Kelebihan & Kekurangan (refleksi singkat)
Kelebihan Laravel menurut saya, Laravel adalah Laravel memiliki komunitas yang besar dan aktif, sehingga ketika menghadapi kendala, solusinya relatif mudah ditemukan. Laravel juga memiliki  dokumentasi resminya yang sangat lengkap sehingga mudah dipelajari, Laravel menggunakan pola MVC yang membuat kode lebih rapi dan terorganisir, selain itu terdapat fitur-fitur bawaan seperti Blade, Eloquent ORM, Artisan, dan sistem autentikasi migration database yang dapat mempercepat sekaligus mempermudah proses pengembangan aplikasi. Dari keamanan Laravel memberikan perlidungan yg kuat, Laravel juga mendukung integrasi dengan berbagai layanan modern, sehingga menjadi fleksibel saat pembuatan aplikasi baik dalam skala kecil maupun besar.

Hal yang mungkin menjadi tantangan bagi pemula biasa terletak pada banyaknya fitur dan konsep yang harus dipahami sekaligus, seperti MVC, routing, Eloquent ORM, hingga Blade. Pemula juga harus memiliki dasar PHP  agar tidak kesulitan ketika menghadapi sintaks dan memahami konsep-konsep lanjutan. Proses instalasi dan konfigurasi awal sering kali membingungkan jika belum terbiasa dengan Composer untuk manajemen package, PHP, dan server lokal karena Laravel mengandalkan command line (Artisan). Selain itu, pemahaman tentang konsep OOP (Object-Oriented Programming) sangat diperlukan agar lebih mudah memahami cara kerja Laravel. Laravel juga berkembang sangat cepat ke versi yang baru, membuat pemula kesulitan mengikuti perubahan dengan dokumentasi  baru. 
---

## 7. Referensi

- Perkenalan laravel https://www.dicoding.com/blog/kenalan-dengan-laravel-framework-php-yang-keren-dan-serbaguna/
- Alur MVC https://www.dicoding.com/blog/apa-itu-mvc-pahami-konsepnya/
- Eloquent (ORM) https://buildwithangga.com/tips/mengenal-laravel-eloquent-pengertian-fungsi-dan-penggunaannya?
- Routing https://laravel.com/docs/12.x/routing?
- Testing (PHPUnit) https://laravel.com/docs/12.x/testing?
-  folder  dan files https://www.barajacoding.or.id/mengenal-struktur-folder-dan-file-pada-laravel/
---
