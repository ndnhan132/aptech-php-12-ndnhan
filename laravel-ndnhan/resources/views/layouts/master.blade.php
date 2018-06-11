
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        @section('header')
        <div class="d-flex flex-row my-2">
            <div class="col-sm-4 d-flex align-items-center p-0">
                <a href="" class="my-auto">Subscribe</a>
            </div>
            <div class="col-sm-4 d-flex align-items-center justify-content-center">
                <a href="">
                    <h1 class="text-center">Large</h1>
                </a>
            </div>
            <div class="col-sm-4 d-flex justify-content-end align-items-center">
                <a href="" class="btn">
                    <i class="fa fa-search"></i>
                </a>
                <a href="" class="btn btn-outline-dark">Sign up</a>
            </div>
        </div>
        <hr class="my-0">

        @show


        @section('nav')
        <nav class="navbar bg-white navbar-expand-lg px-0">
            <div class="collapse navbar-collapse d-flex flex-row" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto  w-100 justify-content-between">
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link pl-0">World</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">U.S.</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">Technology</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">Design</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">Culture</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">bussiness</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">Politics</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">Opinion</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">Science</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">Health</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link">Style</a></li>
                    <li class="nav-item d-flex justift-content-center align-items-center"><a href="" class="nav-link pl-0">Travel</a></li>
                </ul>
            </div>
        </nav>
        @show

        @section('slide')
        <div class="w-100 bg-dark d-flex flex-row card border-secondary text-white">
            <div class="col-6 p-5">
                <h1 class="font-italic font-weight-bold">Title of a longer featured blog post</h1>
                <p class="py-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                <a href="" class="text-white">Continue reading...</a>
            </div>
        </div>
        @show

         @section('footer')
        <footer class="row mx-0 d-flex flex-column justify-content-center align-items-center text-center border-top border-dark mt-4 py-5">
            <p class="col-12">Blog template built for <a href="">Bootstrap</a> by <a href="">@mdo</a>.</p>
            <a href="" class="col-12">Back to top</a>
        </footer>
             @show
    </div>
</body>
</html>