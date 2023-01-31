@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-700 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="{{ asset('img/ff7.jpg') }}" alt="cover">
            </div>
            <div class="lg:ml-12 lg:mr-64 mt-4 lg:mt-0">
                <h2 class="font-semibold text-4xl leading-tight">Final Fantasy VII Remake</h2>
                <div class="text-gray-300">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>Playstation 4</span>
                </div>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-700 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">Member <br> Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-700 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">92%</div>
                        </div>
                        <div class="ml-4 text-xs">Critic <br> Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                        <div class="w-8 h-8 bg-gray-700 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-300">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" /></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-700 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-300">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" /></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-700 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-300">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" /></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="mt-6 lg:mt-12">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi expedita veniam et error, itaque corporis voluptatibus deserunt, fuga a, repellendus porro quis aperiam! Minus voluptatem esse qui! Quae, temporibus vel.
                </p>
                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" /></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div> <!-- end game details -->

        <div class="images-container border-b border-gray-700 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                @for ($i = 0; $i < 6; $i++)
                <div>
                    <a href="#">
                        <img src="{{ asset('img/screenshot3.jpg') }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                @endfor
            </div>
        </div> <!-- end images container -->

        <div class="similar-games-container mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
            <div class="similar-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12">
                @for ($i = 0; $i < 6; $i++)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ asset('img/tlou2.jpg') }}" alt="cover image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-700 rounded-full" style="right: -20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">85%</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-300 mt-8">The Last of Us II</a>
                    <div class="text-gray-300 mt-1">Playstation 5</div>
                </div>
                @endfor
            </div>
        </div> <!-- end similar games container -->
    </div>
@endsection
