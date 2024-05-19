<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioKu >.</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F5F5F5]">
    <nav class="justify-between w-full fixed">
        <div class="text-right py-5 mr-40 space-x-5 text-lg text-black">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skill">Skills</a>
            <a href="">Disigner</a>
            <a href="">Photo</a>
            <a href="{{ url('/panel') }}" class="text-[#B96D31]">Panel Login</a>
        </div>
    </nav>

    <section name="home" id="home" class="block max-w-full mx-auto py-20 px-0">
        <div class="mx-auto text-center mt-20">
            <h1 class="text-black text-5xl">PORTFOLIO</h1>
        </div>
        <div class="text-center mt-10">
            <div class="flex flex-wrap mx-[400px]">
            <h2>2022</h2>
            <div class="bg-black w-[400px] h-[2px] mx-5 mt-5"></div>
            <h2 class="ml-[475px] -mt-6">2023</h2>
        </div>
    </section>

    <section name="about" id="about" class="max-w-full mx-auto flex py-40 px-0 justify-between bg-[#F5EFE1]">
        <div class=" bg-[#626365] flex flex-wrap rounded-xl items-center mt-6 ml-52">
            <img src="img/fia.png" alt="" class="w-[234px] rounded-xl">
        </div>

        <div class="block mr-52 text-black text-justify">
            <h1 class="text-5xl font-bold">ABOUT ME</h1>
            <p class="mt-2 text-[#B96D31] font-bold">Halo semuanya, terimakasih sudah mengizinkan saya</p>
            <p class="text-[#B96D31] font-bold">memperkenalkan diri. Nama saya Silvia Umur saya 20 tahun</p>
            <p class="text-[#B96D31] font-bold">Saya berasal dari Tegal Jawa Tengah.</p> 
            <p class="text-[#B96D31] font-bold">Saya seorang mahasiswa politeknik harapan bersama</p>

            <div class="flex wrap text-black mt-5">
                <h3 class="font-bold">Contact Me</h3>
                <div class="bg-black w-[300px] h-[2px] ml-2 mt-3"></div>
            </div>

            <div class="flex wrap text-black mt-5">
                <img src="https://i.ibb.co/cJ2y8d9/depositphotos-235261792-stock-illustration-phone-icon-black-white-telephone-removebg-preview-1.png" alt="">
                <h2 class="ml-1 mt-2">085722912782</h2>

                <img src="https://i.ibb.co/Y20xyP2/0f0fa8c1c5b982b324748fd47a8e5dc1-removebg-preview-1.png" alt="" class="ml-20 -mt-2">
                <h2 class="ml-1 mt-2">@piyaapeb</h2>
            </div>

            <form method="POST" class="">
                @csrf
                <div class="text-white text-xl my-5 space-x-2">
                    <label for="nama" class="text-[#B96D31]">Nama </label>
                    <input type="text" name="nama" id="nama" class="w-[500px] rounded-md px-2 text-black">
                </div>
    
                <div class="text-white text-xl my-5 space-x-2">
                    <label for="email" class="text-[#B96D31]">Email </label>
                    <input type="email" name="email" id="email" class="w-[503px] rounded-md px-2 text-black">
                </div>
    
                <div class="text-white text-xl my-5 space-x-2">
                    <textarea name="pesan" id="pesan" cols="58" rows="3" class="text-black rounded-md px-2" placeholder="Pesan..."></textarea>
                </div>
    
                <button type="submit" class="bg-[#B96D31] text-center py-1 px-10 rounded-md text-white mx-auto">Kirim</button>
            </form>
        </div>
    </section>

    <section name="skill" id="skill" class="max-w-full mx-auto flex py-40 px-0 justify-between ">
        <div class="grid grid-cols-5 grid-rows-5 gap-4 mx-auto ml-52">
            <div class="bg-slate-500 py-5 text-center px-10 w-[400px]">
                <h2 class="text-black font-bold text-xl">SKILLS</h2>
                <h4 class="text-black text-left text-xl">Canva</h4>
                <h4 class="text-black text-left text-xl">Picsart</h4>
                <h4 class="text-black text-left text-xl">Capcut Video Editor</h4>
                <img src="img/gambar1.png" alt="" class="-mt-20 ml-48">
            </div>
            <div class="col-start-1 row-start-2 bg-slate-500 py-5 text-left px-10 w-[400px]">
                <h2 class="text-white text-xl">Typography</h2>
                <h4 class="text-black font-bold text-xl ml-7">Instagram</h4>
                <h4 class="text-black font-bold text-xl ml-7">Story</h4>
                <img src="img/gambar2.png" alt="" class="-mt-20 ml-60 w-[100px]">
                <img src="img/gambar3.png" alt="" class="-mt-28 ml-48 w-[100px]">
            </div>
            <div class="col-start-1 row-start-3 bg-slate-500 py-5 text-left px-10 w-[400px]">
                <h2 class="text-white text-xl">Editor</h2>
                <h4 class="text-black font-bold text-xl ml-7">Video</h4>
                <img src="img/gambar4.png" alt="" class="mt-10 ml-44 w-[150px]">
                <img src="" alt="" class="-mt-28 ml-48 w-[100px]">
                <img src="img/gambar5.png" alt="" class="-mt-12 ml-44 w-[150px]">
                <img src="" alt="" class="-mt-28 ml-48 w-[100px]">
            </div>

            <div class="ml-60 col-start-2 row-start-1 bg-slate-500 text-left px-10 w-[400px]">
                <h2 class="text-black text-xl font-bold text-center pt-7">DESIGNER</h2>
            </div>

            <div class="ml-60 col-start-2 row-start-2 bg-slate-500 text-left px-10 w-[400px]">
                <h2 class="text-black text-xl font-bold text-center pt-7 italic">Editor</h2>
                <h2 class="text-white text-xl font-bold text-center pt-5 pl-10">Photo</h2>
            </div>

            <div class="ml-60 row-start-3 bg-slate-500 text-left px-10 w-[400px]">
                <div class="bg-black w-[300px] h-[2px] ml-2 mt-10"></div>
                <h2 class="text-black text-5xl font-bold text-center pt-10 italic">THANK YOU</h2>
                <div class="bg-black w-[300px] h-[2px] ml-2 mt-7"></div>
            </div>
            <!-- <div class="col-start-2 row-start-1">4</div>
            <div class="col-start-2 row-start-2">5</div>
            <div class="row-start-3">6</div> -->
        </div>
    </section>
</body>
</html>