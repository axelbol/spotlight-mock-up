@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 border-b border-gray-700 pb-16">
            @for ($i = 0; $i < 10; $i++)
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('img/ff7.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-700 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy VII Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div> <!-- end game -->
            @endfor
        </div> <!-- end popular games -->

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    @for ($i = 0; $i < 3; $i++)
                    <div class="game bg-gray-600 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('img/ghost.jpg') }}" alt="cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-300 mt-4">Ghost Fantasy VII Remake</a>
                            <div class="text-gray-300 mt-1">Playstation 3</div>
                            <p class="mt-6 text-gray-300 hidden lg:block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ex modi dolor laboriosam quam illo vel quod autem saepe deserunt. Quidem, cumque earum! Libero explicabo qui nulla laboriosam at. Voluptate omnis nobis repellat harum cumque quibusdam illum ducimus, reiciendis recusandae sunt aperiam earum eaque? Reiciendis aliquid quos ex dolorum suscipit!
                            </p>
                        </div>
                    </div> <!-- end game -->
                    @endfor
                </div> <!-- end recently reviewed container -->
            </div> <!-- end recently reviewed -->
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                @for ($i = 0; $i < 4; $i++)
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('img/cyberpunk.jpg') }}" alt="cover game" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                </div> <!-- end most anticipated container-->
                @endfor
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Coming Soon</h2>
                @for ($i = 0; $i < 4; $i++)
                <div class="coming-soon-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('img/luigi.jpg') }}" alt="cover game" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                </div> <!-- end coming soon container-->
                @endfor
            </div> <!-- end most anticipated -->
        </div>
    </div> <!-- end container -->
@endsection
