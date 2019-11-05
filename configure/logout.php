<?php
// memulai session
session_start();

// menghapus semua data session yang ada pada browser
session_destroy();

// mengarahkan ke halaman login / keluar dari aplikasi
header('location:../login.php');
