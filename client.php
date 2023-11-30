<?php
include 'config.php';
$sqlstore = "SELECT * from plante JOIN categorie where plante.id_cat = categorie.id";
$resultstore = mysqli_query($conn, $sqlstore);



    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O-PEP store</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">


</head>

<body class=" text-gray-600">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="bg-lime-600 w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />


            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                    href="#">
                    <img src="images/les-plantes.png" class="w-10 h-10 p-2" alt="">
                    O'PEP
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path
                            d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>

                <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                        <circle cx="10.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>

    <section class=" py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                        href="#">
                        Store
                    </a>

                    <div class="bg-lime-600 flex items-center" id="store-nav-content">

                        <form action="" method="post">
                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <select name="select" id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Select</option>
                                    <?php

                                    $sqlCtg = "SELECT * from categorie";
                                    $reqCtg = mysqli_query($conn, $sqlCtg);
                                    while ($row = mysqli_fetch_row($reqCtg)) {
                                        ?>
                                        <option value="<?php echo $row['0'] ?>">
                                            <?php echo $row['1'] ?>
                                        </option>
                                        <?php
                                    }
                                    
                                    ?>
                                    <option value="0">All</option>
                                </select>
                            </a>

                            <input type="submit" value="Search" name="search">
                        </form>

                    </div>
                </div>
            </nav>

            <?php
            if (@$_POST['search']) {
                $catid = $_POST['select'];
                $sqlshowcat = "SELECT * from plante where id_cat = $catid";
                $reqshowcat = mysqli_query($conn, $sqlshowcat);
                if (!$reqshowcat) {
                    die('Error');
                }

                while ($showcat = mysqli_fetch_assoc($reqshowcat)) {
                    ?>
                    <div class="w-40 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="#">
                            <img class="w-full hover:grow hover:shadow-lg" src="images/<?php echo $showcat['img'] ?>">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">
                                    <?php echo $showcat['nom'] ?>
                                </p>
                            <p class="pt-1 text-gray-900">$
                                <?php echo $showcat['Prix'] ?>
                            </p>
                            <p><?php echo $catid ?></p>
                        </a>
                    </div>
                    <?php
                }


            } 
            else{

                while ($rowstore = mysqli_fetch_row($resultstore)) {
                    
                    ?>
                    <div class="w-40 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="#">
                            <img class="w-full hover:grow hover:shadow-lg" src="images/<?php echo $rowstore['7'] ?>">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">
                                    <?php echo $rowstore['1'] ?>
                                </p>
                                <p>
                                    <?php echo $rowstore['9'] ?>
                                </p>
                            </div>
                            <p class="pt-1 text-gray-900">$
                                <?php echo $rowstore['5'] ?>
                            </p>
                        </a>
                    </div>
                    <?php
                }
            
            }
            ?>

        </div>

    </section>




</body>

</html>