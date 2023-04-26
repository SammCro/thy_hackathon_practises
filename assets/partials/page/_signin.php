<img src="assets/img/illustration/Departing-bro.svg" alt="">
<h4 class="t-bold c-white"><?= $standart->dayTime() ?></h4>
<h1 class="t-bold c-white">Hesabınıza giriş yapınız<span class="c-red">.</span></h1>
<small>Welcome, sky enthusiasts!<br>Turkish Airlines and AI, rising together to the heavens.</small>
<a href="#" id="get-started" onclick="getStarted()">GET STARTED</a>
<form id="frm">
    <div class="form-group">
        <input type="text" placeholder="E-posta" required>
    </div>
    <div class="form-group pwd">
        <a href="#">Forgot password<span class="c-red">?</span></a>
        <input type="password" placeholder="Şifre" required>
    </div>
    <div class="form-group">
        <button type="button" id="btn" onclick="send('btn', 'frm', 'signin')">Giriş Yap</button>
    </div>
    <p>Hesabınız yok mu? <a href="<?= $standart::base . "auth/signup" ?>">Kayıt Ol</a></p>
</form>