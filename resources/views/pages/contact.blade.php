<x-app-layout>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden sm:rounded-lg p-8">
                <h3 class="text-center text-2xl md:text-6xl font-bold mb-4">Have some questions?</h3>
                <p class="text-center text-xl md:text-4xl font-bold mb-16" >Leave a message below, and I'll get back with you within 24 hours.</p>
                <div class="bg-white p-4 rounded-xl">
                    <x-two-column :centered="true">
                        <x-slot name="left">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 class="w-full"
                                 viewBox="0 0 48 48"
                                 style=" fill:#000000;"><linearGradient id="UGRWfDqndLMysxtdqnIDAa_MFd4aKzItnZK_gr1" x1="9.25" x2="44.929" y1="25.846" y2="25.846" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7ab40"></stop><stop offset=".32" stop-color="#f4a73c"></stop><stop offset=".671" stop-color="#ed992f"></stop><stop offset="1" stop-color="#e2861d"></stop></linearGradient><path fill="url(#UGRWfDqndLMysxtdqnIDAa_MFd4aKzItnZK_gr1)" d="M9,26l36-14.308V38c0,1.105-0.895,2-2,2H9V26z"></path><linearGradient id="UGRWfDqndLMysxtdqnIDAb_MFd4aKzItnZK_gr2" x1="5.988" x2="26.58" y1="6.948" y2="44.356" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#eba84b"></stop><stop offset="1" stop-color="#d97218"></stop></linearGradient><path fill="url(#UGRWfDqndLMysxtdqnIDAb_MFd4aKzItnZK_gr2)" d="M3,11.692V38c0,1.105,0.895,2,2,2h38c0.491,0,0.935-0.184,1.283-0.478L3,11.692z"></path><path d="M3,11h42v1.692l-17.32,13.45c-2.165,1.681-5.195,1.681-7.36,0L3,12.692V11z" opacity=".05"></path><path d="M3,10.5h42v1.692L26.966,25.304c-1.762,1.304-4.17,1.304-5.932,0L3,12.192V10.5z" opacity=".07"></path><path fill="#fabb62" d="M5,8h38c1.105,0,2,0.895,2,2v1.692L26.252,24.466c-1.359,0.926-3.146,0.926-4.504,0L3,11.692V10	C3,8.895,3.895,8,5,8z"></path></svg>
                        </x-slot>
                        <x-slot name="right">
                            <div class="bg-gray-100 p-8 rounded-xl">
                                <livewire:contact-form::contact-form></livewire:contact-form::contact-form>
                            </div>
                        </x-slot>
                    </x-two-column>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
