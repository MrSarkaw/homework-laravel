<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>homework</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            .img{
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
       
    </head>
    <body class=" bg-gray-900">
        <div class="w-full h-48 img border-b border-white rounded-b-3xl" style="background-image: url({{ asset('avatar/cover.jpg') }});"></div>
        <div class="-mt-32">
            <div class="w-40 mx-auto mt-4 h-40  flex overflow-hidden  rounded-full">
                <img src="{{ asset('avatar/img.jpg') }}">
            </div>
            <div class="w-60 bg-white text-center rounded-full mx-auto mt-1 px-4  py-1 text-gray-900">
                <p>Sarkaw Salar</p> 
                <p class="text-sm">FullStack Developer</p>
            </div>
        </div>

        <p class="text-xl mx-2 mt-4 bg-white text-center p-2 rounded-full">Latest Project</p>

        <div class="grid grid-cols-3 gap-10 mt-5 px-3">
            <a class="duration-200 hover:scale-90 transform" href="https://kurdchain.trade/#/">
                <img class="w-full rounded-t-3xl" src="{{ asset('wallpaper/kurdchian.jpg') }}" alt="">
                <p class="rounded-b-3xl bg-white py-2 text-xl border-t text-center">Kurdchain</p>
            </a>
            <a class="duration-200 hover:scale-90 transform" href="https://shekhzademullk.com/">
                <img class="w-full rounded-t-3xl" src="{{ asset('wallpaper/shexzade.jpg') }}" alt="">
                <p class="rounded-b-3xl bg-white py-2 text-xl border-t text-center">Shekhzade</p>
            </a>
            <a class="duration-200 hover:scale-90 transform" href="https://msa.net">
                <img class="w-full rounded-t-3xl" src="{{ asset('wallpaper/msa.jpg') }}" alt="">
                <p class="rounded-b-3xl bg-white py-2 text-xl border-t text-center">Modern Student Aid</p>
            </a>
        </div>


        <p class="text-xl mx-2 mt-10 bg-white text-center p-2 rounded-full">Skills</p>

        <div class="grid grid-cols-2 gap-10 p-2">
            <div class="rounded-3xl p-4 bg-white">
                <p class="my-2 text-center bg-gray-900 text-white rounded-full">backend</p>
                <div class="grid grid-cols-5 gap-10">
                    <a href="https://laravel.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a> 
                    <a href="https://www.djangoproject.com/" target="_blank" rel="noreferrer"> <img src="https://framagit.org/uploads/-/system/project/avatar/28062/django.png" alt="django" width="40" height="40"/> </a>
                    <a href="https://expressjs.com" target="_blank" rel="noreferrer"> <img src="https://pngimage.net/wp-content/uploads/2018/05/express-js-png-5.png" alt="express" width="40" height="40"/> </a> 
                    <a href="https://www.w3schools.com/cs/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/csharp/csharp-original.svg" alt="csharp" width="40" height="40"/> </a>
                     <a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> 
                     <a href="https://graphql.org" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/graphql/graphql-icon.svg" alt="graphql" width="40" height="40"/> </a> 
                     <a href="https://www.java.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" alt="java" width="40" height="40"/> </a> 
                     <a href="https://www.mongodb.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mongodb/mongodb-original-wordmark.svg" alt="mongodb" width="40" height="40"/> </a> 
                     <a href="https://www.microsoft.com/en-us/sql-server" target="_blank" rel="noreferrer"> <img src="https://www.svgrepo.com/show/303229/microsoft-sql-server-logo.svg" alt="mssql" width="40" height="40"/> </a> 
                     <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> 
                     <a href="https://nodejs.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nodejs/nodejs-original-wordmark.svg" alt="nodejs" width="40" height="40"/> </a> 
                     <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> 
                     <a href="https://www.python.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" alt="python" width="40" height="40"/> </a> 
                     <a href="https://www.sqlite.org/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/sqlite/sqlite-icon.svg" alt="sqlite" width="40" height="40"/> </a> 
                     <a href="https://laravel-livewire.com/" target="_blank" rel="noreferrer"> <img src="https://laravel-livewire.com/img/underwater_jelly.svg" alt="livewire" width="40" height="40"/> </a>
                    </div>
                </div>
                <div class="rounded-3xl p-4 bg-white">
                    <p class="my-2 text-center bg-gray-900 text-white rounded-full">FrontEnd</p>
                    <div class="grid grid-cols-5 gap-10">
                        <a href="https://nuxtjs.org/" target="_blank" rel="noreferrer"> <img src="https://iconape.com/wp-content/png_logo_vector/nuxt-logo.png" alt="vuejs" width="40" height="40"/> </a> 
                        <a href="https://vuejs.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/vuejs/vuejs-original-wordmark.svg" alt="vuejs" width="40" height="40"/> </a>  
                        <a href="https://vuetifyjs.com/en/" target="_blank" rel="noreferrer"> <img src="https://bestofjs.org/logos/vuetify.svg" alt="vuetify" width="40" height="40"/> </a> 
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> 
                        <a href="https://ejs.co/" target="_blank" rel="noreferrer"> <img src="https://ejspr.com/app/uploads/2021/03/EJS-Monogram_Grass-Green_High-Res.png" alt="livewire" width="40" height="40"/> </a>
                        <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40"/> </a>
                        <a href="https://www.chartjs.org" target="_blank" rel="noreferrer"> <img src="https://www.chartjs.org/media/logo-title.svg" alt="chartjs" width="40" height="40"/> </a>
                        <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a>
                        <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> 
                        <a href="https://www.adobe.com/in/products/illustrator.html" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/adobe_illustrator/adobe_illustrator-icon.svg" alt="illustrator" width="40" height="40"/> </a> 
                        <a href="https://www.photoshop.com/en" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/photoshop/photoshop-line.svg" alt="photoshop" width="40" height="40"/> </a> 
                        <a href="https://pugjs.org" target="_blank" rel="noreferrer"> <img src="https://cdn.worldvectorlogo.com/logos/pug.svg" alt="pug" width="40" height="40"/> </a> 
                        <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40"/> </a> 
                        <a href="https://www.adobe.com/products/xd.html" target="_blank" rel="noreferrer"> <img src="https://cdn.worldvectorlogo.com/logos/adobe-xd.svg" alt="xd" width="40" height="40"/> </a>
                        
                    </div>
                </div>
        </div>
        <div class="mt-10 rounded-t-3xl py-2 text-2xl bg-white text-gray-900 text-center ">
            <p>See my open source project on <a class="text-blue-400" href="https://github.com/MrSarkaw">github</a> </p>
        </div>
    </body>
</html>
