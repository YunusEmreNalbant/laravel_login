<?php

namespace App\Http\Controllers;

use App\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class KullaniciController extends Controller
{
    public function giris_form(){
        return view('giris');

    }
    public function oturumac(){

        $gelenMail = \request("email");
        $gelenSifre = \request("sifre");

        $kullaniciMail = Kullanici::where('email','=',$gelenMail)->value('email');
        $kullaniciSifre = Kullanici::where('sifre','=',md5($gelenSifre))->value('sifre');
        $kullaniciAdiSoyadi = Kullanici::where('email','=',$gelenMail)->value('adsoyad');




        if($gelenMail==$kullaniciMail && md5($gelenSifre) == $kullaniciSifre){
            return redirect()->route('hosgeldin');

        }else {
            return redirect()->route('kullanici.oturumac');

        }


    }

    public function hosgeldin(){
        return view('hosgeldin');
    }

    public function kaydol_form(){
       return view('kayit');


    }

    public function kaydol(){

        $kullanici = new Kullanici();
        $kullanici->adsoyad = request("adsoyad");
        $kullanici->email = request("email");
        $kullanici->sifre = md5(request("sifre"));
        $kullanici->save();



       return redirect()->route('kullanici.oturumac');
    }
}
