<?php
// OneFileCMS Language Settings v3.4.18

$_['LANGUAGE'] = 'Indonesia'; //ID
$_['LANG'] = 'ID';

// If no translation or value is desired for a particular setting, do not delete
// the actual setting variable, just set it to an empty string.
// For example:  $_['some_unused_setting'] = '';
//
// Remember to slash-escape any single quotes that may be within the text:  \'
// The back-slash itself may or may not also need to be escaped:  \\
//
// If present as a trailing comment, "## NT ##" means 'Need Translation'.
//
// These first few settings control a few font and layout settings.
// In some instances, some langauges may use significantly longer words or phrases than others.
// So, a smaller font or less spacing may be desirable in those places to preserve page layout.
$_['front_links_font_size']  = '0.9em';   //Buttons on Index page.
$_['front_links_margin_L']   = '0.7em';
$_['button_font_size']       = '0.8em';   //Buttons on Edit page.
$_['button_margin_L']        = '0.7em';
$_['button_padding']         = '4px 5px';
$_['image_info_font_size']   = '1em';     //show_img_msg_01  &  _02
$_['image_info_pos']         = '';        //If 1 or true, moves the info down a line for more space.
$_['select_all_label_size']  = '.84em';   //Font size of $_['Select_All']
$_['select_all_label_width'] = '72px';    //Width of space for $_['Select_All']

$_['HTML']    = 'HTML';    //## NT ##
$_['WYSIWYG'] = 'AYALAAYAD'; //## NT ##

$_['Admin']   = 'Admin';
$_['bytes']   = 'bytes';
$_['Cancel']  = 'Batal';
$_['Close']   = 'Tutup';
$_['Copy']    = 'Salin';
$_['Copied']  = 'Tersalin';
$_['Create']  = 'Buat';
$_['Delete']  = 'Hapus';
$_['DELETE']  = 'HAPUS';
$_['Deleted'] = 'Terhapus';
$_['Edit']    = 'Ubah';
$_['Enter']   = 'Masuk';
$_['Error']   = 'Kesalahan';
$_['errors']  = 'kesalahan';
$_['File']    = 'File';
$_['Folder']  = 'Folder';
$_['From']    = 'Dari';
$_['Hash']    = 'Hash "kekusutan"';
$_['Move']    = 'Pindah';
$_['Moved']   = 'Terpindahkan';
$_['on']      = 'Nyala';

$_['Password']   = 'Kata Sandi';
$_['Rename']     = 'Ubah Nama'; //## NT ##
$_['Source']     = 'Sumber'; //## NT ##
$_['successful'] = 'berhasil';
$_['To']         = 'ke';
$_['Upload']     = 'Mengungah';
$_['Username']   = 'Nama Pengguna';
$_['Working']    = 'Bekerja - tolong tunggu...'; //## NT ##
$_['Log_In']     = 'Masuk';
$_['Log_Out']    = 'Keluar';

$_['Admin_Options']  = 'Pilihan Admin';
$_['Are_you_sure']   = 'Kau Serius?';
$_['Edit_View']      = 'Ubah / Lihat';
$_['Upload_File']    = 'Unggah File';
$_['New_File']       = 'File Baru';
$_['Ren_Move']       = 'Ubah Nama / Pindah';
$_['Ren_Moved']      = 'Terubah / Terpindah';
$_['New_Folder']     = 'Folder Baru';
$_['Ren_Folder']     = 'Ubah Nama / Pindahkan Folder';
$_['Submit']         = 'Kirimkan';
$_['Move_Files']     = 'Pindahkan';
$_['Copy_Files']     = 'Salin';
$_['Del_Files']      = 'Hapus File';
$_['Selected_Files'] = 'Folder dan File Terpilih';
$_['Select_All']     = 'Pilih Semua';
$_['Clear_All']      = 'Hapus Semua';
$_['New_Location']   = 'Lokasi Baru';
$_['No_files']       = 'Tidak ada File Terpilih.';
$_['Not_found']      = 'Tidak di Temukan';
$_['Invalid_path']   = 'Jalur Salah';
$_['pass_to_hash']   = 'Kata Sandi untuk hash:';
$_['Generate_Hash']  = 'Buat Hash';

$_['save_1']      = 'Simpan';
$_['save_2']      = 'SIMPAN PERUBAHAN!';
$_['reset']       = 'Kembalikan';
$_['Wide_View']   = 'Lihat Lebar';
$_['Normal_View'] = 'Lihat Normal';
$_['Open_View']   = 'Buka/Lihat di Jendela Peramban';

$_['verify_msg_01']     = 'Sesi Berakhir.';
$_['verify_msg_02']     = 'POS TIDAK SAH';
$_['get_get_msg_01']    = 'File tidak ada:';
$_['get_get_msg_02']    = 'Permintaan Halaman Tidak Sah:';
$_['check_path_msg_02'] = '"titik" atau "titik titik" segmen jalur tidak diizinkan.';
$_['check_path_msg_03'] = 'Jalur atau Nama File mengandung kata yang tidak di izinkan:';
$_['ord_msg_01']        = 'Sebuah file dengan nama tersebut sudah ada di jalur target.';
$_['ord_msg_02']        = 'Simpan Sebagai';
$_['rCopy_msg_01']      = 'Folder tidak dapat disalin ke dalam salah satu sub-folder tersendiri.';
$_['show_img_msg_01']   = 'Gambar ditunjukan pada ~';
$_['show_img_msg_02']   = '% dari ukuran maksimum (W "Lebar" x H "Tinggi" =';

$_['hash_txt_01'] = 'Hash yang dihasilkan oleh halaman ini dapat digunakan untuk memperbarui $HASHWORD di OneFileCMS secara manual, atau dalam file konfigurasi eksternal. Dalam kedua kasus, pastikan Anda mengingat password yang digunakan untuk menghasilkan hash!';
$_['hash_txt_06'] = 'Ketik Kata Sandi yang Anda inginkan dalam kolom input di atas dan tekan Enter.';
$_['hash_txt_07'] = 'HASH akan di tampilkan pada Box kuning di atas.';
$_['hash_txt_08'] = 'Salin dan Temple HASH baru di $HASHWORD variable pada Configurasi.';
$_['hash_txt_09'] = 'Pastikan untuk menyalin SEMUA, dan HANYA, hash (tanpa spasi diawali atau diakhir dll).';
$_['hash_txt_10'] = 'Sebuah klik ganda(Double Klick) perlu untuk memilihnya ...';
$_['hash_txt_12'] = 'Ketika siap, Keluar dan Masuk.';

$_['login_txt_01']  = 'Nama Pengguna:';
$_['login_txt_02']  = 'Kata Sandi:';
$_['login_msg_01a'] = 'Sudah ada';
$_['login_msg_01b'] = 'mencoba masuk tidak sah.';
$_['login_msg_02a'] = 'Tunggu sebentar';
$_['login_msg_02b'] = 'detik untuk mencoba lagi.';
$_['login_msg_03']  = 'PERCOBAAN MASUK TIDAK SAH #';

$_['edit_note_00']  = 'CATATAN:';
$_['edit_note_01a'] = 'Ingat- ';
$_['edit_note_01b'] = 'adalah';
$_['edit_note_02']  = 'Maka simpan perubahan sebelum Waktu Habis, atau perubahan akan hilang!';
$_['edit_note_03']  = 'Dengan beberapa peramban, seperti Chrome, jika Anda mengklik tombol browser [Back] maka tombol browser [Forrward] menjadikan kondisi file bisa tidak akurat. Untuk memperbaikinya, klik tombol [Reload] pada peramban.';
$_['edit_note_04']  = 'Chrome dapat menonaktifkan beberapa javascript di halaman jika halaman bahkan sepertinya berisi javascript seiring dalam konteks tertentu. Hal ini dapat mempengaruhi beberapa fitur dari OneFileCMS mengedit halaman saat mengedit file yang sah berisi kode tersebut, seperti OneFileCMS sendiri. Namun, file tersebut masih bisa diedit dan disimpan dengan OneFileCMS. Fungsi utama hilang adalah perubahan insidental latar belakang warna (merah / hijau) menunjukkan apakah file tersebut memiliki perubahan yang belum disimpan. Masalah ini akan terlihat setelah menyimpan file tersebut.';

$_['edit_h2_1']   = 'Melihat:';
$_['edit_h2_2']   = 'Mengubah:';
$_['edit_txt_01'] = 'Bukan sebuah teks atau jenis file tidak di ketahui. Mengedit dimatikan.';
$_['edit_txt_02'] = 'File mungkin berisi karakter yang tidak sah. Mengedit dan melihat dimatikan.';
$_['edit_txt_03'] = 'htmlspecialchars() kembali menjadi string kosong dari apa yang mungkin merupakan file yang dinyatakan valid.';
$_['edit_txt_04'] = 'Perilaku ini dapat menjadi tidak konsisten dari versi ke versi dari php.';

$_['too_large_to_edit_01'] = 'Mengubah dimatikan. Ukuran File >';
$_['too_large_to_edit_02'] = 'Beberapa peramban (seperti: IE) akan mengalami kesalahan atau menjadi tidak stabil saat mengedit file besar dalam HTML <textarea>.';
$_['too_large_to_edit_03'] = 'Sesuaikan $MAX_EDIT_SIZE pada bagian konfigurasi OneFileCMS sesuai kebutuhan anda.';
$_['too_large_to_edit_04'] = 'Sebuah percobaan dan tes kesalahan sederhana dapat menentukan batas praktis pada suatu browser/komputer.';
$_['too_large_to_view_01'] = 'Liah dimatikan. Ukuran File >';
$_['too_large_to_view_02'] = 'Klik nama file di atas untuk melihat secara normal seperti dalam jendela browser.';
$_['too_large_to_view_03'] = 'Sesuaikan $MAX_VIEW_SIZE pada bagian konfigurasi OneFileCMS sesuai kebutuhan anda.';
$_['too_large_to_view_04'] = '(Nilai standar untuk $MAX_VIEW_SIZE sepenuhnya acak, dan dapat disesuaikan seperti yang diinginkan.)';

$_['meta_txt_01'] = 'Ukuran File:';
$_['meta_txt_03'] = 'Perbarui:';
$_['edit_msg_01'] = 'File Tersimpan:';
$_['edit_msg_02'] = 'byte yang ditulis.';
$_['edit_msg_03'] = 'Ada kesalahan dalam menyimpan file.';

$_['upload_txt_03'] = 'Ukuran maksimum dari setiap file:';
$_['upload_txt_01'] = '(php.ini: upload_max_filesize)';
$_['upload_txt_04'] = 'Ukuran maksimum dari semua ukaran pengugahan:';
$_['upload_txt_02'] = '(php.ini: post_max_size)';
$_['upload_txt_05'] = 'Untuk File Terunggah yang telah ada: ';
$_['upload_txt_06'] = 'Ubah Nama (menjadi namafile.ext.001 dll...)';
$_['upload_txt_07'] = 'Timpakan';

$_['upload_err_01'] = 'Kesalahan 1: File terlalu besar. dari php.ini:';
$_['upload_err_02'] = 'Kesalahan 2: File terlalu besar. (Melebihi MAX_FILE_SIZE dari element HTML)';
$_['upload_err_03'] = 'Kesalahan 3: Berkas yang diunggah hanya terunggah sebagian.';
$_['upload_err_04'] = 'Kesalahan 4: Tidak ada file terunggah.';
$_['upload_err_05'] = 'Kesalahan 5:';
$_['upload_err_06'] = 'Kesalahan 6: Hilang sebuah foldersementara.';
$_['upload_err_07'] = 'Kesalahan 7: Gagal menulis file di disk.';
$_['upload_err_08'] = 'Kesalahan 8: Sebuah ekstensi PHP menghentikan Pemuatan File.';
$_['upload_error_01a'] = 'Mengunggah Galat. Jumlah data POST (kebanyakan ukuran berkas) melebihi post_max_size =';
$_['upload_error_01b'] = '(dari php.ini)';

$_['upload_msg_02'] = 'Tujuan folder tidak sah:';
$_['upload_msg_03'] = 'Mengunggah di batalkan.';
$_['upload_msg_04'] = 'Mengunggah:';
$_['upload_msg_05'] = 'Mengunggah Berhasil!';
$_['upload_msg_06'] = 'Mengunggah Gagal:';
$_['upload_msg_07'] = 'Sebuah file yang sudah ada sebelumnya telah ditimpa.';

$_['new_file_txt_01'] = 'File atau Folder akan dibuat dalam folder saat ini.';
$_['new_file_txt_02'] = 'Beberapa karakter yang tidak sah:';
$_['new_file_msg_01'] = 'File atau folder belum dibuat:';
$_['new_file_msg_02'] = 'Nama mengandung karakter tidak sah:';
$_['new_file_msg_04'] = 'File atau folder sudah ada:';
$_['new_file_msg_05'] = 'File yang dibuat:';
$_['new_file_msg_07'] = 'Folder yang dibuat:';

$_['CRM_txt_02'] = 'Lokasi baru harus sudah ada.';
$_['CRM_txt_04'] = 'Nama Baru';
$_['CRM_msg_01'] = 'Kesalahan - lokasi induk baru tidak ada:';
$_['CRM_msg_02'] = 'Kesalahan - file sumber tidak ada:';
$_['CRM_msg_03'] = 'Kesalahan - file dan folder baru sudah ada:';
$_['CRM_msg_05'] = 'Kesalahan saat';

$_['delete_msg_03']   = 'Hapus Kesalahan:';
$_['session_warning'] = 'Peringatan: Batas waktu sesi hampir habis!';
$_['session_expired'] = 'SESI KADALUARSA';
$_['unload_unsaved']  = ' Perubahan yang belum disimpan akan hilang!';
$_['confirm_reset']   = 'Mengembalikan berkas dan kehilangan perubahan yang belum disimpan?';
$_['OFCMS_requires']  = 'OneFileCMS membutuhkan PHP';
$_['logout_msg']      = 'Anda berhasil keluar.';
$_['edit_caution_01'] = 'PERHATIAN';
$_['edit_caution_02'] = 'Anda mengubah salinan aktif dari OneFileCMS - BACKUP & HATI-HATI!!';
$_['time_out_txt']    = 'SESI waktu habis pada:';

$_['error_reporting_01'] = 'Kesalahan yang ditampilkan adalah';
$_['error_reporting_02'] = 'Kesalahan masuk adalah';
$_['error_reporting_03'] = 'Pelaporan kesalahan di laporkan ke';
$_['error_reporting_04'] = 'Menampilkan tipe kesalahan';
$_['error_reporting_05'] = 'Tidak Terduga Keluar lebih awal';
$_['error_reporting_06'] = '(tidak ada, bahkan tidak spasi, Seharusya sudah ada keluaran sekarang)';

$_['admin_txt_00'] = 'Backup lama di temukan';
$_['admin_txt_01'] = 'Sebuah file backup dibuat jika terjadi kesalahan selama perubahan username atau password. Oleh karena itu, mungkin berisi informasi lama dan harus dihapus jika tidak dibutuhkan. Dalam kasus apapun, maka akan secara otomatis ditimpa pada password berikutnya atau perubahan nama.';
$_['admin_txt_02'] = 'Informasi Umum';
$_['admin_txt_14'] = 'Untuk kemajuan kecil keamanan, mengubah Salt default dan / atau metode yang digunakan oleh OneFileCMS untuk hash password (dan menjaga mereka rahasia, tentu saja). pasti sedikit membantu...';
$_['admin_txt_16'] = 'OneFileCMS dapat digunakan untuk mengedit sendiri. Namun, pastikan untuk memiliki cadangan untuk menghadapi kesalahan tak di ingginkan...';

$_['pw_current'] = 'Kata Sandi saat ini';
$_['pw_change']  = 'Ubah Kata Sandi';
$_['pw_new']     = 'Kata Sandi Baru';
$_['pw_confirm'] = 'Ulangi Sandi Baru';

$_['un_change']  = 'Ubah Nama Pengguna';
$_['un_new']     = 'Nama Pengguna Baru';
$_['un_confirm'] = 'Ulangi Nama Pengguna Baru';

$_['pw_txt_02'] = 'Aturan Sandi / Nama Pengguna:';
$_['pw_txt_04'] = 'Sensitif pada Karakter besar dan kecil: "A" =/= "a" ("A" bedan dengan "a")';
$_['pw_txt_06'] = 'Harus mengandung setidaknya satu karakter Tanpa Spasi.';
$_['pw_txt_08'] = 'Mungkin berisi spasi di tengah. Contoh: "Ini adalah password atau username!"';
$_['pw_txt_10'] = 'Utama dan spasi tambahan diabaikan.';
$_['pw_txt_12'] = 'Dalam rekaman perubahan, hanya satu file diperbarui: baik salinan aktif OneFileCMS, atau - jika ditentukan, file konfigurasi eksternal.';
$_['pw_txt_14'] = 'Jika sandi saat ini salah dimasukkan, Anda akan log out, namun Anda dapat masuk kembali.';

$_['change_pw_01'] = 'Sandi dirubah!';
$_['change_pw_02'] = 'Sandi TIDAK dirubah.';
$_['change_pw_03'] = 'Salah sandi saat ini. coba lagi untuk masuk.';
$_['change_pw_04'] = '"Baru" and "Ulangi baru" tidak sama.';
$_['change_pw_05'] = 'Memperbarui';
$_['change_pw_06'] = 'File configurasi tambahan';

$_['change_pw_07'] = 'SEMUA isian di butuhkan.';
$_['change_un_01'] = 'Nama pengguna terubah!';
$_['change_un_02'] = 'Nama pengguna tidak diterubah.';

$_['update_failed'] = 'Pembaruan Gagal - Tidak dapat menyimpan file.';
$_['mcd_msg_01'] = 'file terpindahkan.';
$_['mcd_msg_02'] = 'file tersalin.';
$_['mcd_msg_03'] = 'file terhapus.';

