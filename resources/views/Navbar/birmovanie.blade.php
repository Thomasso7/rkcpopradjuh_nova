<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Birmovanie</title>
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
        <h1>Sviatosť Birmovania</h1>
    </div>
</div>
<div class="content-wrapper">
    <p>Sviatosť birmovania spolu s krstom a eucharistiou tvorí jeden celok sviatostí do kresťanského života viery.</p>
    <h2>Birmovný rodič</h2>
    <p>Aby niekto plnil úlohu birmovného rodiča, musí podľa Kódexu kánonického práva (kánon 892, 893 a 874) spĺňať tieto podmienky:</p>
    <ul class="checklist">
        <li>
            Musí zavŕšiť <strong>šestnásty</strong> rok života.
        </li>
        <li>
            Musí byť <strong>katolík</strong>,  <strong>pobirmovaný</strong>  a  ktorý už prijal najsvätejšiu Eucharistiu  a  vedie život primeraný viere a úlohe, ktorú má prijať.
        </li>
        <li>
            <strong>Nesmie</strong>  byť postihnutý nijakým kánonickým trestom, zákonne uloženým alebo vyhláseným.
        </li>
        <li>
            <strong>Nesmie</strong> byť otcom alebo matkou birmovanca.
        </li>
    </ul>
    <div class="info-box">
        <h3>Birmovným rodičom teda nemôže byť:</h3>
        <ul>
            <li>
                <strong>Pokrstený</strong>, ktorý patrí do nekatolíckej cirkvi (napr. pravoslávny, evanjelik a.v.).
            </li>
            <li>
                Ten, kto žije v spoločnej domácnosti s mužom (ženou), s ktorým (ou) neuzavrel (a) sviatostné manželstvo (v katolíckom kostole).
            </li>
            <li>
                Ten, kto je <strong>rozvedený</strong> a nemá od biskupa dovolenie pristupovať k sviatostiam.
            </li>
        </ul>
    </div>
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
