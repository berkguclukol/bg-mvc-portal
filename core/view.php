<?php
class view
{
    static function render($file,$data = [])
    {
        if(file_exists(VIEWS_PATH."/{$file}.php")) {
            extract($data);
            require_once VIEWS_PATH."/{$file}.php";
        } else {
            exit($file." Görüntü Dosyası bulunamadı");
        }
    }
}