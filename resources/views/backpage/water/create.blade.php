@extends('backpage.layouts.main')

@section('content')
        <!-- start content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            <div class="grid grid-cols-3 gap-4">

                {{-- form input --}}
                <div class="col-span-1 border rounded p-4 bg-white">
                    <form>
                        <div class="mb-6">
                            <label for="river" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                                </label>
                            <input type="text" id="river"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="name.." required>
                        </div>
                        <div class="mb-6">
                            <label for="regency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Of Regency
                                </label>
                            <input type="text" id="regency"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="name.." required>
                        </div>
                        {{-- dropdown tipe --}}
                        
                        <div class="mb-6">
                            <label for="cordinate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">cordinate</label>
                            <input type="text" id="cordinate"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="LatLng.." required>
                        </div>
                        <div class="mb-6">
                            <label for="geometry"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">geometry</label>
                            <input type="text" id="geometry"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Geometry.." required>
                        </div>
                        <div class="mb-6">
                            <label for="altitude"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Altitude</label>
                            <input type="text" id="altitude"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Altitude.." required>
                        </div>
                        <div class="mb-6">
                            <label for="wide"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wide</label>
                            <input type="text" id="wide"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Wide.." required>
                        </div>
                        <div class="mb-6">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adress</label>
                            <input type="text" id="address"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Address.." required>
                        </div>
                        

                        {{-- <div class="mb-6">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                                <span class="label-text">Pick a file</span>
                                <span class="label-text-alt">Alt label</span>
                            </label>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
                            
                        </div>
                    </div> --}}
                        {{-- <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="">Masukan Foto</label>
                            <input
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                type="file" name="photo" id="photo" required>
                        </div> --}}


                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
                {{-- form input --}}

                {{-- map section --}}
                <div class="col-span-2 border rounded p-4 bg-white">
                    <div id="map"></div>
                </div>
                {{-- map section --}}
            </div>
        </div>
        <!-- end content -->

@endsection
