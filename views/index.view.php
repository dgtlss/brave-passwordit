<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwordit</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="shortcut icon" href="/dist/favicon.png" type="image/png">
</head>
<body class="bg-gray-900 h-screen w-full">
    <div class="max-w-3xl w-full mx-auto rounded-lg bg-gray-700 p-2 mt-4 shadow-sm">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <div>
                
            </div>
        </div>
    </div>
    <div id="linkArea" class="w-full mx-auto max-w-3xl mt-6">
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-3">
                <h2 class="text-xl font-bold text-white mt-2">
                    My Passwords
                </h2>
            </div>
            <div>
                <div id="addNewLink" class="bg-indigo-600 text-white text-center rounded-md py-2 cursor-pointer hover:bg-indigo-700 duration-200 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline -mt-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                    </svg>
                    Add New Link
                </div>
            </div>
        </div>
    </div>
    <?= require "modals/add-new-link.view.php" ?>
    <script src="/dist/js/jquery.min.js"></script>
    <script src="/dist/js/app.js"></script>
</body>
</html>