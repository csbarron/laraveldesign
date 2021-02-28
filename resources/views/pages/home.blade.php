<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg p-8">
                <div class="glass p-4 rounded-xl">
                    <x-two-column :centered="true">
                        <x-slot name="left">
                            <img src="/img/laraveldesign.jpg" class="w-full rounded-full"/>
                        </x-slot>
                        <x-slot name="right">

                            <p class="text-6xl font-bold mb-4">Hi there!</p>
                            <p class="text-4xl mb-4">I am Shane Barron.</p>
                            <p class="text-2xl mb-8">I build Laravel packages<br/>For Laravel developers.</p>
                            <div class="md:flex">
                                <a href="/packages" class="block mr-4 my-1">
                                    <button style="height:50px;line-height:50px;" class="focus:outline-none text-white font-bold block text-lg bg-blue-400 rounded-lg px-4">
                                        Explore Packages
                                    </button>
                                </a>
                                <a href="https://www.buymeacoffee.com/csbarron" class="block my-1" target="_blank">
                                    <button style="height:50px;">
                                        <img style="max-height:50px;"  src="/img/default-yellow.png" alt="Buy Me A Coffee"/>
                                    </button>

                                </a>
                            </div>

                        </x-slot>
                    </x-two-column>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
