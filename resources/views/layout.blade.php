
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <style type="text/css">
          .material-icons.md-48 { font-size: 48px; }
          .material-icons.md-24 { font-size: 24px; }
  
    </style>

    <title>@yield('title')</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center py-3 mb-4 border-bottom bg-dark">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none mx-5">
          <span class="fs-4">MyBlog</span>
        </a>
  
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto mx-5">
          <a class="me-3 py-2 text-white text-decoration-none" href="/">Home</a>
          <a class="me-3 py-2 text-white text-decoration-none" href="/about">About</a>
          <a class="me-3 py-2 text-white text-decoration-none" href="/contact">Contact Us</a>
          <a class="me-3 py-2 text-white text-decoration-none" href="/review">Review</a>
        </nav>
    </div>

    @yield('main_content')

    <footer class="blog-footer bg-dark">
        <p class="text-center my-4 text-white">Blog template built for <a class="text-white" href="https://getbootstrap.com/">Bootstrap</a> by <a class="text-white" href="https://twitter.com/mdo">@mdo</a>.</p>
        <p class="text-center text-white">
          <a class="text-white" href="/">Back to top</a>
        </p>
    </footer>
</body>
</html>

