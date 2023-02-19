@extends('layouts.app')
@section('content')
<div class="flex flex-col items-center md:flex-row md:justify-center border bg-zinc-900">
    <div class="border w-64 h-72 md:w-56 md:h-64 m-2 rounded cursor-pointer hover:bg-gradient-to-t hover:from-white">
        <a href="{{ route('web-developement') }}" class="no-underline border border-red-600 block h-full">CSGO Skins</a>
    </div>
    <div class="border w-64 h-72 md:w-56 md:h-64 m-2 rounded cursor-pointer hover:bg-gradient-to-t hover:from-white">
        <a href="{{ route('game-developement') }}" class="no-underline border border-red-600 block h-full">Epic Games Webite 2020</a>
    </div>
    <div class="border w-64 h-72 md:w-56 md:h-64 m-2 rounded cursor-pointer hover:bg-gradient-to-t hover:from-white">
        <a href="{{ route('cg-career') }}" class="no-underline border border-red-600 block h-full">Present & Correct</a>
    </div>
</div>
@endsection
