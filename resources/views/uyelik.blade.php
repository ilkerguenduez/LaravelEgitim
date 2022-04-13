<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Üye Kayıt Formu </title>
</head>
<body>
  @if($errors->any())
    <ul>
      @foreach ($errors->all() as $hatalar)
        <li>{{$hatalar}}</li>
      @endforeach
    </ul>
  @endif
  <form action="{{ route('uyekayit') }}" method="post">
      @csrf
      <label>Ad Soyad</label><br>
      <input type="text" name="adsoyad"><br>

      <label>Telefon</label><br>
      <input type="text" name="telefon"><br>

      <label>Mail</label><br>
      <input type="text" name="mail"><br>
      <input type="submit" name="ilet" value="Gönder">
  </form>
</body>
</html>
