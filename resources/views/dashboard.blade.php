@section('title-section', 'Franco Monrroy Saravia')
<x-app-layout>
    <div id="particles-js" class="fixed inset-0 z-[-1] bg-white h-screen dark:bg-[#11151A]"></div>
    <div class="h-screen w-full">
        <section id="home" class="bg-transparent w-full h-full flex justify-center items-center text-center">
            @livewire('info.home')
        </section>
        <section id="about-me" class= "grid  place-items-center w-full h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @livewire('info.about')
        </section>
        <section id="experience" class= "grid  place-items-center w-full h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="font-bold text-2xl text-[#544848] dark:text-[#CCCBCB]   sm:text-3xl md:text-4xl lg:text-6xl my-4">
                {{ __('Experience') }}
            </p>
        </section>
        <section id="proyetcs" class= "grid  place-items-center w-full h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="font-bold text-2xl text-[#544848] dark:text-[#CCCBCB]   sm:text-3xl md:text-4xl lg:text-6xl my-4">
                {{ __('Last Proyects') }}
            </p>
            <div class="w-full h-full justify-center items-center">
                @livewire('proyect.view')
            </div>
        </section>
        <section id="contact-me" class= "grid  place-items-center w-full h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="font-bold text-2xl text-[#544848] dark:text-[#CCCBCB]   sm:text-3xl md:text-4xl lg:text-6xl my-4">
                @livewire('info.contact')
            </p>
        </section>
        <footer id="footer"
            class=" w-full font-bold max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-center text-[#008CFF] dark:text-[#08C68D] m-5">
            <p>{{ __('© 2024 Franco Monrroy || All rights reserved') }}</p>
        </footer>
    </div>
</x-app-layout>
