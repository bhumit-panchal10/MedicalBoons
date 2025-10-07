@extends('layouts.app')

@section('title', 'Edit Meta Data List')
@section('content')
    {!! Toastr::message() !!}

    <!-- Page-content -->
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    {{--  <h5 class="text-16">State List</h5>  --}}
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Driver</a>
                    </li>
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('metaData.index') }}" class="text-slate-400 dark:text-zink-200">Seo</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Edit Seo
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
                <div class="xl:col-span-12">
                    <div class="card" id="customerList">
                        <div class="">
                            <div class="grid grid-cols-1 gap-5 mb-5 ">

                                <div class="rtl:md:text-start">
                                    <div class="bg-white shadow rounded-md dark:bg-zink-600">
                                        <div
                                            class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                            <h5 class="text-16" id="exampleModalLabel">Edit Meta Data</h5>
                                            <button type="button" title="Back"
                                                class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                                                data-modal-target="AddModal">
                                                <a href="{{ route('metaData.index') }}">
                                                    <i class="ri-arrow-left-line"></i> Back
                                                </a>
                                            </button>
                                        </div>

                                        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                                            <form onsubmit="return validateFile()" class="tablelist-form"
                                                action="{{ route('metaData.update', $data->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="grid grid-cols-2 gap-4">
                                                    <div class="mb-3">
                                                        Page Name <span style="color:red;">*</span>
                                                        <input type="text" id="pagename" name="pagename"
                                                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                            placeholder="Enter Page Name"
                                                            value="{{ old('pagename', isset($data) ? $data->pagename : '') }}"
                                                            required autocomplete="off" readonly autofocus>
                                                    </div>

                                                    <div class="mb-3">
                                                        Meta Title <span style="color:red;">*</span>
                                                        <input type="text" id="metaTitle" name="metaTitle"
                                                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                            placeholder="Enter Job Type"
                                                            value="{{ old('metaTitle', isset($data) ? $data->metaTitle : '') }}"
                                                            required autocomplete="off">
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-1 gap-4">
                                                    <div class="mb-3">
                                                        <span style="color:red;"></span>Meta Keyword
                                                        <textarea id="metaKeyword" name="metaKeyword" class="ckeditor-classic text-slate-800" style="height: 300px !important;">{{ $data->metaKeyword }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-1 gap-4">
                                                    <div class="mb-3">
                                                        <span style="color:red;"></span>Meta Description
                                                        <textarea id="metaDescription" name="metaDescription" class="ckeditor-classic text-slate-800"
                                                            style="height: 300px !important;">{{ $data->metaDescription }}</textarea>
                                                    </div>
                                                </div>


                                                <div class="grid grid-cols-1 gap-4">
                                                    <div class="mb-3">
                                                        <span style="color:red;"></span>Head
                                                        <textarea id="head" name="head" class="ckeditor-classic text-slate-800" style="height: 300px !important;">{{ $data->head }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-1 gap-4">
                                                    <div class="mb-3">
                                                        <span style="color:red;"></span>Body
                                                        <textarea id="body" name="body" class="ckeditor-classic text-slate-800" style="height: 300px !important;">{{ $data->body }}</textarea>
                                                    </div>
                                                </div>

                                                
                                                <div class="mt-10 ltr:md:text-end">
                                                    <button type="submit"
                                                        class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Submit</button>
                                                    <a href="{{ route('metaData.index') }}">
                                                <button type="button"
                                                    class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                                                    >
                                                         Cancel
                                                </button>
                                            </a>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End Page-content -->

        </div>
    </div>

    <script src="{{ asset('assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
    <script>
        // Initialize CKEditor for each textarea with class 'ckeditor-classic'
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor.create(document.querySelector('#metaKeyword')).catch(error => {
                console.error(error);
            });
            ClassicEditor.create(document.querySelector('#metaDescription')).catch(error => {
                console.error(error);
            });
            ClassicEditor.create(document.querySelector('#head')).catch(error => {
                console.error(error);
            });
            ClassicEditor.create(document.querySelector('#body')).catch(error => {
                console.error(error);
            });
        });
    </script>

@endsection
