<div id="info-user">
    <h1 class="text-sm text-[#544848] dark:text-[#CCCBCB]  md:text-2xl lg:text-4xl  ">
        {{ __('Hello!, my name is...') }}
    </h1>
    <p class="font-bold text-5xl sm:text-6xl md:text-6xl lg:text-9xl  dark:text-[#08C68D] m-4">
        Franco Monrroy
    </p>
    <p
        class="font-bold text-2xl text-[#544848] dark:text-[#CCCBCB]   sm:text-3xl md:text-4xl lg:text-6xl my-4">
        {{ __('Software Developer') }}</p>
    <div class="flex justify-center my-8">
        <a href="{{ asset('documents/cv.pdf') }}" download="Monrroy-CV"
            class=" shadow-xl  p-2 sm:p-4 md:p-3 xl:p-5  rounded-lg bg-white border border-[#008CFF]  text-[#008CFF] hover:text-white   hover:bg-[#008CFF] dark:border-[#08C68D]  dark:text-[#08C68D]  dark:bg-[#11151A]  hover:dark:text-[#11151A]  hover:dark:bg-[#08C68D] hover:transition-all  transition ease-in-out delay-75 ">
            <i class="fa-solid fa-briefcase"></i>
            <span class="font-bold  text-xs lg:text-md  xl:text-lg">
                {{ __('Check out my CV') }}
            </span>
        </a>
    </div>
</div>