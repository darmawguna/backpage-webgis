@include('backpage.base.start')


@include('backpage.base.navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    @include('backpage.base.sidebar')

    <!-- start content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="flex justify-between mb-2">
            <div class="h4">
            LIST DATA WATERS
            </div>
            <div class="button">
                {{-- <a href="/water/create" class="button bg-blue p-4 rounded">Add Data</a> --}}
                <a href="/water/create"
                            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Data</a>
            </div>
        </div>
        
            {{-- form input --}}
            <div class="col-span-1 border rounded p-4 bg-white">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Regency
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Address
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-content-around">
                                        <a href="/edit" class="pr-2"><i class="fa-solid fa-pencil"></i></a>
                                        <a href="/edit" class="pr-2"><i class="fa-solid fa-trash"></i></a>
                                        
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div>
            {{-- form input --}}

            {{-- map section --}}
            {{-- <div class="col-span-2 border rounded p-4 bg-white">
            
            </div> --}}
    </div>
    <!-- end content -->

</div>
<!-- end wrapper -->

@include('backpage.base.end')
