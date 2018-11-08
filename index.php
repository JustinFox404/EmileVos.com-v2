<?php
/**
 * Created by PhpStorm.
 * User: emile
 * Date: 10/19/2018
 * Time: 12:00 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.onscroll = function () {
                let scroll = document.body.scrollTop !== 0 ? document.body.scrollTop : document.documentElement.scrollTop;
                if(scroll > 200) {
                    document.getElementsByClassName("to-bottom")[0].classList.add("to-bottom-hide");
                } else {
                    document.getElementsByClassName("to-bottom")[0].classList.remove("to-bottom-hide");

                }
            }
        });
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome-pro/css/all.css">
    <script src="../fontawesome-pro/js/all.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
<div class="body">
    <div class="title">Welkom</div>
    <div class="name">Emile Vos</div>
</div>
<div class="container">
    <div class="work-viewer">
        <div class="work-items-wrapper">
            <div class="work-items">
                <div class="work-item">
                    <div class="work-image-wrapper"><img src="assets/img/foxiko.png" class="work-image"></div>
                    <div class="work-badge">Web</div>
                </div>
                <div class="work-item">
                    <div class="work-image-wrapper"><img src="assets/img/mousepat.png" class="work-image"></div>
                    <div class="work-badge">Web</div>
                </div>
                <div class="work-item">
                    <div class="work-image-wrapper"><img src="assets/img/mithera.png" class="work-image"></div>
                    <div class="work-badge">Web, Java</div>
                </div>
                <div class="work-item">
                    <div class="work-image-wrapper"><h2 class="work-image" style="font-family: Montserrat, Robot, Verdana, sans-serif;">EmileVos.com v0.1</h2></div>
                    <div class="work-badge">Web</div>
                </div>
            </div>
        </div>
    </div>
    <a class="btn" href="/v0.2/portfolio" style="max-width: 280px; margin: auto;">MEER ZIEN</a>
</div>
<div class="to-bottom"><i class="far fa-chevron-double-down fa-5x"></i></div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container who-am-i">
    <h1>Wie ben ik?</h1>
    <hr>
    <p>Ik ben Emile Vos, full-stack developer, een ondernemer en een outside the box denker. Ik ben eigenaar van het bedrijf Foxiko. Ook werk ik bij HMSHost op Schiphol Airport.
    <a class="btn" href="/cv" style="max-width: 150px; margin: auto; margin-top: 0.5rem; margin-bottom: 0.5rem; font-size: 20px; line-height: 25px;">NAAR CV</a>
    Owja, en ik heb een kleine SSH-emulator gemaakt. <a href="/ssh">naar emulator</a></p>
</div>
<footer>
    <div class="footer-stripe"></div>
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-item">
                <h1><a href="#">Wie ben ik?</a></h1>
                <hr>
                <span>Hey, ik ben Emile Vos, een ondernemer. Ik ben eigenaar van het bedrijf <a href="https://foxiko.com/">Foxiko</a>. Ook werk ik bij <a href="https://hmshost.net/">HMSHost</a> op Schiphol Airport.</span>
            </div>
            <div class="footer-content-item">
                <h1><a href="/v0.2/portfolio">Portfolio</a></h1>
                <hr>
                <a href="#">Portfolio</a>
            </div>
            <div class="footer-content-item">
                <h1><a href="#">Sociaal</a></h1>
                <hr>
                <a href="https://www.facebook.com/profile.php?id=100015182525869">Facebook</a>
                <a href="https://twitter.com/_emilev_">Twitter</a>
                <a href="https://www.linkedin.com/in/emile-vos-844364172/">LinkedIn</a>
                <a href="https://github.com/JustinFox404">Github</a>
                <a href="https://instagram.com/_emilev_">Instagram</a>
            </div>
            <div class="footer-content-item">
                <h1><a href="#">Quick goto</a></h1>
                <hr>
                <a href="https://foxiko.com/">Foxiko</a>
                <a href="/cv">CV</a>
                <a href="/v0.2/portfolio">Portfolio</a>
                <a href="/v0.1/portfolio">Portfolio v0.1</a>
            </div>
            <div class="footer-content-item">
                <h1><a href="#">Legal</a></h1>
                <hr>
                <a href="https://support.foxiko.com/termsofservice">Terms of Service</a>
                <a href="https://support.foxiko.com/privacy">Privacy policy</a>
            </div>
            <div class="footer-content-item">

            </div>
            <div class="footer-content-item">
                <h1><a href="#">Contact</a></h1>
                <hr>
                <a href="mailto:emilevos404@gmail.com?Subject=Betreft portfolio&cc=support@foxiko.com">Mail: emilevos404@gmail.com</a>
                <a href="tel:0031615296748">Tel: +31 6 15296748</a>
            </div>
            <div class="footer-content-item">
                <div class="ssl">
                    <i class="fas fa-lock fa-2x"></i>
                    <span>De verbinding naar Foxiko is beveiligd  met een 256-bit encryptie.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-slogan"><div><span>FOXIKO</span> - Create Awesome Things</div></div>
    <div class="footer-copyright">Copyright © FOXIKO [NL], All rights reserved.</div>
</footer>
</body>
</html>