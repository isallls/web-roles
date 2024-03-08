<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <body class="bg-gray-200 flex items-center justify-center h-screen ">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h2 class="text-2xl font-semibold mb-4">Login</h2>
            <form action="{{ route('login') }}" method="POST" >
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                    <input type="text" id="username" name="email"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <input type="checkbox" name="" id="" class="mb-3">
                <label for="" class="mb-2 font-medium text-gray-600">remember me</label>
                <button type="submit"
                    class="w-full bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Login
                </button>
            </form>
        </div>
    </body>
    
</body>
</html>