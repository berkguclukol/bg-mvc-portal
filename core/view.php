<?php
class view
{
    static function render($file,$data = []): void
    {
        if(file_exists(Variables::VIEWS_PATH()."/{$file}.php")) {
            extract($data);
            require_once Variables::VIEWS_PATH()."/{$file}.php";
        } else {
            exit($file." Görüntü Dosyası bulunamadı");
        }
    }
}