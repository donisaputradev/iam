<aside id="mobile-menu"
    class="md:hidden fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidenav">
    <div
        class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('home') }}"
                    class="flex items-center p-2 text-base font-normal rounded-lg group {{ Request::is('/') ? 'text-white bg-primary-700 dark:bg-primary-700 hover:bg-primary-600' : 'hover:bg-gray-100 dark:text-gray-500' }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-400 transition duration-75 {{ Request::is('/') ? 'text-white dark:text-white' : '' }} dark:text-gray-400"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Overview</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal rounded-lg group {{ Request::is('product*') ? 'text-white bg-primary-700 dark:bg-primary-700 hover:bg-primary-600' : 'hover:bg-gray-100 dark:text-gray-500' }}"
                    aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-400 transition duration-75 {{ Request::is('product*') ? 'text-white dark:text-white' : '' }} dark:text-gray-400"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Sales</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('product') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                    </li>
                    <li>
                        <a href="{{ route('product/price') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Prices</a>
                    </li>
                    <li>
                        <a href="{{ route('product/category') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Category</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal rounded-lg group {{ Request::is('transaction*') ? 'text-white bg-primary-700 dark:bg-primary-700 hover:bg-primary-600' : 'hover:bg-gray-100 dark:text-gray-500' }}"
                    aria-controls="dropdown-transaction" data-collapse-toggle="dropdown-transaction">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-400 transition duration-75 {{ Request::is('transaction*') ? 'text-white dark:text-white' : '' }} dark:text-gray-400"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Transaction</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-transaction" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('transaction/product') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Product</a>
                    </li>
                    <li>
                        <a href="{{ route('transaction/trash') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Trash</a>
                    </li>
                    <li>
                        <a href="{{ route('transaction/withdrawal') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Withdrawal</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal rounded-lg group {{ Request::is('payment*') ? 'text-white bg-primary-700 dark:bg-primary-700 hover:bg-primary-600' : 'hover:bg-gray-100 dark:text-gray-500' }}"
                    aria-controls="dropdown-payment" data-collapse-toggle="dropdown-payment">
                    <svg class="w-6 h-6 text-gray-400 transition duration-75 {{ Request::is('payment*') ? 'text-white dark:text-white' : '' }} dark:text-gray-400"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z" />
                        <path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z" />
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Payment</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-payment" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('payment/channel') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Channel</a>
                    </li>
                    <li>
                        <a href="{{ route('payment/wallet') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Wallet</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="{{ route('help') }}"
                    class="flex items-center p-2 text-base font-normal rounded-lg group {{ Request::is('help*') ? 'text-white bg-primary-700 dark:bg-primary-700 hover:bg-primary-600' : 'hover:bg-gray-100 dark:text-gray-500' }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-400 transition duration-75 {{ Request::is('help*') ? 'text-white dark:text-white' : '' }} dark:text-gray-400"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3">Help</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
