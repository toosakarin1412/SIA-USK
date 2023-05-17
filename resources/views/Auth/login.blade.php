<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body
    class="h-screen w-screen bg-emerald-400 flex items-center justify-center md:flex md:items-center md:justify-center">

    <form class="h-auto flex flex-col items-center justify-center md:flex md:flex-row md:gap-10" method="post">
        <div class="w-auto bg-emerald-400 mb-32 md:relative md:bottom-[2rem]">
            <p class="text-2xl font-extrabold md:text-4xl md:text-left text-center">
                SIA - USK
            </p>
            <p class="text-xl font-medium text-center md:text-left md:text-2xl">
                Sistem Informasi Akademik Universitas Syiah Kuala
            </p>
        </div>
        <div
            class="flex flex-col items-center gap-4 bg-gray-50 w-[25rem] md:w-[30rem] h-[34rem] md:h-[36rem] justify-center rounded-2xl">
            <img src="{{ asset('unsyiah.png') }}" class="w-24 h-24 mb-20" />
            <p class="text-left font-medium text-xl text-black">
                Welcome Back!
            </p>
            <div class="flex flex-col gap-2 md:flex md:items-center">
                <div class="flex items-center w-auto">
                    <div class=" bg-gray-400 rounded-l-md h-12 w-10 flex items-center justify-center">
                        <HiOutlineUser size={20} />
                    </div>
                    <input type="text" placeholder="Username"
                        class="bg-white opacity-75 rounded-r-md md:w-[20rem] w-[17rem]" name="username" />
                </div>
                <div class="flex items-center">
                    <div class="bg-gray-400 h-12 w-10 rounded-l-md flex items-center justify-center">
                        <HiOutlineKey size={20} />
                    </div>
                    <input type="password" placeholder="Password"
                        class="bg-white opacity-75 rounded-r-md md:w-[20rem] w-[17rem]" name="password" />
                </div>
            </div>
            <div class="flex flex-col gap-2 mt-4 md:flex md:items-center">
                <Link href="">
                </Link>
                <button
                    class="bg-emerald-200 hover:bg-emerald-400 py-2 px-4 rounded-md opacity-75 font-bold md:w-[22.5rem] w-[19.5rem]">
                    Login
                </button>
                <hr class="h-px w-full bg-gray-300 border-0" />
                <div>
                    <button
                        class="bg-emerald-200 hover:bg-emerald-400 py-2 px-4 rounded-md opacity-75 font-bold md:w-[22.5rem] w-[19.5rem]">
                        Sigle Sign On
                    </button>
                </div>
            </div>
            <p class="text-center font-medium text-base text-black">
                &#169; Meone & toosakarin
            </p>
        </div>
    </form>

</body>

</html>
