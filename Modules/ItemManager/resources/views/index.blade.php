@extends('layouts.master')

@section('content')
<div class="container  mx-auto px-2">
    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Starter</h1>
                            <ol class="list-reset flex text-sm">
                                <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                <li><span class="text-gray-500 mx-2">/</span></li>
                                <li class="text-gray-500">Pages</li>
                                <li><span class="text-gray-500 mx-2">/</span></li>
                                <li class="text-blue-600 hover:text-blue-700">Starter</li>
                            </ol>
                        </div>
                        <div class="flex items-center">
                            <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Create New</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end container-->

<div class="container mx-auto px-2 min-h-[calc(100vh-138px)]  relative pb-14 ">
    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Title</h4>
                </div><!--end card-header-->
                <div class="card-body">

                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Title</h4>
                </div><!--end card-header-->
                <div class="card-body">

                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->
    </div><!--end inner-grid-->
    <!-- footer -->



</div><!--end container-->
@endsection