<?php
    $page=(isset($_GET['page']))?$_GET['page']:"main";
    switch ($page){
        case 'menu':include "page/home.html";break;
        case 'sejarah':include "page/sejarah.html";break;        
        case 'visi':include "page/visimisi.html";break;
        case 'tujuan':include "page/tujuan.html";break;
        case 'about':include "page/pembuatan.html";break;
        case 'contact':include "page/contact.html";break;
        case 'gallery':include "page/kegiatan.html";break;

        case 'main':
        default:include"page/home.html";

    }
?>
