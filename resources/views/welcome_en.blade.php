@extends('layouts.app')

@section('content')
    <div class="bg-zinc-800 flex justify-center items-center px-0 py-32" style="">
        <div class="flex items-center flex-col lg:flex-row w-full md:w-auto">
            <div class="shrink py-2 px-7 md:p-0">
                <p class="font-Rubik text-5xl text-customRed_2 mb-0">Hello!</p>
                <br>
                <span class="font-Rubik text-3xl">I Am Ardalan Gh.P.</span>
                <br>
                <p class="font-Rubik mb-6">
                    I am a Web Developer. I'm familiar with programming languages like PHP, JavaScript.
                </p>
                <button type="button"
                    class="border-4 border-customRed_2 font-Rubik text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4
                    focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                    dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><a href="{{ route('works') }}">
                        View
                        Work</a></button>

            </div>
            <img id="my_profile_pic_holder" class="shrink-0 ml-24 w-60 h-60 border border-customRed_2 rounded-full" src="{{ asset('assets/custom_images/Me.jpg') }}" alt="me">
        </div>
    </div>
@endsection
