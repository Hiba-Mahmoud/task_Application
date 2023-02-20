<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>


<nav>
        <div class="container">
           <div class="row justify-content-between">

               <div class="col-lg-2 col-6">
                   <div class="d-flex">
                       <div class="d-lg-none menu-icon" onclick="openNav()">
                           <div class="line line-1"></div>
                           <div class="line line-2"></div>
                           <div class="line line-3"></div>
                       </div>
                       <div class="logo">
                           <p>logo</p>
                       </div>
                   </div>

               </div>

               <div class="col-7 menu">

                   <ul class="main-menu">
                       <li><a href="home.html">
                        الرئيسيه
                        </a></li>
                       <li><a href="about-us.html">
                         من نحن</a></li>
                       <li><a href="projects.html">المشاريع</a></li>
                       <li><a href="index.html">الصور</a></li>
                       <li><a href="{{url('contact-us')}}"> اتصل بنا </a></li>
                   </ul>
               </div>
               <div class="col-3">
                   <div class="icons">
                       <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                       <a href=""><i class="fa-solid fa-user"></i></a>
                   </div>
               </div>
           </div>
        </div>
</nav>
    {{--  content starts --}}
    @yield('content')
    {{--  content ended --}}

    @extends('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>
