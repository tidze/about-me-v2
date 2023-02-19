<nav class="px-1 sm:px-4 py-0.5 rounded shadow-lg">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('home_fa') }}" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-customRed_2">Ardalan</span>
        </a>
        <div class="hidden w-full md:block md:w-auto font-Rubik" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4  md:flex-row md:space-x-8 md:mt-0 md:text-sm">
                <li>
                    <a href="{{ route('home_en') }}" class="block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'home_fa' || Route::current()->getName() == 'home_en' ? 'border-b-2 border-customRed_2 text-customRed_2' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'about' ? 'border-b-2 border-customRed_2 text-customRed_2' : '' }}">About</a>
                </li>
                <li>
                    <a href="{{ route('skills') }}" class="block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'skills' ? 'border-b-2 border-customRed_2 text-customRed_2' : '' }}">Skils</a>
                </li>
                <li>
                    <a href="{{ route('works') }}" class="block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'works' ? 'border-b-2 border-customRed_2 text-customRed_2' : '' }}">Works</a>
                </li>
                <li>
                    <a href="{{ route('resume') }}" class="block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'resume' ? 'border-b-2 border-customRed_2 text-customRed_2' : '' }}">Resume</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'contact' ? 'border-b-2 border-customRed_2 text-customRed_2' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
