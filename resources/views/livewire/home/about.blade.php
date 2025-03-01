<div id="about" class="relative mx-auto min-h-screen w-full px-4 bg-gradient-to-b from-black to-cyan-900">
    <div class="mx-auto min-h-screen flex flex-col justify-between items-center w-full lg:w-1/2">
        <!-- Up Arrow -->
        <div class="w-full flex justify-center items-center">
            <a class="pointer-events-auto hover:opacity-80 hover:cursor-pointer" href="#home">
                <i class="fa-solid fa-arrow-up text-4xl" style="color: #ffffff;" aria-hidden="true">
                </i>
            </a>
        </div>
        <!-- Content -->
        <div class="flex flex-col-reverse md:flex-row items-center gap-6">
            <!-- Text Section -->
            <div class="flex-1 flex flex-col justify-center items-start gap-6">
                <div class="relative w-full">
                    <p class="font-extrabold text-3xl inline-block pb-2">
                        Hi! <span class="text-slate-300">I'm Andrew</span>
                    </p>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-cyan-500"></div>
                </div>
                <div class="space-y-4">
                    <p>
                        Thank you for visiting my page! I’m currently {{$age}} years old, based in the UK, and
                        working as a Senior Software Engineer at <a href="https://iasme.co.uk/"
                                                                    target="_blank"
                                                                    class="pointer-events-auto hover:cursor-pointer hover:underline text-slate-300 font-bold hover:text-sky-400">
                            The IASME Consortium Limited</a>.
                    </p>
                    <p>
                        My journey into software engineering began in February 2023. Prior to that, I worked in my
                        family business, specializing in the repair of Air and Ground Source Heat Pumps, Water
                        Chillers, and contributing to the design and development of custom HVAC BMS systems across
                        the UK. However, transitioning into software was a long-time aspiration of mine.
                    </p>
                </div>
            </div>
            <!-- Photo Section -->
            <div class="flex-none">
                <img src="{{asset('me.jpeg')}}" alt="Andrew Cade"
                     draggable="false"
                     class="rounded-full w-32 h-32 object-cover mx-auto">
            </div>
        </div>
        <!-- Down Arrow -->
        <div class="w-full flex justify-center items-center">
            <a class="pointer-events-auto hover:opacity-80 hover:cursor-pointer" href="#skills">
                <i class="fa-solid fa-arrow-down text-4xl animate-bounce" style="color: #ffffff;" aria-hidden="true">
                </i>
            </a>
        </div>
    </div>
</div>
