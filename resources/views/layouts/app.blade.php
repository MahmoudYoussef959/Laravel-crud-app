<head>
    <meta charset="UTF-8">
    <title>CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
    <a class="navbar-brand" href="#">CRUD</a>
      <div class="collapse  navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="{{route('posts.index')}}">All Posts</a>
    </div>
  </div>
  </nav>

   <div class="container_index">
    @yield('content')
  </div>



  