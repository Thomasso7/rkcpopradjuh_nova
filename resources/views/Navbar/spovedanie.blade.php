<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spovedanie</title>
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
        <h1>Pravidelné spovedanie (bližsie aktuálne oznamy)
            @if($exceptions->count() > 0)
                <h2 class="exception">{{$exceptions[0]->exception}}
            @endif
        @auth()
            @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'admin')
                <a href="{{url('pridaj_vynimku')}}">
                    <button class="btn btn-add">Pridaj výnimku</button>
                </a>
                @if($exceptions->count() > 0)
                <a href="{{url('zmazVynimku', $exceptions[0]->id)}}">
                    <button class="btn-delete">Zmaž výnimku</button>
                </a>
                 @endif
            @endif
        @endauth
    </div>
    <div class="container contact-grid2">
        <div>
            <div class="contact-box table-box">
                <table>
                    <tbody>
                    <tr class="table-row">
                        <th>Pondelok</th>
                        <td>6:15 - 6:40</td>
                        <td></td>
                        <td>17:30 - 18:15</td>
                        <td></td>
                    </tr>
                    <tr class="table-row">
                        <th>Utorok</th>
                        <td>6:15 - 6:40</td>
                        <td>11:30 - 11:55</td>
                        <td>17:30 - 18:15</td>
                        <td></td>
                    </tr>
                    <tr class="table-row">
                        <th>Streda</th>
                        <td>6:15 - 6:40</td>
                        <td>15:30 - 15:55</td>
                        <td>17:30 - 18:15</td>
                    </tr>
                    <tr class="table-row">
                        <th>Štvrtok</th>
                        <td>6:15 - 6:40</td>
                        <td>11:30 - 11:55</td>
                        <td>17:30 - 18:15</td>
                        <td>19:15 - 20:00</td>
                    </tr>
                    <tr class="table-row">
                        <th>Piatok</th>
                        <td>6:15 - 6:40</td>
                        <td>15:30 - 15:55</td>
                        <td>17:30 - 18:15</td>
                    </tr>
                    <tr class="table-row">
                        <th>Sobota</th>
                        <td>6:30 - 6:55</td>
                        <td></td>
                        <td>16:30 - 16:55</td>
                    </tr>
                    </tbody>
                </table>
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
