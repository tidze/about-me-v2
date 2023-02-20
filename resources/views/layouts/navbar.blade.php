<nav class="px-1 sm:px-4 py-0.5 rounded shadow-lg">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('home_fa') }}" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-customRed_2">Ardalan</span>
        </a>
        <div class="hidden w-full md:block md:w-auto font-Rubik" id="navbar-default">
            <ul class="flex flex-col p-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm">
                <li>
                    <a href="{{ route('home_en') }}" class="text-lg block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'home_fa' || Route::current()->getName() == 'home_en' ? 'rounded-b-sm border-b-4 border-customRed_2 text-customRed_2' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="text-lg block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'about' ? 'rounded-b-sm border-b-4 border-customRed_2 text-customRed_2' : '' }}">About</a>
                </li>
                <li>
                    <a href="{{ route('skills') }}" class="text-lg block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'skills' ? 'rounded-b-sm border-b-4 border-customRed_2 text-customRed_2' : '' }}">Skils</a>
                </li>
                <li>
                    <a href="{{ route('works') }}" class="text-lg block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'works' ? 'rounded-b-sm border-b-4 border-customRed_2 text-customRed_2' : '' }}">Works</a>
                </li>
                <li>
                    <a href="{{ route('resume') }}" class="text-lg block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'resume' ? 'rounded-b-sm border-b-4 border-customRed_2 text-customRed_2' : '' }}">Resume</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="text-lg block hover:text-customRed_1 font-Rubik {{ Route::current()->getName() == 'contact' ? 'rounded-b-sm border-b-4 border-customRed_2 text-customRed_2' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
