<nav x-data="{ open: false }" class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{route('home')}}">
                        <img class="h-8 w-8" src="/img/avatar.svg" alt="LaravelDesign">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-item route="home">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="34" height="34"
                                 viewBox="0 0 48 48"
                                 style=" fill:#000000;"><linearGradient id="jv689zNUBazMNK6AOyXtga_wFfu6zXx15Yk_gr1" x1="6" x2="42" y1="41" y2="41" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#c8d3de"></stop><stop offset="1" stop-color="#c8d3de"></stop></linearGradient><path fill="url(#jv689zNUBazMNK6AOyXtga_wFfu6zXx15Yk_gr1)" d="M42,39H6v2c0,1.105,0.895,2,2,2h32c1.105,0,2-0.895,2-2V39z"></path><linearGradient id="jv689zNUBazMNK6AOyXtgb_wFfu6zXx15Yk_gr2" x1="14.095" x2="31.385" y1="10.338" y2="43.787" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fcfcfc"></stop><stop offset=".495" stop-color="#f4f4f4"></stop><stop offset=".946" stop-color="#e8e8e8"></stop><stop offset="1" stop-color="#e8e8e8"></stop></linearGradient><path fill="url(#jv689zNUBazMNK6AOyXtgb_wFfu6zXx15Yk_gr2)" d="M42,39H6V20L24,3l18,17V39z"></path><path fill="#de490d" d="M13,25h10c0.552,0,1,0.448,1,1v17H12V26C12,25.448,12.448,25,13,25z"></path><path d="M24,4c-0.474,0-0.948,0.168-1.326,0.503l-5.359,4.811L6,20v5.39L24,9.428L42,25.39V20L30.685,9.314	l-5.359-4.811C24.948,4.168,24.474,4,24,4z" opacity=".05"></path><path d="M24,3c-0.474,0-0.948,0.167-1.326,0.5l-5.359,4.784L6,18.909v5.359L24,8.397l18,15.871v-5.359	L30.685,8.284L25.326,3.5C24.948,3.167,24.474,3,24,3z" opacity=".07"></path><linearGradient id="jv689zNUBazMNK6AOyXtgc_wFfu6zXx15Yk_gr3" x1="24" x2="24" y1="1.684" y2="23.696" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#d43a02"></stop><stop offset="1" stop-color="#b9360c"></stop></linearGradient><path fill="url(#jv689zNUBazMNK6AOyXtgc_wFfu6zXx15Yk_gr3)" d="M44.495,19.507L25.326,2.503C24.948,2.168,24.474,2,24,2s-0.948,0.168-1.326,0.503	L3.505,19.507c-0.42,0.374-0.449,1.02-0.064,1.43l1.636,1.745c0.369,0.394,0.984,0.424,1.39,0.067L24,7.428L41.533,22.75	c0.405,0.356,1.021,0.327,1.39-0.067l1.636-1.745C44.944,20.527,44.915,19.881,44.495,19.507z"></path><linearGradient id="jv689zNUBazMNK6AOyXtgd_wFfu6zXx15Yk_gr4" x1="28.05" x2="35.614" y1="25.05" y2="32.614" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#33bef0"></stop><stop offset="1" stop-color="#0a85d9"></stop></linearGradient><path fill="url(#jv689zNUBazMNK6AOyXtgd_wFfu6zXx15Yk_gr4)" d="M29,25h6c0.552,0,1,0.448,1,1v6c0,0.552-0.448,1-1,1h-6c-0.552,0-1-0.448-1-1v-6	C28,25.448,28.448,25,29,25z"></path></svg>
                        </x-nav-item>
                        <x-nav-item route="packages">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="34" height="34"
                                 viewBox="0 0 48 48"
                                 style=" fill:#000000;"><linearGradient id="_Taev0mkEu3Nbs4~eb2QKa_d7NuXqJPV9vm_gr1" x1="16.037" x2="31.123" y1="654.802" y2="618.804" gradientTransform="matrix(1 0 0 -1 0 662)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#eba600"></stop><stop offset="1" stop-color="#c28200"></stop></linearGradient><path fill="url(#_Taev0mkEu3Nbs4~eb2QKa_d7NuXqJPV9vm_gr1)" d="M40,42H8c-1.1,0-2-0.9-2-2V12h36v28C42,41.1,41.1,42,40,42z"></path><rect width="10" height="2" x="28" y="37" fill="#b14716"></rect><polygon fill="#b14716" points="38,32 36,30 34,32 35,32 35,35 37,35 37,32"></polygon><polygon fill="#b14716" points="32,32 30,30 28,32 29,32 29,35 31,35 31,32"></polygon><linearGradient id="_Taev0mkEu3Nbs4~eb2QKb_d7NuXqJPV9vm_gr2" x1="5" x2="43" y1="9" y2="9" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd869"></stop><stop offset="1" stop-color="#fec936"></stop></linearGradient><path fill="url(#_Taev0mkEu3Nbs4~eb2QKb_d7NuXqJPV9vm_gr2)" d="M43,12H5V8c0-1.1,0.9-2,2-2h34c1.1,0,2,0.9,2,2V12z"></path></svg>
                        </x-nav-item>
                        <x-nav-item route="contact">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="34" height="34"
                                 viewBox="0 0 48 48"
                                 style=" fill:#000000;"><linearGradient id="0_HTEE9QzyKb~SwdZ1fZaa_ssvbWITVTVC5_gr1" x1="-52.5" x2="-52.5" y1="80.987" y2="76.259" gradientTransform="rotate(90 24 92)" gradientUnits="userSpaceOnUse"><stop offset=".3" stop-color="#9c6500"></stop><stop offset=".651" stop-color="#f2d33a"></stop></linearGradient><rect width="5" height="7" x="35" y="12" fill="url(#0_HTEE9QzyKb~SwdZ1fZaa_ssvbWITVTVC5_gr1)"></rect><linearGradient id="0_HTEE9QzyKb~SwdZ1fZab_ssvbWITVTVC5_gr2" x1="-45" x2="-45" y1="80.987" y2="76.259" gradientTransform="rotate(90 24 92)" gradientUnits="userSpaceOnUse"><stop offset=".3" stop-color="#1a7317"></stop><stop offset=".65" stop-color="#6dd669"></stop></linearGradient><rect width="5" height="8" x="35" y="19" fill="url(#0_HTEE9QzyKb~SwdZ1fZab_ssvbWITVTVC5_gr2)"></rect><linearGradient id="0_HTEE9QzyKb~SwdZ1fZac_ssvbWITVTVC5_gr3" x1="-37" x2="-37" y1="80.987" y2="76.259" gradientTransform="rotate(90 24 92)" gradientUnits="userSpaceOnUse"><stop offset=".3" stop-color="#0670ad"></stop><stop offset=".65" stop-color="#08b7e8"></stop></linearGradient><rect width="5" height="8" x="35" y="27" fill="url(#0_HTEE9QzyKb~SwdZ1fZac_ssvbWITVTVC5_gr3)"></rect><linearGradient id="0_HTEE9QzyKb~SwdZ1fZad_ssvbWITVTVC5_gr4" x1="-29" x2="-29" y1="80.987" y2="76.28" gradientTransform="rotate(90 24 92)" gradientUnits="userSpaceOnUse"><stop offset=".301" stop-color="#5829a1"></stop><stop offset=".65" stop-color="#8f4fe8"></stop></linearGradient><path fill="url(#0_HTEE9QzyKb~SwdZ1fZad_ssvbWITVTVC5_gr4)" d="M40,41v-6h-5v8h3C39.105,43,40,42.105,40,41z"></path><linearGradient id="0_HTEE9QzyKb~SwdZ1fZae_ssvbWITVTVC5_gr5" x1="-59.5" x2="-59.5" y1="80.987" y2="76.259" gradientTransform="rotate(90 24 92)" gradientUnits="userSpaceOnUse"><stop offset=".302" stop-color="#a63f62"></stop><stop offset=".65" stop-color="#e86b97"></stop></linearGradient><path fill="url(#0_HTEE9QzyKb~SwdZ1fZae_ssvbWITVTVC5_gr5)" d="M40,7c0-1.105-0.895-2-2-2h-3v7h5V7z"></path><linearGradient id="0_HTEE9QzyKb~SwdZ1fZaf_ssvbWITVTVC5_gr6" x1="13.132" x2="31.365" y1="4.584" y2="42.374" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fc7d5b"></stop><stop offset=".091" stop-color="#f87855"></stop><stop offset=".683" stop-color="#df5731"></stop><stop offset="1" stop-color="#d64b24"></stop></linearGradient><path fill="url(#0_HTEE9QzyKb~SwdZ1fZaf_ssvbWITVTVC5_gr6)" d="M37,7c0-1.105-0.895-2-2-2H10C8.895,5,8,5.895,8,7v34c0,1.105,0.895,2,2,2h25	c1.105,0,2-0.895,2-2V7z"></path><radialGradient id="0_HTEE9QzyKb~SwdZ1fZag" cx="23" cy="18" r="5" gradientUnits="userSpaceOnUse"><stop offset=".486"></stop><stop offset="1" stop-opacity="0"></stop></radialGradient><circle cx="23" cy="18" r="5" fill="url(#undefined)" opacity=".15"></circle><path d="M16,31v2.114C16,34.155,16.845,35,17.886,35h10.227C29.155,35,30,34.155,30,33.114V31	c0-5-3.134-8-7-8S16,26,16,31z" opacity=".05"></path><path d="M16.5,30.626l0,2.431c0,0.797,0.646,1.443,1.443,1.443h10.114c0.797,0,1.443-0.646,1.443-1.443V30.5	c0-4.188-2.96-7.05-6.592-6.999C19.333,23.551,16.5,26.483,16.5,30.626z" opacity=".07"></path><circle cx="23" cy="18" r="4" fill="#fff"></circle><path fill="#fff" d="M29,30c0-3.375-2.787-6.099-6.185-5.997C19.532,24.101,17,26.966,17,30.252V33c0,0.552,0.448,1,1,1	h10c0.552,0,1-0.448,1-1V30z"></path></svg>
                        </x-nav-item>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">

                    <!-- Profile dropdown -->
                    <div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
                        <div>
                            <button @click="open = !open"
                                    class="max-w-xs rounded-full flex items-center text-sm focus:outline-none"
                                    aria-haspopup="true" x-bind:aria-expanded="open">
                                <span class="sr-only">Open user menu</span>
                                @auth
                                    <img class="h-8 w-8 rounded-full"
                                         src="{{auth()->user()->profile_photo_url}}"
                                         alt="{{auth()->user()->name}}">
                                @else
                                    Account
                                @endauth
                            </button>
                        </div>
                        <div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state."
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white"
                             role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">
                            @auth
                                <a href="/user/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                   role="menuitem">Settings</a>

                                <a href="{{route('ldlogout')}}"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                                    out</a>
                            @else
                                <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Login</a>
                                <a href="/register" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Join</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                        class="bg-indigo-500 focus:bg-indigo-500 inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-indigo-500 focus:outline-none"
                        aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                        x-bind:aria-expanded="open.toString()">
                    <span class="sr-only">Open main menu</span>
                    <svg x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 block"
                         :class="{ 'hidden': open, 'block': !(open) }"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 hidden"
                         :class="{ 'block': open, 'hidden': !(open) }"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="md:hidden" id="mobile-menu" x-show="open" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <x-mobile-nav-item route="home"></x-mobile-nav-item>
            <x-mobile-nav-item route="packages"></x-mobile-nav-item>
            <x-mobile-nav-item route="contact"></x-mobile-nav-item>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-700">
            @auth
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                             src="{{auth()->user()->profile_photo_url}}"
                             alt="{{auth()->user()->name}}">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">{{auth()->user()->name}}</div>
                    </div>
                </div>
                <div class="mt-3 px-2 space-y-1">

                    <a href="/user/profile"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>

                    <a href="/ldlogout"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign
                        out</a>

                </div>
            @else
                <div class="mt-3 px-2 space-y-1">

                    <a href="/login"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Login</a>

                    <a href="/register"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Join</a>

                </div>
            @endauth
        </div>
    </div>
</nav>
