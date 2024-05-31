{{-- <div
    class=" lg:flex xl:flex  2xl:flex cursor-pointer rounded-lg px-0 pt-0 ring-1  bg-white ring-black/5 m-5  dark:bg-[#11151A] shadow-xl  ease-in-out">
    <div class=" text-slate-900 dark:text-white  text-base font-medium tracking-tight">
        <img src="{{ asset('images/img/perfil.jpeg')  }}"
            class="rounded-t-lg sm:rounded-t-lg md:rounded-t-lg  w-80">
    </div>
    <div class="items-center text-slate-900 p-4 break-words ">
        <p class="flex justify-center  font-bold text-3xl text-[#544848] dark:text-[#CCCBCB]   sm:text-6xl md:text-6xl lg:text-6xl">
            {{ __('About me') }}
        <div>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet officiis, a rerum corporis fuga quis, quo doloribus exercitationem repellendus amet tenetur ad corrupti facere temporibus, deleniti voluptate? Impedit, numquam reiciendis!   
        </div>
    </div>
</div> --}}

<div>
    <div
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img src="{{ asset('images/img/perfil.jpeg') }}"
            class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
            src="/docs/images/blog/image-4.jpg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ __('About Me') }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ __('Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.') }}
            </p>
        </div>
    </div>
</div>
