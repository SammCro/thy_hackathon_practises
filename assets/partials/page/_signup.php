<img src="assets/img/illustration/Departing-bro.svg" alt="">
<h4 class="t-bold c-white"><?= $standart->dayTime() ?></h4>
<h1 class="t-bold c-white">Kaydol ve hayallerine kanat aç<span class="c-red">!</span></h1>
<small>Welcome, sky enthusiasts!<br>Turkish Airlines and AI, rising together to the heavens.</small>
<a href="#" id="get-started" onclick="getStarted()">GET STARTED</a>
<form action="#">
    <div class="form-group">
        <input type="text" placeholder="Ad Soyad" required>
    </div>
    <div class="form-group">
        <input type="text" placeholder="E-posta" required>
    </div>
    <div class="form-group">
        <input type="password" placeholder="Şifre" required>
    </div>
    <div class="form-group">
        <button type="button">Kayıt Ol</button>
    </div>
    <p>Hesabınız var mı? <a href="<?= $standart::base . "auth/signin" ?>">Giriş Yap</a></p>
</form>