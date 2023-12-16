<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Si-Jali Admin Website</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap');
        .font-family-poppins { font-family: poppins; }
    </style>
</head>
<body class="bg-gray-200 font-family-poppins flex items-center justify-center h-screen">
    @if(session()->has('loginError'))
        <div class="">
            {{ session('loginError') }}
            <button></button>
        </div>
    @endif
    <div class="box-content bg-white max-w-lg px-12 rounded-xl shadow-lg">
        <div class="pt-5 pb-4">
            <img src="img/logo.png" alt="logo" width="128px" class="mx-auto my-auto">
        </div>
        <div class="text-center pb-3">
            <p class="text-3xl pb-2">Masuk</p>
        </div>
        <form action="/login" method="post">
            @csrf
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
            </div>
            <div class="flex flex-col pt-6 pb-6">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
            </div>
            <div class="pb-6">
                <button class="text-white w-64 py-2 px-2 rounded-lg font-bold" style="background-color: #e55604;">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
