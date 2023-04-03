<!doctype html>
<html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-r from-[#171A25] to-[#001440] lg:mx-[100px] my-[100px]">
    <span class="flex justify-center text-[80px] text-white uppercase font-bold">Lorem Ipsum</span>
    
    <div class="grid grid-cols-5 mt-[100px]">
        {{-- Cards --}}
        @foreach ($pokemon as $mon)
        <div class="flex flex-col m-[8px] px-[16px] bg-gradient-to-b from-[#333] to-[#111] rounded-br-[15px]">
            {{-- <img class="self-center mt-[20px] mb-[20px]" width="120" alt="img" src="https://unpkg.com/pokeapi-sprites@2.0.2/sprites/pokemon/other/dream-world/2.svg"/>
             --}}
            <div class="flex justify-between items-center pb-[15px] text-[14px] font-semibold capitalize">
                <p class="text-white">{{ $mon['name'] }}</p>
                <div class="bg-white hover:border-white rounded-[4px] w-[28px] h-[28px]"></div>
            </div>
        </div>
        @endforeach
    </div>

</body>
</html>