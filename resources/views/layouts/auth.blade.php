<html lang="en" class="hydrated">
<head>
    <meta charset="UTF-8">
    <style data-styles="">
        ion-icon {
            visibility: hidden
        }

        .hydrated {
            visibility: inherit
        }

        .w-45 { width: 15rem; }
        .invalid-feedback { color: #e3342f; }

    </style>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="/images/logo/png/white_logo_transparent_background_favicon.png" rel="icon" type="image/png">

    <!-- title and description-->
    <title>Socialite</title>
    <meta name="description" content="@yield('title') | Student AI Tools">

    <!-- css files -->
    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="/css/auth.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</head>

<body data-new-gr-c-s-check-loaded="14.1154.0" data-gr-ext-installed="">
    @yield('content')

    <!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->
    <script src="/js/uikit.min.js"></script>
    <script src="/js/script.js"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
