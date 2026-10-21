<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rímskokatolícka farnosť Poprad - Juh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Roboto+Slab:wght@100..900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                        <a href="#" onclick=scrollIntoSacraments()>Sviatosti</a>
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

    <section class="hero">
        <div class="container">
            <h1>Vitajte vo farnosti Poprad - Juh</h1>
            <p>Rímskokatolícka farnosť sv. Cyrila a Metoda.</p>
            @auth()
                @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'admin')
                    <a href="{{url('pridaj_oznamy')}}">
                        <button class="btn">Pridaj oznamy</button>
                    </a>
                @endif
            @endauth
            <div class="hero-buttons">
                <a href="{{asset("Subory/" . $oznamy[$oznamy->count() - 1]->subor)}}" class="btn btn-oznamy">
                    <span class="material-symbols-outlined">notification_sound</span>
                    <span>Sv. omše - Farské oznamy</span>
                </a>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div id="news" class="container">
            <h2 class="section-title">
                Aktuality
            </h2>
            @auth()
                @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'admin')
                    <a href="{{url('pridaj_aktualitu')}}">
                        <button type="button" class="btn btn-add">Pridaj aktualitu</button>
                    </a>
                @endif
            @endauth
        </div>
        <div class="cards-grid">
            @for($i = 1; $i < 4; $i++)
            <div class="card">
                @auth()
                    @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'admin')
                        <div class="admin-btns">
                            <a href="{{url('uprav_aktualitu', $aktuality[$aktuality->count() - $i]->id)}}">
                                <button class="btn-edit">Uprav</button>
                            </a>
                            <a href="{{url('zmazAktualitu', $aktuality[$aktuality->count() - $i]->id)}}">
                                <button class="btn-delete">Zmaž</button>
                            </a>
                        </div>
                    @endif
                @endauth
                <div class="card-image">
                    <img src="{{asset("Subory/" . $aktuality[$aktuality->count() - $i]->obrazok)}}" alt="obrazok">
                </div>
                <div class="card-body">
                    <span class="card-date">{{$aktuality[$aktuality->count() - $i]->datum}}</span>
                    <h3>{{$aktuality[$aktuality->count() - $i]->nazov}}</h3>
                    <p>{{$aktuality[$aktuality->count() - $i]->text}}</p>
                    @if($aktuality[$aktuality->count() - $i]->plagat != null)
                    <a href="{{asset("Subory/" . $aktuality[$aktuality->count() - $i]->plagat)}}" class="btn">Čítať viac</a>
                    @endif
                </div>
            </div>
            @endfor
        </div>
        <div style="text-align: center ; margin-top: 40px;">
            <a href="{{url('aktuality')}}" class="btn">Všetky aktuality</a>
        </div>
    </section>

    <section class="section-padding sviatosti-bg" id="sviatosti">
        <div class="container">
            <h2 class="section-title">
                Sviatosti a služby
            </h2>
            <div class="services-grid">
                <a href="{{url('krst')}}">
                <div class="service-item">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">water_drop</span>
                    </div>
                    <h3>Krst</h3>
                </div>
                </a>
                <a href="{{url('birmovanie')}}">
                <div class="service-item">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <h3>Birmovanie</h3>
                </div>
                </a>
                <a href="{{url('manzelstvo')}}">
                <div class="service-item">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">partner_heart</span>
                    </div>
                    <h3>Manželstvo</h3>
                </div>
                </a>
                <a href="{{url('spovedanie')}}">
                <div class="service-item">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">book_2</span>
                    </div>
                    <h3>Sviatosť zmierenia</h3>
                </div>
                </a>
                <a href="{{url('pohreb')}}">
                <div class="service-item">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">candle</span>
                    </div>
                    <h3>Pohreb</h3>
                </div>
                </a>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container about-flex">
            <div class="about-text">
                <h2 class="section-title" style="text-align: center;">
                    O farnosti
                </h2>
                <p>Naša farnosť sv. Cyrila a Metoda v Poprade - Juhu je živým spoločenstvom veriacich. Snažíme sa vytvárať priestor pre duchovný rast, vzájomnú pomoc a spoločné slávenie sviatostí.</p>
                <p>Okrem farského kostola spravujeme aj filiálku v Kvetnici. Sme tu pre vás vo všetkých dôležitých životných okamihoch.</p>
            </div>
            <div class="about-image">
                <img src="{{asset("Subory/kostol-CM-01.jpg")}}" alt="Kostolík">
            </div>
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

<script>
    function scrollIntoSacraments() {
        document.getElementById('sviatosti').scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    }
</script>
</html>
