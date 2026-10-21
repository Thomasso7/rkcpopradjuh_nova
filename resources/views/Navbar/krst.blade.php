<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krst</title>
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

<div class="page-header-krst">
    <div class="container">
        <h1>Sviatosť Krstu</h1>
    </div>
</div>
<div class="content-wrapper">
    <p>Svätý krst je základom celého kresťanského života, vstupnou bránou do života v Duchu a bránou, ktorá otvára prístup k ostatným sviatostiam.</p>
    <h2>Ako postupovať pri nahlásení krstu?</h2>
    <p>Krst dieťaťa prichádzajú nahlásiť na farský úrad osobne rodičia dieťaťa (stačí jeden z rodičov) počas úradných hodín, najlepšie aspoň 3 týždne pred plánovaným termínom krstu.</p>
    <ul class="checklist">
        <li>
            Prineste si so sebou <strong>rodný list dieťaťa</strong> (stačí kópia).
        </li>
        <li>
            Ak ste zosobášení, prineste si aj <strong>sobášny list.</strong>
        </li>
        <li>
            Vyplňte krstný lístok (dostanete v kancelárii).
        </li>
    </ul>
    <div class="info-box">
        <h3>Podmienky pre krstných rodičov</h3>
        <p>Aby niekto mohol prijať úlohu krstného rodiča, Kódex kánonického práva vyžaduje splnenie týchto podmienok:</p>
        <ul>
            <li>
                Zavŕšil šestnásty rok života.
            </li>
            <li>
                Je katolík, bol na prvom svätom prijímaní a prijal sviatosť birmovania.
            </li>
            <li>
                Žije život primeraný viere a úlohe, ktorú má prijať (ak žije s partnerom, musia byť zosobášení v katolíckom kostole).
            </li>
            <li>
                Nie je otcom ani matkou krstenca.
            </li>
        </ul>
    </div>
    <h2>Krstná náuka</h2>
    <p>Pred udelením sviatosti krstu je potrebná príprava – krstná náuka pre rodičov a krstných rodičov. Termín náuky si dohodnete priamo pri nahlasovaní krstu v kancelárii.</p>
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
