<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen">
    <div class="w-64 duration-500 bg-emerald-400 h-full">
        <div class="flex gap-x-6 p-2 pt-5 items-center justify-end">
            <div class="flex gap-x-4 items-center">
                <img src="{{ asset('unsyiah.png') }}" class="cursor-pointer duration-500" />
                <h1 class="text-black font-semibold text-xl duration-500">
                    SIA - USK
                </h1>
            </div>
            <div class="mr-2">
                <HiMenuAlt2 size={20} class="cursor-pointer origin-right" />
            </div>
        </div>
        <hr class="mx-3" />
        <div class="flex gap-x-6 p-2 pt-5 items-center justify-start">
            <div class="flex gap-x-4 items-center p-3">
                <img src="{{ asset('UserProfile.jpg') }}" class="sticky cursor-pointer rounded-full w-10 h-10" />
                <div>
                    <h1 class="text-center font-medium text-sm duration-500">
                        Meone
                    </h1>
                </div>
            </div>
        </div>
        <div class="mt-4 flex flex-col gap-4 relative">
            <div class="flex flex-col text-sm gap-4 font-medium p-2 rounded-md mx-5">
                <button class="hover:bg-emerald-600 text-left rounded-md p-2">
                    <a href="{{ route('biodata') }}">
                        Biodata
                    </a>
                </button>
                <button class="hover:bg-emerald-600 text-left rounded-md p-2">
                    <a href="{{ route('security') }}">
                        Security Sign In
                    </a>
                </button>
                <button class="hover:bg-emerald-600 text-left rounded-md p-2">
                    <a href="{{ route('dashboard') }}">
                        Back to Dashboard
                    </a>
                </button>
                <button class="hover:bg-emerald-600 text-left rounded-md p-2">
                    <a href="{{ route('Logout') }}">
                        Logout
                    </a>
                </button>
            </div>
        </div>
    </div>
    @yield('contentSetting')
</body>

</html>
