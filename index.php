<?php
  // Khai báo autoloader
  require_once 'vendor/autoload.php';
  // Muc tieu: giả sử tôi có DL lấy ra từ CSDL
  $title = "Hoc PHP voi chatGPT";
  $header = "Chuong trinh minh hoa Twig";
  $content = "Chi la noi dung gi do";

  // Cấu hình môi trường > tải thư mục template
  $loader = new \Twig\Loader\FilesystemLoader("templates");
  $twig = new \Twig\Environment($loader);

  echo $twig->render('index.html', [
    'page_title' => $title,
    'heading' => $header,
    'content' => $content,
  ]);
?>