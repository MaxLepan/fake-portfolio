<html>
<!--<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Marie-Louise Bourreau - Portfolio</title>
    <style>
        body {
            background-image: url("images/background2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>

<nav class="flex flex-wrap items-center justify-between p-4">
    <div class="navbar-menu ">
        <a class="block inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="/">
            Accueil
        </a>
        <a class="block inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="/realisations.html">
            Mes réalisations
        </a>
        <a class="block inline-block mt-4 lg:mt-0 text-blue-900 hover:text-indigo-600" href="/contact.html">
            Contact
        </a>
    </div>
</nav>-->

<form class="flex w-full max-w-sm space-x-3 m-auto">
    <div class="w-full max-w-2xl px-5 py-10 m-auto mt-10 bg-white rounded-lg shadow dark:bg-gray-800">
        <div class="mb-6 text-3xl font-light text-center text-gray-800 dark:text-white">
            Contactez moi !
        </div>
        <div class="grid max-w-xl grid-cols-2 gap-4 m-auto">
            <div class="col-span-2 lg:col-span-1">
                <div class=" relative ">
                    <input type="text" id="contact-form-name"
                           class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                           placeholder="Nom"/>
                </div>
            </div>
            <div class="col-span-2 lg:col-span-1">
                <div class=" relative ">
                    <input type="text" id="contact-form-email"
                           class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                           placeholder="Email"/>
                </div>
            </div>
            <div class="col-span-2">
                <label class="text-gray-700" for="name">
                    <textarea
                            class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            id="comment" placeholder="Entrez votre message" name="comment" rows="5"
                            cols="40"></textarea>
                </label>
            </div>
            <div class="col-span-2 text-right">
                <button type="submit"
                        class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                    Send
                </button>
            </div>
        </div>
    </div>
</form>

<!--<h4 class="text-center text-sm my-20">© Marie-Louise Bourreau - 2021</h4>-->
</body>
</html>