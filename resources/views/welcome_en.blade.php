@extends('layouts.app')

@section('content')
    <div class="bg-zinc-800 flex justify-center px-0 py-32" style="">
        <div class="flex items-center flex-col lg:flex-row w-full md:w-5/6 ">
            <div class="shrink py-2 px-7 md:p-0">
                <p class="font-Rubik text-5xl text-customRed_2 mb-0">Hello!</p>
                <br>
                <span class="font-Rubik text-3xl">I Am Ardalan G.H.</span>
                <br>
                <p class="mb-6">
                    I am a Web Developer. I'm familiar with programming languages like PHP, JavaScript.
                </p>
                <button type="button"
                    class="bg-gradient-to-r from-red-400 via-customRed_1 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-md shadow-red-500/50 dark:shadow-md dark:shadow-red-800/80 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">View
                    Work</button>
            </div>
            <img id="my_profile_pic_holder" class="shrink-0  mx-5 w-60 h-60 border border-customRed_2 rounded-full" src="{{ asset('assets/custom_images/Me.jpg') }}" alt="me">
        </div>
    </div>



    </div>
@endsection
