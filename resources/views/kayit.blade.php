<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaydol Sayfası</title>
</head>
<body>

    <form action="{{route('kullanici.kaydol')}}" method="post">
        {{csrf_field()}}

        Adınız-Soyadınız:
        <input type="text" id="adsoyad" name="adsoyad">
        <br>
        Emailiniz:
        <input type="email" id="email" name="email">
        <br>
        Şifreniz:
        <input type="password" id="sifre" name="sifre" >
        <br>
        <button type="submit" id="kaydol" name="kaydol">Kayit Ol</button>
    </form>


</body>
</html>