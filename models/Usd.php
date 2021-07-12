<?php

namespace app\models;

class usd {
    public $file_before;
    public $file_now;
    public $xml;
    public $valute_usd_before;
    public $valute_usd_now;
    public $valute_euro_before;
    public $valute_euro_now;
    public function kurs()
    {
        $file_before = simplexml_load_file("https://cbr.ru/scripts/XML_daily.asp?date_req=".date('d.m.Y',strtotime("-1 days")));

        $file_now = simplexml_load_file("https://cbr.ru/scripts/XML_daily.asp?date_req=".date("d/m/Y"));

        $xml = $file_now->xpath("//Valute[@ID='R01235']");

        $valute_usd_now = strval($xml[0]->Value);

        $xml = $file_before->xpath("//Valute[@ID='R01235']");

        $valute_usd_before = strval($xml[0]->Value);

        $xml = $file_before->xpath("//Valute[@ID='R01239']");

        $valute_euro_before = strval($xml[0]->Value);
        
        $xml = $file_now->xpath("//Valute[@ID='R01239']");

        $valute_euro_now = strval($xml[0]->Value);

        if ($valute_usd_now > $valute_usd_before) {
            echo "курс доллара ".$valute_usd_now."<img src ='/web/uploads/arrow_up.png' style='height:10px; width:10px;'> <br>";
        }else{
            echo "курс доллара ".$valute_usd_now."<img src ='/web/uploads/arrow_down.png' style='height:10px; width:10px;'> <br>";
        }
        if ($valute_euro_now > $valute_euro_before) {

            echo "курс евро ".$valute_euro_now."<img src ='/web/uploads/arrow_up.png' style='height:10px; width:10px;'>";
        }else{
            echo "курс евро ".$valute_euro_now."<img src ='/web/uploads/arrow_down.png' style='height:10px; width:10px;'>";
        }
    }
}