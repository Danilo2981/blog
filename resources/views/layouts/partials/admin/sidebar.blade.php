<aside class="w-64 sticky top-0 z-10 bg-indigo-300 dark:bg-gray-800">
    <div class="px-2 py-2 h-screen">
        <div class="flex flex-col h-full justify-between px-3 py-4 bg-indigo-50 dark:bg-gray-600 rounded-md">
            <div class="top-0 z-10 px-4 py-2 mb-4 bg-indigo-50 rounded-md">
                <a href="/" class="flex items-center pl-2.5 mb-1">
                    <x-application-mark class="h-6 mr-3 sm:h-7" />
                </a>
            </div>
            <div class="flex flex-col justify-between h-full pr-2 mr-0 overflow-y-auto">
                <ul class="space-y-2 mb-4">
                    @foreach ($links as $link)
                    <li>
                        <a href="{{ $link['url'] }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-gray-50 hover:bg-indigo-300 dark:hover:bg-gray-700 {{ $link['active'] ? 'bg-gray-300 dark:bg-gray-500' : '' }}">
                            <span class="w-6 h-6 text-gray-800 transition duration-75 dark:text-gray-100 group-hover:text-gray-900 dark:group-hover:text-indigo-300">
                                <i class="{{ $link['icon'] }}"></i>
                            </span>
                            <span class="ml-3">{{ $link['title'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul> 
            </div>
            <div class="flex flex-col justify-between">
                <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-indigo-300 dark:hover:bg-gray-700 dark:text-gray-100 group">
                            <i class="fa-solid fa-gem"></i>
                            <span class="ml-4">Upgrade to Pro</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-indigo-300 dark:hover:bg-gray-700 dark:text-gray-100 group">
                            <i class="fa-solid fa-circle-question"></i>
                            <span class="ml-3">Help</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>