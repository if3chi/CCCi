<x-front-layout>
    <x-slot name="header">
        <x-navigation />
    </x-slot>

    <section class="w-full flex flex-col justify-center items-center">
        <div
            class="h-max w-full flex gap-x-10 gap-y-5 flex-wrap items-start justify-start bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
            <div class="flex justify-left items-center text-white px-16 py-10 shadow-lg bg-opacity-50 backdrop-blur-md h-[48rem]"
                style="background-image: url({{ asset('imgs/banner.jpg') }})">
                {{-- <div class="fixed inset-0 bg-gray-800 opacity-50"></div> --}}
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <p class="uppercase tracking-loose w-full">Setting the Captives free</p>
                    <h1 class="my-4 text-5xl font-bold leading-tight">
                        we exist to know Jesus and make him known
                    </h1>
                    <p class="leading-normal text-2xl mb-8">
                        You belong here: whether you have never been in church before, or have spent your whole life in
                        faith. There is a place for everyone. Young, old, single, married, there is a place for you at
                        Church.
                    </p>
                    <a href=""
                        class="mx-auto lg:mx-0 hover:underline bg-blue-900 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        About
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-white my-2 bg-opacity-30 p-4">
        <div class="text-blue-900">
            <div class="text-center space-y-2">
                <h5 class="text-xs font-black">Verse of the day</h5>
                <p class="italic">“The unfolding of your words gives light; it gives
                    understanding to the simple.”</p> <strong class="reference">Psalm 119:130 (NIV)</strong>
            </div>
        </div>
    </section>
</x-front-layout>
