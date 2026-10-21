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
        <h1>Sviatosť Manželstva</h1>
    </div>
</div>
<div class="content-wrapper">
    <p><strong>Muž a žena</strong>, ktorí chcú prijať <strong>sviatosť manželstva</strong>, musia v prvom rade aspoň pol roka dopredu a osobne zahlásiť svoj <strong>termín sobáša</strong>, a to počas <strong>úradných hodín</strong> (viď <a href="{{url('kancelaria')}}">Kancelária</a>).</p>
    <h2>Sobášna zápisnica</h2>
    <p>Potom je treba spísať <strong>zápisnicu</strong> v dohodnutom čase v kancelárii CENTRA FARNOSTI aspoň <strong>tri mesiace</strong> pred sobášom.</p>
    <p>Sobášna zápisnica môže byť spísaná len na základe <strong>civilnej žiadosti o uzavretie manželstva</strong>, ktorú si snúbenci vybavia na Matričnom úrade v Poprade. K tomu sú potrebné platné občianske preukazy a rodné listy (originály).</p>
    <p>K sobášnej zápisnici potrebujeme <strong>krstné listy</strong> snúbencov, ktoré vydávajú farské úrady
        v mieste ich krstu a ktoré ku dňu spísania zápisnice nesmú byť staršie ako tri mesiace. Aby mohlo byť uzavreté sviatostné manželstvo, snúbenci musia byť pokrstení katolíci, pobirmovaní, pristupovať k sv. prijímaniu a žiť kresťanským spôsobom života. V opačnom prípade sa cez našu farnosť vyžaduje povolenie diecézneho biskupa.</p>
    <div class="info-box">
        <h3>Príprava na manželstvo</h3>
        <p>Snúbenci musia absolvovať <strong>prípravu</strong> formou, ktorá je uvedená na stránke <a href="{{url('https://www.domanzelstva.sk/')}}">www.domanzelstva.sk</a>  – v našej diecéze sú <a href="{{url('https://www.domanzelstva.sk/spisska-dieceza')}}">tieto termíny</a> (aj na plagáte dolu) – alebo inú podľa dohody pri zahlásení <strong> termínu sobáša.</strong>
            <a href="{{asset('Subory/piatkove-nauky-2026-01.jpg')}}">Tu sú termíny večerných náuk pre rok 2026</a> (spolu treba absolvovať 5 tém). Konajú sa spolu aj pre farnosť Poprad – mesto, a to <strong>v Pastoračnom centre</strong> na Nábreží Jána Pavla II. 438/15 (pod bývalou budovou Katolíckej univerzity) <strong>v piatky o 19:30. Je potrebné sa na konkrétnu náuku vopred <a href="{{url('https://www.rkcpoprad.sk/snubenecke-nauky/')}}">prihlásiť</a> do štvrtku 12:00!!!</strong></p>
    </div>
    <p><strong>V Kostole sv. Cyrila a Metoda v Poprade na Juhu</strong> sobášime každú sobotu, okrem adventu a pôstu, v časoch od 13.00h do 16.00h.</p>
</div>
<div class="img-manzelstvo">
    <img src="{{asset('Subory/priprava_manzelstvo.jpg')}}" alt="priprava">
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
