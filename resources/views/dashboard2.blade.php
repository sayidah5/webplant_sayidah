<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href={{asset('css/style.min.css')}}>
  <link rel="stylesheet" href={{asset('assets/bootstrap/css/bootstrap.min.css')}}>
</head>
<body>

    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
      <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <h2 class="text-white" style="color: white;">Teman Tanaman</h2>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/home"><span class="icon home" aria-hidden="true"></span>Home</a>
                </li>
                {{-- <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Posts
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="posts.html">All Posts</a>
                        </li>
                        <li>
                            <a href="new-post.html">Add new post</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a class="show-cat-btn" href="">
                        <span class="icon folder" aria-hidden="true"></span>Kategori
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="kategorihias">Tanaman Hias</a>
                            <a href="kategoribuah">Tanaman Buah</a>
                        </li>
                    </ul>
                    <ul class="sidebar-body-menu" style="margin-left: -17%;">
                        <li>
                            <a class="active" href="/logout"><span class="icon home" aria-hidden="true"></span>Logout</a>
                        </li>
                    </ul>
                </li>


            </aside>
    <div class="container ms-5">
        @yield('template')
    </div>
</div>
</div>

<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>
