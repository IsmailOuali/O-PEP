<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Roles</title>
</head>
<body>
    <div class="role-countainer pt-20 pr-20 mr-20 flex flex-col space-y-4 space-x-10">

    <p class="space-x-10   "> Choose a role:</p>
    <button id="clientBtn" class="w-3/5  mt-10 h-12 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
        Sign up as Client
    </button>
    <button id="AdminBtn" class="w-3/5 h-12 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
        Sign up as Admin
    </button>
        
    </div>


    <script>
        function redirectClient(){ 
        window.location = "http://localhost/O-PEP/client.php"
        };
        document.getElementById("clientBtn").addEventListener("click", redirectClient);
        
        function redirectAdmin(){ 
        window.location = "http://localhost/O-PEP/nav-admin.php"
        };
        document.getElementById("AdminBtn").addEventListener("click", redirectAdmin);
    </script>
</body>
</html>