@if ($proyects->count())
    <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 .self-start md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-6">
            @foreach ($proyects as $proyect)
                <div
                    class="relative flex flex-col justify-between cursor-pointer rounded-lg px-0 pt-0 ring-1 bg-white ring-black/5 dark:bg-[#11151A] shadow-xl hover:scale-105 transition-transform duration-400 ease-in-out h-full">
                    <div>
                        <div class="relative hidden  sm:flex md:flex lg:flex xl:flex 2xl:flex ">
                            @if ($proyect->port)
                                <img class="rounded-t-lg pointer-events-none select-none w-full"
                                    src="data:image/png;base64,{{ base64_encode($proyect->port) }}">
                            @endif
                            <div class="absolute inset-0 flex items-center justify-center bg-white dark:bg-[#11151A] rounded-t-lg technologies-container transition-opacity opacity-0 hover:opacity-100">
                                <div class="p-4 items-center">
                                    <div class="flex justify-center items-center font-bold">
                                        <p>{{ __('Technologies') }}</p>
                                    </div>
                                    <div class="flex justify-center">
                                        @foreach ($proyect->technologies as $technology)
                                            @if (is_null($technology->image))
                                                {{ __('No preview') }}
                                            @else
                                                <div class="m-2 text-center ">
                                                    <img src="data:image/png;base64,{{ base64_encode($technology->image) }}"
                                                        width="40" height="auto" class="m-2 pointer-events-none">
                                                    <p>{{ $technology->description }}</p>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold">{{ $proyect->title }}</h3>
                            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">{{ $proyect->header }}</p>
                        </div>
                    </div>
                    <div class="p-0 flex justify-between items-center rounded-b-lg bg-gray-100 dark:bg-gray-800">
                        <div class="flex">
                            <a class="text-[#822291] rounded-full mx-2 hover:bg-slate-500">
                                <i class="fa-brands rounded-full m-1 fa-github"></i>
                            </a>
                        </div>
                        @if (!$proyect->link == null)
                            <span class="inline-flex items-center justify-center p-2 text-[#008CFF] font-bold dark:text-[#08C68D]">
                                <a href="{{ $proyect->link }}">{{ __('Visit') }}</a>
                            </span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="m-4 flex justify-end text-[#008CFF]  dark:text-[#08C68D]">
            <a class="font-bold outline-2">{{ __('MORE PROJECTS >>>') }}</a>
        </div>
    </div>
@else
    <div class="flex justify-center">
        <div>
            <i class="fa-solid fa-folder-open fa-7x flex justify-center" style="color: #544848;"></i>
            <p class="font-bold text-[#544848]">{{ __('Not Found Projects') }}</p>
        </div>
    </div>
@endif
