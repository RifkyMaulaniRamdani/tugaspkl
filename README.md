# Tugas PKL
A. Buat folder dengan nama masing-masing di dalam repository yang telah disediakan.
Di dalam folder tersebut, buat file dengan nama:
1. tugas-satu.php
2. tugas-dua.php, dan seterusnya sesuai urutan tugas.
3. Sebelum melakukan commit, buat terlebih dahulu file PHP dengan nama tugas-satu.php.
4. Di dalam file tersebut, tuliskan teks berikut pada text field:
    "tugas-satu-nama"

# Tugas Jam ke-5(15/10/2025) 
1. buat file tugas_ketiga.php
2. Buatkan kode PHP  untuk menampilkan kata : "Ikuti proses untuk menjadi orang sukses..."



 # Tugas Jam pertama (10/16/2025)
 
1. buat file tugas_keempat.php didalam folder masing-masing
2. buat kodingan untuk input data siswa
   kode php
```html
<form method="post">
    <label>NIS</label>
    <input type="text" name="nis">
    <label>Nama</label>
    <input type="text" name="nama">
    <label>Kelas</label>
    <input type="text" name="kelas">
    <button type="submit" name="btn">Submit</button>
</form>
```
3. jalankan programnya kemudian screenshoot hasilnya
5. upload hasil screenshoot ke github..
   
   =======================================
   # Tugas Jam Ke 3,4 dan 5
1. Buat database di phpmyadmin dengan nama `db_datasiswa`
2. Buat tabel tb_siswa
   ```sql
   CREATE tb_siswa(
   nis int(12) primary key,
   nama char(50),
   kelas char(50)
   )
   ```
3. buat file `koneksi.php` di folder masing-masing
4. ketikan kode sebagai berikut:
   ```php
   <?php
        $conn = new mysqli('localhost','root','rpl12345','db_datasiswa'); // untuk password sesuiakan dengan localserver masing-masing
   ?>
   ```

