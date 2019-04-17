
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png"> 
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="/img/favicons/site.webmanifest">
        <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/img/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
        <meta name="google-site-verification" content="c-am3HNN1LeLeLyvm00_ZbnQ0HFSk7kf2qk8BeWkdhw" />
        <meta name="msvalidate.01" content="D217ECA34453376753F21846ECCD21B0" />
        <meta name="theme-color" content="#ffffff">

        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="https://capitaldistricttherapy.com/img/common/cdtfb.jpg">
        <meta property="og:url" content="https://capitaldistricttherapy.com/">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:site_name" content="Capital District Marriage and Family Therapy">
        <meta name="twitter:image:alt" content="Capital District Marriage and Family Therapy">

        <link rel="canonical" href="https://capitaldistricttherapy.com" />
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700|Open+Sans:400,700" rel="stylesheet">
        <meta name="robots" content="noindex">
        
    </head>
    
    <body class="activePage">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Application Home</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="/listings">All Listings</a>
                            <a class="dropdown-item" href="/listings/create">Create a Listing</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Tax Professionals</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="content">
            <!-- message output -->
            @if(session()->has('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('info'))
                <div class="alert alert-info">
                    {{ session()->get('info') }}
                </div>
            @endif
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        
        <script src="/js/app.js"></script> 
    </body>
</html>
