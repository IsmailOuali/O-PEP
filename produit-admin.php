<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Produits panel</title>
</head>

<body>
    <div class="countainer pt-10 flex flex-col items-center justify-center">
        <a class="w-3/5 text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Ajouter Un produit
        </a>
        <div class="product-table">
            <table class="space-x-10">
                <th>
                    id
                </th>
                <th>
                    Nom
                </th>
                <th>
                    origine
                </th>
                <th>
                    Taille
                </th>
                <th>
                    Temperature
                </th>
                <th>
                    Prix
                </th>
                <th>
                    Id categorie
                </th>
            </table>
        </div>

    </div>

</body>

</html>