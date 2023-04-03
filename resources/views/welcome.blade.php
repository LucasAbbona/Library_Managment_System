<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library </title>
    <link href="/" rel="stylesheet" />
    @vite(['resources/css/app.scss'])
    @vite(['resources/js/app.js'])
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <nav class="navegacion d-flex flex-row justify-content-end">
        <div class="ConfigNavbar w-50 d-flex flex-row justify-content-between align-items-center ">
            <div class="animate__animated animate__bounceInDown">
                <h1 class="titulo text-center text-white"><i>LMS</i></h1>
                <p class="fs-5 text-center text-white ">Your Library Managment System</p>
            </div>
            <a href="" class="FontClean btn btn-light h-25 animate__animated animate__bounceInDown">Login</a>
        </div>
    </nav>
    <div class="HomeBack d-flex justify-content-end pe-5 align-items-center">
        <div class="ListStyles animate__animated animate__flipInX">
            <ul class="d-flex flex-column w-100 align-items-center gap-4">
                <li class="text-white fs-3 FontClean" >Your Tools</li>
                <li class="ListLine"></li>
                <li><a  class="FontClean text-white fs-4 text-decoration-none" href="/books">Books</a></li>
                <li><a  class="FontClean text-white fs-4 text-decoration-none" href="/issued">Issued</a></li>
                <li><a  class="FontClean text-white fs-4 text-decoration-none" href="/returned">Returned</a></li>
                <li><a  class="FontClean text-white fs-4 text-decoration-none" href="/not-returned">Not Returned</a></li>
                <li><a  class="FontClean text-white fs-3 text-decoration-none" href="/members">Members</a></li>
            </ul>
        </div>
    </div>
    <footer class="footer d-flex flex-column align-items-center">
        <div class="d-flex flex-row jusify-content-between px-5 w-100 pt-5">
            <div class="d-flex flex-row w-100 gap-4 align-items-center">
                <h1 class="logoShadow text-white fw-light fs-1"><i>LMS</i></h1>
                <div class="LineFooter"></div>
                <a class="FontClean text-white text-decoration-none" href="">Home</a>
                <a class="FontClean text-white text-decoration-none" href="">Use Terms</a>
                <a class="FontClean text-white text-decoration-none" href="">Support</a>
            </div>
            <div class="d-flex flex-row align-items-end">
                <p class="FontClean text-white d-flex"><b class="FontClean pe-2">Contact:</b>somemail@some.com</p>
            </div>
        </div>
        <div class="-pb-5">
            <p class="FontClean text-white">Copyright 2023 ©. All Rights reserved</p>
        </div>
    </footer>
</body>
</html>