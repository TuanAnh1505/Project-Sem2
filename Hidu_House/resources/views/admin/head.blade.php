<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hodu</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    {{-- <link
      rel="icon"
      href="/fontend/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    /> --}}

    <!-- Fonts and icons -->
    <script src="/fontend/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["/fontend/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/fontend/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/fontend/css/plugins.min.css" />
    <link rel="stylesheet" href="/fontend/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/fontend/css/demo.css" />
