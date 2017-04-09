# labtigram
project CI untuk praktikum Sistem Multimedia Labti Universitas Gunadarma

Untuk menjalankan project ini, kamu harus menginstal local server pada umumnnya menjalankan php, seperti Apache ataupun Nginx. 
Dan untuk database yang digunakan adalah mySQL, maka kamu harus menginstal mySQL di PC atau laptopmu.
Atau jika kalian mau yang simple, instal XAMPP/WAMP/MAMP/LAMP yang didalamnya sudah terdapat package-package seperti Apache, MySQL, Filezila, dsb.

Untuk kasus ini saya menggunakan XAMPP https://www.apachefriends.org/index.html

Jika sudah install XAMPP, maka clone repo ini dan tempakan disuatu folder misal 'labtigram' dan tempatkan di bagian Htdocs (XAMPP/Htdocs)

Selanjutnya adalah membuat database, buatlah database dalam kasus ini adalah di phpmyadmin (localhost/phpmyadmin) dengan nama "labtigram".
Kemudian import file .sql yang berada di repo ini, jika kalian sudah clone maka berada pada lokasi project kalian (XAMPP/Htdocs/labtigram).

Selanjutnya mengatur base_url pada config.php yang berada di Application/config. ubahlah sesuai alamat local yang kalian buat, misal http://localhost/labtigram/

Finish.... :)
