<?php 
    include 'config.php'

    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <title>Sign up</title>
    </head>
    <body class="h-screen flex items-center justify-center">

        <section class="bg-[#4ABB29] p-8 rounded shadow-md w-96">
            <h1 class="text-2xl font-bold mb-4">Sign up</h1>
            <form method="post">
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600">Full Name</label>
                    <input type="text" class="mt-1 p-2 w-full border rounded-md" placeholder="">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600">Username</label>
                    <input type="text" class="mt-1 p-2 w-full border rounded-md" placeholder="">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600">Email</label>
                    <input type="email" class="mt-1 p-2 w-full border rounded-md" placeholder="">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600">Password</label>
                    <input type="password" class="mt-1 p-2 w-full border rounded-md" placeholder="">
                </div>
                <input type="button" name="" value="Register" id="Register" class="bg-blue-500 text-white p-2 rounded-md cursor-pointer">
            </form>
            <a class="text-sm underline pt-15px" href="login.php">Already have an account click here to log in</a>
        </section>


        <script>
            function redirect(){ 
                window.location = "http://localhost/O-PEP/role.php"
            };
            document.getElementById("Register").addEventListener("click", redirect);
        </script>
    </body>
</html>