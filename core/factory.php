<?php

class Factory
{

    static function getKey(){

        return $key;
    }
    static function getPageTitle(): string
    {
        $baseUrl = str_replace("act=", "", explode("&", $_SERVER['QUERY_STRING'])[0]);
        if ($baseUrl == "") :
            return "Ana Sayfa";
        else:
            return Model::getWhere("main_submenu", ["adress" => $baseUrl])[0]->name;
        endif;
    }

    static function getPageHeader(): string
    {
        $baseUrl = str_replace("act=", "", explode("&", $_SERVER['QUERY_STRING'])[0]);
        $parentID = Model::getWhere("main_submenu", ["adress" => $baseUrl])[0]->parent;
        $activeMainMenu = Model::getWhere("main_menu", ["_id" => new MongoDB\BSON\ObjectId($parentID)])[0]->name;

        $submenulist = Model::getWhere("main_submenu", ["parent" => $parentID]);
        $template = "<page-header><h4 class=\"fw-bold mb-4\"><span class=\"text-muted fw-light\">" . $activeMainMenu . " / </span>" . self::getPageTitle() . "</h4>";
        if (count($submenulist) > 1) :
            $template .= "<div class=\"card mb-4\"><div class=\"card-body\"><nav aria-label=\"breadcrumb\"><ol class=\"breadcrumb m-0\">";
            foreach ($submenulist as $submenu):
                if ($baseUrl != $submenu->adress) {
                    $template .= "<li class=\"breadcrumb-item\"><a href=\"/{$submenu->adress}\" title=\"{$submenu->name}\">{$submenu->name}</a></li>";
                } else {
                    $template .= "<li class=\"breadcrumb-item active\">{$submenu->name}</li>";
                }
            endforeach;
            $template .= "</ol></nav></div></div></page-header>";
        endif;

        return $template;
    }

    static function getPagesJs()
    {
        if ($_SERVER['QUERY_STRING'] != "") :
            $controller = explode("/", str_replace("act=", "", explode("&", $_SERVER['QUERY_STRING'])[0]))[0];
            $file = explode("/", str_replace("act=", "", explode("&", $_SERVER['QUERY_STRING'])[0]))[1];
            if (file_exists("./public/script/pages/" . $controller . "/" . $file . ".js")) :
                $full_dest = PUBLIC_ROOT . "script/pages/" . $controller . "/" . $file . ".js";
                return '<script src="' . $full_dest . '"></script>';
            else:
                return "";
            endif;
        endif;
    }

    static function getShortDayName($day, $month, $year)
    {
        $kg = array(
            "Mon" => "Pzt",
            "Tue" => "Sal",
            "Wed" => "Çar",
            "Thu" => "Per",
            "Fri" => "Cum",
            "Sat" => "Cmt",
            "Sun" => "Paz"
        );
        $date = date_create($year . "-" . $month . "-" . $day);
        return $kg[date_format($date, "D")];
    }

    static function calStatusText($status)
    {
        $s = array(
            "iscep-deploy" => "İşCep Sürümü",
            "yama-gecisi" => "Yama Geçişi",
            "test-closed" => "Test Ortamları Altyapı Değişikliğine Kapalı",
            "high-day" => "Yoğun İşlem Hacmi Beklenen Günler",
            "deploy-day" => "Sürüm",
            "test-yama" => "Test Ortamları Yama Geçişleri"
        );
        return $s[$status];
    }

    static function getPageRule()
    {
        if ($_SERVER['QUERY_STRING'] != "") :
            $url = str_replace("act=", "", explode("&", $_SERVER['QUERY_STRING'])[0]);
            $role = Model::getOne("main_submenu", ["adress" => $url]);
            return json_encode(
                array(
                    "roleUpdating" => $role->roleUpdate,
                    "roleDeleting" => $role->roleDelete,
                    "roleAdding" => $role->roleAdd
                )
            );
        else:
            return json_encode(
                array(
                    "roleUpdating" => false,
                    "roleDeleting" => false,
                    "roleAdding" => false
                )
            );
        endif;
    }


    static function getMonthName()
    {
        $aylar = array(
            "January" => "Ocak",
            "February" => "Şubat",
            "March" => "Mart",
            "April" => "Nisan",
            "May" => "Mayıs",
            "June" => "Haziran",
            "July" => "Temmuz",
            "August" => "Ağustos",
            "September" => "Eylül",
            "October" => "Ekim",
            "November" => "Kasım",
            "December" => "Aralık"
        );


        return $aylar[date("F")];
    }

    static function groupArray($p, $d): array
    {
        $ga = array();
        foreach($d as $v) {
            if(array_key_exists($p, $v)){
                $ga[$v[$p]][] = $v;
            }else{
                $ga[""][] = $v;
            }
        }
        return $ga;
    }
}