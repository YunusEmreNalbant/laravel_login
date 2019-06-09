<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Sayfası</title>
</head>
<body>

    <form action="{{route('kullanici.oturumac')}}" method="post">
        {{csrf_field()}}

        Emailiniz:
        <input type="email" id="email" name="email">
        <br>
        Şifreniz:
        <input type="password" id="sifre" name="sifre" >
        <br>
        <button type="submit" id="giris" name="giris">Giriş Yap</button>
    </form>



</body>
</html>