<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Password Manager</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="shortcut icon" href="/dist/favicon.png" type="image/png">
</head>
<body class="bg-gray-900 h-screen">
    <div class="mx-auto max-w-3xl w-full mt-12">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
        </svg>
    </div>
    <div class="max-w-3xl w-full mt-12 mx-auto bg-gray-100 rounded-md p-4 shadow-md">
        <h1 class="font-bold text-zinc-800 text-xl">
            Login to passwordit
        </h1>
        <form action="" method="POST">
            <div class="mt-8">
                <label for="" class="text-xs text-gray-500">Email Address</label>
                <input type="text" name="" id=""
                class="w-full px-2 py-2 rounded-md ring-1 ring-gray-200 mb-2"
                placeholder="Email Address"
                >

                <label for="" class="text-xs text-gray-500 mt-4">Password</label>
                <input type="password" name="" id=""
                class="w-full px-2 py-2 rounded-md ring-1 ring-gray-200 mb-2"
                placeholder="Password">
            </div>
            <div class="w-full mt-4">
                <button type="submit" class="w-full bg-green-500 text-center rounded-md text-white py-2 hover:bg-green-600 duration-200 transition-all">
                    Login
                </button>
            </div>
        </form>
        <div class="w-full mt-4">
            <a href="/auth/register.php" class="text-sm text-gray-600" >Need an account? Register here</a>
        </div>
    </div>
    <script src="/dist/js/jquery.min.js"></script>
    <script src="/dist/js/app.js"></script>
</body>
</html>