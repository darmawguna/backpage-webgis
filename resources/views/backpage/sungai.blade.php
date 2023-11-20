@include('backpage.base.start')


@include('backpage.base.navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    @include('backpage.base.sidebar')

    <!-- start content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">

        <div class="grid grid-cols-3 gap-4">
            
            {{-- form input --}}
            <div class="col-span-1 border rounded p-4 bg-white">
                <form>
                    <div class="mb-6">
                        <label for="sungai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Sungai</label>
                        <input type="text" id="sungai"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="nama Sungai.." required>
                    </div>
                    {{-- dropdown tipe --}}
                    <div class="mb-6">
                        <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                            tipe</label>
                        <select name="tipe" id="tipe"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            {{-- @foreach ($categories as $category)
                                <option value="{{ $category->kategori_id }}">{{ $category->kategori }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="kordinat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kordinat</label>
                        <input type="text" id="kordinat"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="LatLng.." required>
                    </div>
                    <div class="mb-6">
                        <label for="luas"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Luas</label>
                        <input type="text" id="luas"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Luas.." required>
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
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="">Masukan Foto</label>
                        <input
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            type="file" name="photo" id="photo" required>
                    </div>


                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
            {{-- form input --}}

            {{-- map section --}}
            <div class="col-span-2 border rounded p-4 bg-white">
            
            </div>
            {{-- map section --}}
        </div>

    </div>
    <!-- end content -->

</div>
<!-- end wrapper -->

@include('backpage.base.end')
