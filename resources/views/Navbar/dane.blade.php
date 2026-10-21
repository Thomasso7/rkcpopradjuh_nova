<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manželstvo</title>
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
        <h1>2% z dane</h1>
    </div>
</div>
<div class="content-wrapper">
    <p>Na podporu našej farnosti vzniklo občianske združenie Slnko pod Tatrami.
        Toto združenie je oprávnené prijímať 2% z dane, uchádzať sa o rôzne granty a zapájať sa do výziev, vďaka čomu je možné získať ďalšie finančné prostriedky na podporu života našej farnosti.</p>
    <h2>Na čo budú získané prostriedky použité?</h2>
    <ul class="checklist">
        <li>
            podpora pastoračnej činnosti vo farnosti Poprad – Juh
        </li>
        <li>
            výstavba fary
        </li>
        <li>
            opravy kostola a pastoračných priestorov
        </li>
    </ul>
    <h2>Prečo sa tento rok zvlášť oplatí poukázať podiel zaplatenej dane?</h2>
    <p>V roku 2026 môžete poukázať svoje 2% z dane nielen občianskemu združeniu, ale aj rodičom – dôchodcom.
        Spolu tak viete poukázať až 6% (resp. 7%) z dane:</p>
    <ul class="checklist">
        <li>
            2% mama
        </li>
        <li>
            2% otec
        </li>
        <li>
            2% (resp. 3%) občianske združenie
        </li>
    </ul>
    <h2>Údaje o občianskom združení</h2>
    <p>Názov: Slnko pod Tatrami<br>
        (pôvodný názov: Neziskové združenie 36)<br>
        IČO: 55790127<br>
        Sídlo: Šrobárova 2668/21, 058 01 Poprad<br>
        IBAN: SK17 7500 0000 0040 3455 6339<br></p>
    <a href="{{asset('Subory/vyhlasenie.pdf')}}">
        <h2 class="vyhlasenie">Vyhlásenie 2%</h2>
    </a>
    <div class="info-box">
        <h3>Dôležité upozornenie</h3>
        <p>Občianske združenie OZ Slnko pod Tatrami vzniklo transformáciou Neziskového združenia 36, Podunajská 12542/23F, 821 06 Bratislava – mestská časť Podunajské Biskupice. Keďže k tejto transformácii došlo až po registrácii združenia v Notárskom centrálnom registri prijímateľov 2 %, sú v zozname prijímateľov dočasne uvedené pôvodné údaje (názov a adresa). Poukázané 2 % z dane sú však viazané na IČO a budú v plnej výške prevedené nášmu občianskemu združeniu.</p>
    </div>
    <p><strong>Bližšie informácie o tom, ako poukázať 2% z dane, nájdete na oficiálnej stránke:</strong><br>
        <a href="{{url('https://www.slovensko.sk/sk/zivotne-situacie/zivotna-situacia/_ako-poukazat-2-z-dani/')}}">
            👉https://www.slovensko.sk/sk/zivotne-situacie/zivotna-situacia/_ako-poukazat-2-z-dani/<br>
        </a>
    </p>
    <p><strong>Ďakujeme všetkým, ktorí sa aj takýmto spôsobom rozhodnú podporiť našu farnosť – aj vďaka vám môže rásť a efektívnejšie slúžiť.</strong></p>
</div>
<div class="img-manzelstvo">
    <img src="{{asset('Subory/2-z-dane.jpeg')}}" alt="dane">
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
