<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBookmarks</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    @include('template.menuprincipal')


<div class="container w-full mx-auto pt-20">

<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

    <div class="flex flex-row flex-wrap flex-grow mt-2">

        @yield('content')
       
    </div>

    <!--/ Console Content-->

</div>


</div>
<!--/container-->

@include('template.footer')



</body>
</html>