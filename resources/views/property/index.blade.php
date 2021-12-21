<x-guest-layout>
    <style>
        #header_area a {
            color: #000
        }

        #header_area a:hover {
            color: #991b1b
        }
    </style>


    {{-- Breadcrumb --}}
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-3xl text-red-800" href="#"><i class="fa fa-home"></i></a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                
                <li><a class="text-red-800" href="">Properties</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li class='capitalize'></li>
               
                <li>Properties</li>
                


            </ul>
        </div>
    </div>


    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-8/12">
                    <h2 class="text-3xl text-gray-600 capitalize">Properties
                        </h2>

                   
                    <h3 class="text-sm mt-1 font-normal">

                        Displaying
                       
                    </h3>
                    <h4 class="text-sm font-normal"><span class="font-bold"></span> Property
                        Found</h4>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto my-14">
        <div class="flex justify-between mx-2">

            {{-- Left Content --}}
            <div class="w-9/12 px-4 -mx-2">

                <div class="grid grid-cols-3 gap-4">
                    
                    
                    
                    <div class="text-center">No Property Found</div>
                    
                </div>

                <div class="bg-white p-5 rounded-md">
                    
                </div>


            </div>{{-- Left Content End --}}



            {{-- Sidebar --}}
            <div class="w-3/12 mx-2 vertical-search-form shadow-lg bg-white px-3 py-3 rounded-md">
                <h2 class="text-black mb-3 text-center text-lg shadow-sm pb-2">More Filter</h2>
                @include('components.property-search-form')
            </div>


        </div>

    </div>



</x-guest-layout>
