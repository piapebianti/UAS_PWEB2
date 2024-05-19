<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Login >.</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#626365]">
    <div class="flex justify-center h-screen w-screen items-center">
     <form method="POST" class="w-full md:w-1/2 flex flex-col items-center " >
        @csrf
         <!-- text login -->
         <h1 class="text-center text-4xl font-bold text-[#E4842C] mb-6">PANEL <span class="text-white">LOGIN</span></h1>
         <!-- email input -->
         <div class="w-3/4 mb-6">
             <input type="username" name="username" id="username" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-[#E4842C]" placeholder="Username">
         </div>
         <!-- password input -->
         <div class="w-3/4 mb-6">
             <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-[#E4842C] " placeholder="Password">
         </div>

         <div class="w-3/4 mt-4">
             <button type="submit" class="py-4 hover:bg-slate-400 w-full rounded hover:text-black font-bold bg-[#E4842C] text-white"> LOGIN</button>
         </div>
     </div>
    </div>
 </body>
</html>