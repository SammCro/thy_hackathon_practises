<?php

namespace craine\standart;

class standart
{
    public $page, $type;
    const auth = ["auth", "error"], base = "http://localhost/dvlt39/thy_hackathon_practises/";

    private function page_detect()
    {
        $this->page = $_GET["page"] ?? "upload";
        $this->type = $_GET["type"] ?? null;
    }

    public function __construct()
    {
        $this->page_detect();
    }

    public function dayTime()
    {
        $h = date("H");

        if ($h >= 6 && $h < 12) {
            return "Günaydın!";
        } else if ($h >= 12 && $h < 18) {
            return "İyi günler!";
        } else if ($h >= 18 && $h < 24) {
            return "İyi akşamlar!";
        } else {
            return "İyi geceler!";
        }
    }
}
