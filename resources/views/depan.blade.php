<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
    <meta name="description"
        content="Free open source Tailwind CSS starter template (Hero Product) to use with node.js/npm, postcss+purgecss!">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,hero, product">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="manifest" href="../site.webmanifest">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#3b7977">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
    <meta name="description"
        content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.tailwindtoolbox.com/">
    <meta property="og:title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
    <meta property="og:description"
        content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
    <meta property="og:image" content="https://www.tailwindtoolbox.com/social.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.tailwindtoolbox.com/">
    <meta property="twitter:title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
    <meta property="twitter:description"
        content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
    <meta property="twitter:image" content="https://www.tailwindtoolbox.com/social.png">


    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Totally optional :) -->

</head>

<body class="bg-gray-400 font-sans leading-normal tracking-normal">

    <!--Nav-->
    <nav class="bg-gray-800 p-2 mt-0 w-full">
        <!-- Add this to make the nav fixed: "fixed z-10 top-0" -->
        <div class="container mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                    <span class="text-2xl pl-2"><i class="em em-apple"></i> Sindu Ardinata</span>
                </a>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="/">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="{{ route('register') }}">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!--Hero-->
    <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
        <!--Left Col-->
        <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
            <p class="uppercase tracking-loose"></p>
            <h1 class="font-bold text-3xl my-4">Welcome to My Website</h1>
            <p class="leading-normal mb-4"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum nisi est
                porro. Sed reprehenderit possimus corrupti expedita non deleniti suscipit alias harum. Sequi iure esse
                odit nostrum voluptatibus ex ut.</p>

        </div>
        <!--Right Col-->
        <div class="w-full lg:w-1/2 lg:py-6 text-center">
            <!--Add your product image here-->
            <svg class="fill-current text-gray-900 w-3/5 mx-auto" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <path
                    d="M17 6V5h-2V2H3v14h5v4h3.25H11a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6zm-5.75 14H3a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5.75zM11 8v8h6V8h-6zm3 11a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
        </div>

    </div>



    <!--Container-->
    <div class="bg-white h-screen">
        <div class="container mx-auto pt-24 md:pt-16 px-6">
            <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates veniam dolor quam
                accusamus facere voluptatem quasi odit modi, porro in ipsum repellendus perferendis quos reprehenderit,
                blanditiis distinctio debitis incidunt deserunt.</p>
        </div>

    </div>


</body>

</html>