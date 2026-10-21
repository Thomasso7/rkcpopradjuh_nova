<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aktuality</title>
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
                    <a href="/#sviatosti" onclick=scrollIntoSacraments()>Sviatosti</a>
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

<section class="section-padding">
    <div id="news" class="container">
        <h2 class="section-title">
            Aktuality
        </h2>
    </div>
    <div class="cards-grid cards-actualities">
        @foreach($aktuality as $aktualita)
        <div class="card">
            @auth()
                @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'admin')
                    <div class="admin-btns">
                        <a href="{{url('uprav_aktualitu', $aktualita->id)}}">
                            <button class="btn-edit">Uprav</button>
                        </a>
                        <a href="{{url('zmazAktualitu', $aktualita->id)}}">
                            <button class="btn-delete">Zmaž</button>
                        </a>
                    </div>
                @endif
            @endauth
            <div class="card-image">
                <img src="{{asset("Subory/" . $aktualita->obrazok)}}" alt="kaplnka">
            </div>
            <div class="card-body">
                <span class="card-date">{{$aktualita->datum}}</span>
                <h3>{{$aktualita->nazov}}</h3>
                <p>{{$aktualita->text}}</p>
                @if($aktualita->plagat != null)
                <a href="{{asset("Subory/" . $aktualita->plagat)}}" class="btn">Čítať viac</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>

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
