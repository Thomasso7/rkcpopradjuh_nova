<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oznamy</title>
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

<div class="container">
    <h1 class="announcement">Aktuálne oznamy</h1>
    <div>
        <a href="{{asset("Subory/" . $oznamy[$oznamy->count() - 1]->subor)}}"><p>{{$oznamy[$oznamy->count() - 1]->nazov}}</p></a>
        @auth()
            @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'admin')
        <a href="{{url('uprav_oznamy', $oznamy[$oznamy->count() - 1]->id)}}">
            <button class="btn-edit">Uprav</button>
        </a>
        <a href="{{url('zmazOznamy', $oznamy[$oznamy->count() - 1]->id)}}">
            <button class="btn-delete">Zmaž</button>
        </a>
            @endif
        @endauth
    </div>
</div>


<div class="container">
    <h1>Všetky oznamy</h1>
    @for($i = $oznamy->count() - 2; $i >= 0; $i--)
    <a href="{{asset("Subory/" . $oznamy[$i]->subor)}}"><p>{{$oznamy[$i]->nazov}}</p></a>
        <div>
            @auth()
                @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'admin')
            <a href="{{url('uprav_oznamy', $oznamy[$i]->id)}}">
                <button class="btn-edit">Uprav</button>
            </a>
            <a href="{{url('zmazOznamy', $oznamy[$i]->id)}}">
                <button class="btn-delete">Zmaž</button>
            </a>
                @endif
            @endauth
        </div>
    @endfor
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
