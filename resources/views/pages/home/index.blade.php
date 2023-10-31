@extends('layouts.dashboard')

@section('main')
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8">
            <div class="grid w-full grid-cols-1 gap-4 xl:grid-cols-3 2xl:grid-cols-4">
                <div class="col-span-2 items-center justify-between">
                    <div class="grid w-full grid-cols-1 gap-4 xl:grid-cols-3 2xl:grid-cols-4">
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-end px-4 pt-4">
                                <button
                                    class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                                    type="button">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded" src="{{ asset('images/water-scarcity.png') }}"
                                    alt="Akses Air Minum" />
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Akses Air Minum</h5>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-end px-4 pt-4">
                                <button
                                    class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                                    type="button">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded" src="{{ asset('images/quality.png') }}"
                                    alt="Keberfungsian" />
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Keberfungsian</h5>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-end px-4 pt-4">
                                <div class="inline-block rounded-lg text-sm p-1.5" type="button">
                                    <div class="w-6 h-6"></div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded" src="{{ asset('images/house.png') }}" alt="SR" />
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">SR</h5>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-end px-4 pt-4">
                                <button
                                    class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                                    type="button">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded" src="{{ asset('images/family.png') }}"
                                    alt="Sambungan Rumah" />
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Sambungan Rumah</h5>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-end px-4 pt-4">
                                <button
                                    class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                                    type="button">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded" src="{{ asset('images/condominium.png') }}"
                                    alt="Iuran terhadap BOP" />
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Iuran terhadap BOP</h5>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-end px-4 pt-4">
                                <div class="inline-block rounded-lg text-sm p-1.5" type="button">
                                    <div class="w-6 h-6"></div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded" src="{{ asset('images/save-water.png') }}"
                                    alt="IURAN" />
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">IURAN</h5>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-end px-4 pt-4">
                                <div class="inline-block rounded-lg text-sm p-1.5" type="button">
                                    <div class="w-6 h-6"></div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded" src="{{ asset('images/settings.png') }}"
                                    alt="IURAN" />
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Keberfungsian</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 items-center justify-between">
                    <div
                        class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800 mb-3">
                        <div class="w-full">
                            <h3 class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">Inbox</h3>
                            <h5 class="text-m font-bold text-gray-900 sm:text-l dark:text-white">12 January 2023</h5>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat perferendis illum adipisci.
                            </p>
                        </div>
                    </div>
                    <div
                        class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="w-full">
                            <h3 class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">Kualitas
                                AM
                            </h3>
                            <br>
                            <span
                                class="bg-blue-100 text-blue-800 text-m font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                Tanggal Terakhir Pemeriksaan
                            </span>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400 mt-2 mb-3">
                                Tanggal : 2021-05-21
                            </p>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400 mt-2 mb-3">
                                Hasil pemeriksaan : Tidak memenuhi syarat
                            </p>
                            <br>
                            <span
                                class="bg-blue-100 text-blue-800 text-m font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Summary
                                Perubahan Data</span>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400 mt-2 mb-3">
                                Hasil pemeriksaan terakhir : 648 hari yang lalu
                            </p>
                            <button type="button"
                                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                Perbaharui
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
