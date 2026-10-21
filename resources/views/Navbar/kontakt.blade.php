<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Roboto+Slab:wght@100..900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="background-sviatosti">
<header>
    <div class="container header-content">
        <div class="logo">
            <a href="/">
                <img src="{{asset('Subory/logo-cm-wide-color2.png')}}" alt="logo">
            </a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="/">Domov</a>
                </li>
                <li>
                    <a href="{{url('oznamy')}}">Oznamy</a>
                </li>
                <li>
                    <a href="/#sviatosti">Sviatosti</a>
                </li>
                <li>
                    <a href="{{url('kancelaria')}}">Kancelária</a>
                </li>
                <li>
                    <a href="{{url('kontakt')}}">Kontakt</a>
                </li>
                <li>
                    <a href="{{url('login')}}">
                        <img class="login" src="{{asset("Subory/img.png")}}" alt="login">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="page-header">
    <div class="container">
        <h1>Kontakt</h1>
    </div>
</div>
<div class="content-wrapper">
    <p><strong>Rímskokatolícka cirkev, farnosť Poprad – Juh</strong></p>
    <p>Námestie sv. Cyrila a sv. Metoda 4388/59
        058 01 Poprad</p>
    <p>tel.: 0950/277 199</p>
    <p>e-mail: <a href="mailto:farnost@rkcpopradjuh.sk">farnost@rkcpopradjuh.sk</a> alebo <a href="mailto:rkcpopradjuh@gmail.com">rkcpopradjuh@gmail.com</a></p>
    <p>facebook:  <a href="{{url('https://www.facebook.com/rkcpopradjuh/')}}">www.facebook.com/rkcpopradjuh</a></p>
    <p>Bankové spojenie: VÚB, a.s., pobočka Poprad <br>
        Názov účtu: <strong>Rímskokatolícka cirkev, farnosť Poprad – Juh</strong> <br>
        Číslo účtu IBAN: <strong>SK22 0200 0000 0039 8547 3956</strong></p>
    <img src="{{asset('Subory/QR-code-rkcpopradjuh-dar.jpg')}}" alt="qrcode">
    <p><strong>Dary na stavbu novej fary a opravy kostola <br>
        Číslo účtu IBAN: SK90 0200 0000 0041 1263 2457</strong></p>
    <p>Názov právneho subjektu: <strong>Rímskokatolícka cirkev, farnosť Poprad – Juh</strong></p>
    <p>Sídlo právneho subjektu:
        <strong>Námestie sv. Cyrila a sv. Metoda 4388/59, 058 01 Poprad</strong></p>
    <p>IČO: <strong>51 844 532</strong></p>
    <p>DIČ: <strong>2120800143</strong></p>
    <p>Právna forma: <strong>Právnická osoba – Cirkevná organizácia (721)</strong></p>
    <p>SK NACE: <strong>94.91.0 Činnosti cirkevných organizácií</strong></p>
    <p>Registrácia: <strong>Ministerstvo kultúry SR, cirkevný odbor</strong></p>
    <p>Register: <strong>Štatistický úrad SR, register organizácií</strong>
        <a href="{{url('https://slovak.statistics.sk/wps/portal/ext/Databases/register_organizacii/!ut/p/z1/jZDRboIwFIafxQsu1x4oDthdYyJicAlbQNYbU1kt1UFJqSPx6YdeK_PcnJzk-0_y_ZjhErOW_yrJrdIt_xnvL_a6o1mWfaZFAXHhLSEhbgzveQ6wDPD2BixiuvKDFCBM4zkkdJV_RBkhQAlmz-ThwVB4Lj8BsOn3a8zUvkFD1SBAoQ-BP3f9yHNJNK6rvmc2i43ErOO2flHtQePSCKl6K8xOG8lbdeGVUleUtnsSjqgRB2GEQWczFlhb2_VvDjgwDAMyp6rTneHfx3ON-pMD93K17i0u7-CjLbsJTfX9n3HX5Hl5ScU2tFEiZ7M_C3XAQw!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/')}}">https://slovak.statistics.sk/wps/portal/ext/Databases/<br>register_organizacii</a></p>
</div>

<footer>
    <div class="container">
        <div class="footer-grid">
            <div>
                <h4>Kontakt</h4>
                <p style="margin-top: 0;">
                    Rímskokatolícka farnosť
                    <br>
                    sv. Cyrila a Metoda
                    <br>
                    Poprad - Juh
                </p>
                <p>Email: rkcpopradjuh@gmail.com</p>
            </div>
            <div>
                <h4>Rýchle odkazy</h4>
                <a href="{{url('https://www.facebook.com/rkcpopradjuh/')}}">Facebook</a>
                <a href="{{url('https://www.instagram.com/rkc_popradjuh/#')}}">Instagram</a>
                <a href="{{url('kancelaria')}}">Úradné hodiny kancelárie</a>
                <a href="{{url('oznamy')}}">Poriadok bohoslužieb</a>
                <a href="{{url('dane')}}">Podpora farnosti (2% z dane)</a>
            </div>
            <div>
                <h4>Užitočné stránky</h4>
                <a href="{{url('https://www.dokostola.sk/')}}">Dokostola.sk</a>
                <a href="{{url('https://www.katolickenoviny.sk/')}}">Katolícke noviny</a>
                <a href="{{url('https://svatepismo.sk/')}}">Sväté písmo</a>
                <a href="{{url('https://www.lumen.sk/')}}">Rádio Lumen</a>
                <a href="{{url('https://www.kapitula.sk/sk')}}">Kapitula</a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2026 Rímskokatolícka farnosť Poprad - Juh. Všetky práva vyhradené.
        </div>
    </div>
</footer>
</body>
</html>
