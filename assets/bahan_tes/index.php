<?php

$content = "
Buatlah aplikasi crud data user menggunakan codeigniter dengan memanfaatkan library Ion Auth.

0) Instal Ion Auth library beserta data inisiasinya

1) Tambahkan field berikut pada tabel users:
	- 'nim' varchar(8)
	- 'ipk' float

2) Pasang template yang telah disediakan ke dalam aplikasi. (fyi, template menggunakan bootstrap 3)

3) Tambahkan fitur-fitur berikut pada aplikasi:
	- Daftar Group
	- Hapus User dan Group
	- ekspor data user ke csv

4) Hasil aplikasi harus sesuai secara fungsional minimal 90% dengan contoh aplikasi pada halaman berikut <a href=\"http://www.madfront.com/projects/cicrud/\">http://www.madfront.com/projects/cicrud</a>. 
Untuk masuk ke aplikasi, gunakan username: admin@admin.com, password: password

batasan-batasan:
- gunakan active record bawaan codeigniter untuk berinteraksi dengan database
- library ci yang wajib digunakan: session, database, form validation, input, uri
- helper yang wajib digunakan: url, form, download

Donlot resource <a href=\"http://www.madfront.com/projects/cicrud/bahantes/resources\">disini</a>.
";

echo nl2br($content);

?>