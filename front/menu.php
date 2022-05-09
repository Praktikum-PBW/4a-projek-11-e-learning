<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        include '../aset/lib/koneksi.php';
        switch($page){
            case 'home':
                include 'home.php';
                break;
            case 'kelas':
                include 'kelas.php';
                break;
            case 'kelas_konten':
                include 'kelas_konten.php';
                break;
            case 'blog':
                include 'blog.php';
                break;
            case 'blog_konten':
                include 'blog_konten.php';
                break;
            case 'about':
                include 'about.html';
                break;
            case 'contact':
                include 'contact.php';
                break; 
            case 'review_proses':
                include 'contact_proses.php';
                break; 
            case 'login':
                include 'login.php';
                break;    
            case 'logout':
                include 'logout.php';
                break;
            case 'register':
                include 'register.php';
                break;
            default:
                echo "Maaf halaman tidak ditemukan";
                break;                   
        }
    }else{
        include 'home.php';
    }