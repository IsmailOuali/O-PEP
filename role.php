<?php
include 'config.php';
session_start();
$id = $_SESSION['id'];

echo $id;
if (@$_POST['Cbtn']) {
    $sqlClient = "UPDATE users SET id_role = 1 where id = $id";
    $reqClient = mysqli_query($conn, $sqlClient);
    $_SESSION['status'] = 'client';
    header('Location: client.php');
    
}
else if(@$_POST['Abtn']){
    $sqlAdmin = "UPDATE users Set id_role = 2 where id = $id";
    $reqAdmin =  mysqli_query($conn, $sqlAdmin);
    $_SESSION['status'] = 'admin';
    header('Location: nav-admin.php');
}
?>

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

        <form action="" method="post">
            <p class="m-10 text-lg font-bold"> Choose a role:</p>
            <input type="submit" name="Cbtn" id="clientBtn" value="Sign up as Client"
                class="m-10 w-3/5 mt-10 h-12 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">


            <input type="submit" name="Abtn" id="AdminBtn" value="Sign up as Admin"
                class="m-10 w-3/5 font-bold	 h-12 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
            
        </form>

    </div>



</body>

</html>