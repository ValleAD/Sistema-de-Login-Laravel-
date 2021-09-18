<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="/static/css/style_nav.css" rel="stylesheet">

    <!-- Styles -->
  
</head>
<body>
    <div id="app">
        <nav>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @guest
                    @if (Route::has('login'))
                              
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                               
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                               
                    @endif

                    @else
                          
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="/static/img/vector.png" alt="{{ Auth::user()->name }}">
                        </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a id="log" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <b>{{ __('Log out') }}</b>
                        </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                </div>
                           
            @endguest
                </div>
              
                    <div><img src="/static/img/logo.png"></div>
           
            </div>          
        </nav>
        <nav id="nav"></nav>
        
        <h1>Listado de anuncios</h1>    
    

    
        <ul>
            <section>
                <figure>
                    <img id="image" src="/static/img/image 8.png"><figcaption>Marion Lee</figcaption>
                </figure>
                <hr width="1" size="90"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repellendus perspiciatis quibusdam voluptatem eaque id adipisci ea recusandae velit assumenda illum magni, natus esse perferendis nostrum, pariatur at error! Eligendi.</p>
                </section>

            <section>
                <figure>
                    <img id="image" src="/static/img/image 8.png"><figcaption>Marion Lee</figcaption>
                </figure>
                <hr width="1" size="90"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repellendus perspiciatis quibusdam voluptatem eaque id adipisci ea recusandae velit assumenda illum magni, natus esse perferendis nostrum, pariatur at error! Eligendi.</p>
                </section>
            
            <section> 
                <figure>  
                    <img id="image" src="/static/img/image 8.png"><figcaption>Marion Lee</figcaption>
                </figure>
                <hr width="1" size="90"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repellendus perspiciatis quibusdam voluptatem eaque id adipisci ea recusandae velit assumenda illum magni, natus esse perferendis nostrum, pariatur at error! Eligendi.</p>
                </section>
        </ul>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
       
    <footer>

        <aside>
            <p>P.O Box 902 3472 Ullamcorper Street
            <br>Lynchburg DC 29738
            <br>(268) 442-2428
            </p>
        </aside>

        
       <center>
            <p>Copyright© 2020<br>
                <br>Powered by <b>PROgresso Labs</b>
            </p>   
        </center>
        
    </footer>
   
</body>
</html>
