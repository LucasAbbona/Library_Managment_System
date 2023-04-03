<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MLS | Dashboard</title>
    @vite(['resources/css/app.scss'])
    @vite(['resources/js/app.js'])
    
</head>
<body>
    <nav class="SideBarBack">
        <div class="mt-3">
            <a href="/" class=" text-decoration-none"><h1 class=" FontClean fs-2 text-white text-center">Manage Your Library</h1></a>
        </div>
        <div class="DashLines"></div>
        <div class="flex align-items-center my-3">
            <div class="d-flex gap-3 ps-4">
                <div class="ImagenUsuario"></div>
                <div class="d-flex flex-column justify-content-center">
                    <p class="FontClean text-white fs-5 fw-bold">Username</p>
                </div>
            </div>
        </div>
        <div class="DashLines"></div>
        <ul class="DashListStyles d-flex flex-column align-items-start gap-3 mt-4">
            <li><i class="bi bi-speedometer2 text-white"></i> <a class="FontClean text-white text-decoration-none fs-5" href="/dashboard">Dashboard</a></li>
            <li><i class="bi bi-book text-white"></i> <a class="FontClean text-white text-decoration-none fs-5" href="/books">Books</a></li>
            <li><i class="bi bi-send text-white"></i> <a class="FontClean text-white text-decoration-none fs-5" href="/issued">Issued</a></li>
            <li><i class="bi bi-arrow-return-left text-white"></i> <a class="FontClean text-white text-decoration-none fs-5" href="/returned">Returned</a></li>
            <li><i class="bi bi-sign-no-left-turn text-white"></i> <a class="FontClean text-white text-decoration-none fs-5" href="/not-returned">Not Returned</a></li>
            <li><i class="bi bi-person text-white"></i> <a class="FontClean text-white text-decoration-none fs-5" href="/members">Members</a></li>
        </ul>
    </nav>
    {{$slot}}
</body>
</html>