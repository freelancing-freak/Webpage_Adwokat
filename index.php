<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Kancelaria adwokacka</title>

    <meta charset="utf-8">
    <meta name="author" content="Aneta Lipska">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="keywords" content="Adwokat, Kancelaria Adwokacka, Aneta Lipska, Prawo, Pomoc Prawna">
    <meta name="description" content="Innowacyjny system, który w prosty sposób pozwoli Ci na efektywne działanie, przy minimalnym wkładzie czasu.">
    <meta property="og:title" content="Kancelaria Adwokacka Aneta Lipska - adwokatlublin.info.pl"/>
    <meta property="og:description" content="Kancelaria Adwokacka Aneta Lipska - Lublin"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.adwokatlublin.info.pl"/>
    <meta property="og:site_name" content="adwokatlublin.info.pl.pl"/>
    <meta property="og:image" content="https://www.adwokatlublin.info.pl/assets/img/logo.png"/>

    <meta http-equiv="content-language" content="pl-pl"/>

    <link rel="icon" href="assets/img/favicon.ico">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cookies.css">

    <script src="https://kit.fontawesome.com/9be6f51ab5.js" crossorigin="anonymous"></script>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phoneNumber'] = $phoneNumber;
    $_SESSION['message'] = $message;

    $isFormValid = true;

    if (empty($name) || empty($email) || empty($phoneNumber) || empty($message)) {
        $isFormValid = false;
    }

    if ($isFormValid) {

        $site = "adwokatlublin.info.pl";
        $to = "adwokat.lublin@o2.pl";
        $subject = "Porada online";
        $body = '';
        $body .= '<b>Imię:</b> ' . $name . '<br>'
            . '<b>Email:</b> ' . $email . '<br>'
            . '<b>Numer telefonu:</b> ' . $phoneNumber . '<br>'
            . '<b>Wiadomość:</b> ' . $message;
        $from = "no-reply@adwokatlublin.info.pl";
        $password = "ub6?1j6wjv1UlLLmv";

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "mail.adwokatlublin.info.pl";
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        $mail->smtpConnect([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        $mail->isHTML(true);
        $mail->setFrom($from, $site);
        $mail->addAddress($to);
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            $_SESSION['name'] = null;
            $_SESSION['email'] = null;
            $_SESSION['phoneNumber'] = null;
            $_SESSION['message'] = null;
            $_SESSION['successMessage'] = '';
        }
    }
    ?>

</head>

<body>
<!-- Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="row bg-white border-bottom d-none d-lg-flex">
                <div class="col-lg-12 text-left">
                    <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>adwokat.lublin@o2.pl</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>791 208 208</small>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a class="nav-item nav-link active" href="#" onclick="$('#home').goTo();return false;">Strona
                            główna</a>
                        <a class="nav-item nav-link" href="#" onclick="$('#about-me').goTo();return false;">O nas</a>
                        <a class="nav-item nav-link" href="#" onclick="$('#price-list').goTo();return false;">Cennik</a>
                        <a class="nav-item nav-link" href="#" onclick="$('#online-advice').goTo();return false;">Porada
                            Online</a>
                        <a class="nav-item nav-link" href="services.html">Oferta</a>
                        <a class="nav-item nav-link" href="#" onclick="$('#contact').goTo();return false;">Kontakt</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Carousel Start -->
<div id="home" class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="height: 80vh; min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="assets/img/background.jpeg" style="object-fit: cover;"
                     alt="">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Usługi prawne</h4>
                        <h3 class="display-2 text-capitalize text-white mb-4">Kancelaria adwokacka Aneta Lipska</h3>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#"
                           onclick="$('#about-me').goTo();return false;">Dowiedz się więcej</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div id="about-me" class="container-fluid">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 mt-4 mt-lg-0">
                <h6 class="text-uppercase">O nas</h6>
                <h1 class="mb-4">Rzetelna i profesjonalna obsługa prawna</h1>
                <p>Oferujemy Państwu rzetelną i profesjonalną obsługę prawną osób fizycznych oraz podmiotów
                    gospodarczych, reprezentowanie przed sądami wszystkich instancji i urzędami administracji państwowej
                    oraz samorządowej w zakresie prawa cywilnego, prawa karnego, prawa gospodarczego, prawa pracy i
                    ubezpieczeń społecznych, prawa rodzinnego, prawa spadkowego oraz prawa administracyjnego.</p>
                <p>Zapewnimy kompleksowe doradztwo prawne na najwyższym, profesjonalnym poziomie, z jak najdalej idącym
                    uwzględnieniem Państwa oczekiwań oraz sytuacji prawnej. Sporządzamy opinie i ekspertyzy prawne,
                    profesjonalne projekty umów, pozwy, apelacje i inne pisma procesowe.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h6 class="text-uppercase">Nasza oferta</h6>
                    <h1 class="mb-4">Zakres pomocy prawnej</h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <img src="assets/img/service_1.jpeg" alt="">
                    <div class="down-content">
                        <h4>Prawo rodzinne i opiekuńcze</h4>
                        <a href="services.html">Szczegóły</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <img src="assets/img/service_2.jpeg" alt="">
                    <div class="down-content">
                        <h4>Prawo cywilne i gospodarcze</h4>
                        <a href="services.html">Szczegóły</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <img src="assets/img/service_3.jpeg" alt="">
                    <div class="down-content">
                        <h4>Prawo<br>spadkowe</h4>
                        <a href="services.html">Szczegóły</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <img src="assets/img/service_4.jpeg" alt="">
                    <div class="down-content">
                        <h4>Prawo<br>pracy</h4>
                        <a href="services.html">Szczegóły</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <img src="assets/img/service_5.jpeg" alt="">
                    <div class="down-content">
                        <h4>Prawo<br>ubezpieczeń</h4>
                        <a href="services.html">Szczegóły</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <img src="assets/img/service_6.jpeg" alt="">
                    <div class="down-content">
                        <h4>Prawo<br>konsumenckie</h4>
                        <a href="services.html">Szczegóły</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <img src="assets/img/service_7.jpeg" alt="">
                    <div class="down-content">
                        <h4>Prawo<br>kontraktowe</h4>
                        <a href="services.html">Szczegóły</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <img src="assets/img/service_8.jpeg" alt="">
                    <div class="down-content">
                        <h4>Prawo<br>karne</h4>
                        <a href="services.html">Szczegóły</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- PriceList Start -->
<div id="price-list" class="container-fluid"><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4 mt-lg-0">
                <h6 class="text-uppercase">Cennik</h6>
                <p>Koszt porady prawnej wynosi <b>od 50 zł do 250 zł</b> (cena zawiera podatek VAT), zależnie od czasu
                    trwania porady i stopnia jej skomplikowania.</p>
                <p>Koszt sporządzenia pozwu, pisma procesowego, apelacji, umowy, itp. wynosi od <b>100 zł</b> zależnie
                    od stopnia jej skomplikowania.</p>
                <p>Koszt powierzenia sprawy z udzieleniem pełnomocnictwa wynosi od <b>200 zł</b> zależnie od zakresu
                    prac oraz stopnia skomplikowania.</p>
            </div>
        </div>
    </div>
</div>
<!-- PriceList End -->


<!-- Online Advice Start -->
<div id="online-advice" class="container-fluid"><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4 mt-lg-0">
                <h6 class="text-uppercase">Porada online</h6>
                <p><b>Jeśli jesteś zainteresowany uzyskaniem pomocy prawnej w szybkiej i taniej formie, skorzystaj z
                        formularza znajdującego się na niniejszej stronie. Koszt porady prawnej od 50 zł.</b></p>
                <p id="after-form-submit">Porada On-line służy do udzielania porad prawnych, sporządzania dokumentów
                    prawnych takich jak: pozwy, apelacje, wnioski, podania, umowy, wypowiedzenia, oświadczenia woli,
                    zapytania ofertowe, itp.</p>
            </div>
        </div>
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                    <style>
                        #error-message {
                            color: red;
                            display: none;
                            border: 1px solid red;
                            text-align: center;
                            padding: 15px;
                            font-weight: 600;
                            margin-bottom: 15px;
                        }

                        .validation {
                            color: red;
                            display: none;
                            margin: 0 0 20px;
                            font-weight: 400;
                            font-size: 13px;
                        }
                    </style>
                    <form method="post" role="form" id="form" class="contactForm">
                        <?php
                        if (isset($_SESSION['successMessage'])) {
                            echo '<div class="alert alert-success" role="alert">' . 'Twoja wiadomość została wysłana!' . '</div>';
                            unset($_SESSION['successMessage']);
                        }
                        ?>
                        <div id="error-message"></div>
                        <div class="form-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Imię i nazwisko" id="name"
                                   data-rule="required" data-msg="To pole nie może być puste" value="<?php
                            if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'];
                                unset($_SESSION['name']);
                            }
                            ?>" name="name"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Adres email" id="email"
                                   data-rule="email" data-msg="Proszę wpisać poprawny adres email" value="<?php
                            if (isset($_SESSION['email'])) {
                                echo $_SESSION['email'];
                                unset($_SESSION['email']);
                            }
                            ?>" name="email"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Numer telefonu"
                                   id="phoneNumber" data-rule="required" data-msg="To pole nie może być puste"
                                   value="<?php
                                   if (isset($_SESSION['phoneNumber'])) {
                                       echo $_SESSION['phoneNumber'];
                                       unset($_SESSION['phoneNumber']);
                                   }
                                   ?>" name="phoneNumber"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                                <textarea class="form-control border-0 p-4" rows="5" placeholder="Wiadomość"
                                          data-rule="required" data-msg="To pole nie może być puste"
                                          style="resize: none;" value="<?php
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }
                                ?>" name="message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <p style="color: white">* Wysyłając formularz oświadczam, że zapoznałem/am się z <u><a
                                        href="assets/docs/regulations.pdf" target="_blank">Regulaminem</a></u> i
                            akceptuję wszystkie zawarte w nim warunki</p>
                        <div>
                            <button class="btn btn-primary btn-block border-0 py-3" type="submit" id="submit-button"
                                    onclick="window.location.href='https://adwokatlublin.info.pl/index.php#after-form-submit'">Wyślij
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Online Advice End -->


<!-- Footer Start -->
<div id="contact" class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5">
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="d-flex p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Telefon</h5>
                    <p class="m-0">791 208 208</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-envelope-open text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Email</h5>
                    <p class="m-0">adwokat.lublin@o2.pl</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="d-flex p-4">
                <div>
                    <h5 class="text-white">ul. 3 Maja 20/2A , 20-078 Lublin</h5>
                    <p class="m-0">Godziny pracy od poniedziałku do piątku w godzinach 9 - 16</p>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.3528540176326!2d22.55602421576049!3d51.24941227959358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472257680bf6fc57%3A0xfedc342f557d0cc0!2s3%20Maja%2C%2020-000%20Lublin!5e0!3m2!1spl!2spl!4v1582535621342!5m2!1spl!2spl"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <style>
            @media (max-width: 768px) {
                .office-map {
                    padding-top: 100px;
                    padding-bottom: 100px;
                }
            }
        </style>
        <div class="col-lg-6 office-map">
            <div class="d-flex p-4">
                <div>
                    <h5 class="text-white">ul. Stefana Kardynała Wyszyńskiego 3B/2, 21-300 Radzyń Podlaski</h5>
                    <p class="m-0">Godziny pracy od poniedziałku do piątku w godzinach 9 - 15</p>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2468.459526123798!2d22.604845715780048!3d51.7794870796808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4722193890b91d79%3A0x3d5f251f357be4c3!2sStefana+Kardyna%C5%82a+Wyszy%C5%84skiego+3A%2C+Radzy%C5%84+Podlaski!5e0!3m2!1spl!2spl!4v1467299428173"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row p-4 mt-5 mx-0">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">Copyright 2022 © Aneta Lipska</p>
        </div>
        <div class="col-md-6 text-center text-md-right">
            <p class="m-0 text-white">Wszystkie prawa zastrzeżone</p>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<div class="alert text-center cookiealert" role="alert">
    Ta strona używa plików cookies. &#x1F36A; Korzystając z niej wyrażasz zgodę na ich używanie.
    <a href="https://pl.wikipedia.org/wiki/HTTP_cookie" target="_blank">Dowiedz się więcej</a>
    <button type="button" class="btn btn-primary btn-sm acceptcookies">Rozumiem</button>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/main.js"></script>
<script src="assets/js/cookies.js"></script>
<script src="assets/js/contact-form.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>

</body>
</html>