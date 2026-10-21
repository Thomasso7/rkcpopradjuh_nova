<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kancelária</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Roboto+Slab:wght@100..900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="background-main">
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
        <h1>Kancelária a kontakty</h1>
    </div>
    <div class="container contact-grid">
        <div>
            <div class="contact-box">
                <h2>Farský úrad</h2>
                <p>
                    <strong>Adresa:</strong>
                    <br>
                    Námestie sv. Cyrila a Metoda 4388/59
                    <br>
                    058 01 Poprad - Juh
                </p>
                <p>
                    <strong>Email:</strong>
                    rkcpopradjuh@gmail.com
                </p>
                <h3 style="margin-top: 30px;">Úradné hodiny</h3>
                <table>
                    <tbody>
                        <tr>
                            <th>Pondelok</th>
                            <td>8:30 - 10:00  17:00 - 18:00</td>
                        </tr>
                        <tr>
                            <th>Utorok</th>
                            <td>17:00 - 18:00</td>
                        </tr>
                        <tr>
                            <th>Streda</th>
                            <td>17:00 - 18:00</td>
                        </tr>
                        <tr>
                            <th>Štvrtok</th>
                            <td>Nestránkový deň</td>
                        </tr>
                        <tr>
                            <th>Piatok</th>
                            <td>9:00 - 10:00  17:00 - 18:00 (okrem prvého piatku)</td>
                        </tr>
                    </tbody>
                </table>
                <p style="font-size: 0.85rem; color: #9E9E9E; margin-top: 15px">* V súrnych prípadoch (zaopatrovanie) nás kontaktuje kedykoľvek telefonicky na čísle 0950 277 199. </p>
            </div>
        </div>
        <div>
            <div class="contact-box">
                <h2>Kňazi vo farnosti</h2>
                <div class="priest-card">
                    <div class="priest-photo"></div>
                    <div class="priest-info">
                        <h3>ThLic. Peter Nákačka PhD.</h3>
                        <p style="color: var(--accent-color); font-weight: bold;">Farár</p>
                        <p>Tel: </p>
                    </div>
                </div>
                <div class="priest-card">
                    <div class="priest-photo"></div>
                    <div class="priest-info">
                        <h3>Mgr. Vladimír Bača</h3>
                        <p style="color: var(--accent-color); font-weight: bold;">Farský vikár</p>
                        <p>Tel: </p>
                    </div>
                </div>
                <div class="priest-card">
                    <div class="priest-photo"></div>
                    <div class="priest-info">
                        <h3>Mgr. Marek Mrekaj</h3>
                        <p style="color: var(--accent-color); font-weight: bold;">Farský vikár</p>
                        <p>Tel: </p>
                    </div>
                </div>
                <div class="priest-card">
                    <div class="priest-photo"></div>
                    <div class="priest-info">
                        <h3>Mgr. Jozef Gorčák</h3>
                        <p style="color: var(--accent-color); font-weight: bold;">Farský vikár</p>
                        <p>Tel: </p>
                    </div>
                </div>
            </div>
        </div>
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
