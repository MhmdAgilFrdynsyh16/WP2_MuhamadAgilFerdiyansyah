<section>
  <h1><?php echo $judul ?></h1>
  <p align="justify">Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu MVC?
    kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
  <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tga komponen yaitu model, viewn dan controller.</p>

  <ol type="a">
    <li>Model</li>
    <p align="justify">Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi.
     Model juga dapat didefinisakn sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database.
    Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya.
   Semua intruksi atau fungsi yang berhubungan dengan pengolahan database di letakan di dalam model. sebagai contoh,
 jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapatmemodelkan objek lingkaran sebagai kelas model.</p>
 <p align="justify">Sebagai catatan, Semua model harus disimpan di dalam folder application\models</p>
 <li>View</li>
 <p align="justify">View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser).
 Tampilan dari user interface dikumpulkan pada view untuk memisahkannnya dengan controller dan model, sehingga memudahkanweb designer dalam
melakukan pengembangan tampilan halaman website.</p>
<li>Controller</li>
<p align="justify">Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan
dengan model secara langsung, intinya data yang tersimpan di database (model) di ambil oleh controller dan kemudian controller pula yang
menampilkannya ke view. Jadi controller lah yang mengolah instruksi.</p>
<p align="juastify">Dari penjelasan tentang model, view dan controller di tas dapat di simpulkan bahwa controller Sebagai penghubung
view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil intruksi
pada model yang mengambil data pada database, kemudian controller yang meneruskan pada view untuk ditampilkan.
Jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karea web designer atau front-end developer
yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan cepat
dan terstrutur.</p>
  </ol>
</section>
