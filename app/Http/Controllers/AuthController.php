<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function me()
    {
        return
        [
            "NIS" => "3103118120",
            "Name" => "Salsabila Mumtaz",
            "Gender" => "Perempuan",
            "Phone" => "081326428039",
            "Kelas" => "XII RPL 4",
        ];
    }
}
