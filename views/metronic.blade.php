<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>eProduct Management</title>
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('metronic/media/logos/favicon.ico') }}" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link rel="stylesheet" href="{{ asset('metronic/plugins/global/plugins.bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('metronic/css/style.bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.css" type="text/css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url(metronic/media/patterns/header-bg.jpg)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex align-items-center">
                        <!--begin::Heaeder menu toggle-->
                        <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Heaeder menu toggle-->
                        <!--begin::Header Logo-->
                        <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                            <a href="javascript:void(0)">
                                <img alt="Logo" src="{{ asset('metronic/media/logos/logo-4.png') }}" class="logo-default h-25px" />
                                <img alt="Logo" src="{{ asset('metronic/media/logos/logo-5.png') }}" class="logo-sticky h-25px" />
                            </a>
                        </div>
                        <!--end::Header Logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
                                            <a class="menu-link active py-3" href="{{ url('/product') }}">
                                                <span class="menu-title">Product</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Toolbar-->
                <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column me-3">
                            <!--begin::Title-->
                            <h1 class="d-flex text-white fw-bolder my-1 fs-3">PRODUCT</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-white opacity-75">
                                    <a href="/metronic8/demo2/../demo2/index.html" class="text-white text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-white opacity-75">List Product</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Container-->
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-8">
                            <!--begin::Col-->
                            <div class="col-xl-12">
                                <!--begin::Tables Widget 9-->
                                <div class="card card-xxl-stretch mb-5 mb-xl-8">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">List Product</span>
                                        </h3>
                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover">
                                            <a href="#" onclick="resetForm()" class="btn btn-sm btn-light btn-active-primary" id="kt_explore_toggle">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                New Product
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <!--begin::Table container-->
                                        @yield('content')
                                        <!--end::Table container-->
                                    </div>
                                    <!--begin::Body-->
                                </div>
                                <!--end::Tables Widget 9-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Container-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1"> 2021 ©</span>
                            <a href="javascript:void(0)" target="_blank" class="text-gray-800 text-hover-primary">eProduct</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Exolore drawer toggle-->
    <!-- <button id="kt_explore_toggle" class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0" title="Explore Metronic" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover">
        <span id="kt_explore_toggle_label">Create</span>
    </button> -->
    <!--end::Exolore drawer toggle-->
    <!--begin::Exolore drawer-->
    <div id="kt_explore" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_explore_header">
                <h3 class="card-title fw-bolder text-gray-700">Product Form</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_explore_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body" id="kt_explore_body">
                <form id="productForm" method="post">

                    @csrf
                    <div class="mb-3">
                        <label for="code" class="form-label"> Code : <span class="text-danger"> * </span></label>
                        <input type="text" class="form-control" name="code" id="codeid" placeholder="Example: P123">
                        <span class="text-danger" id="codeErrorMsg"></span>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name : <span class="text-danger"> * </span></label>
                        <input type="text" class="form-control" name="name" id="nameid" placeholder="Example: Red Dinner Gown">
                        <span class="text-danger" id="nameErrorMsg"></span>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category : <span class="text-danger"> * </span></label>
                        <input type="text" class="form-control" name="category" id="categoryid" placeholder="Example: Fashion">
                        <span class="text-danger" id="categoryErrorMsg"></span>
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand:</label>
                        <input type="text" class="form-control" name="brand" id="brandid" placeholder="Example: No Brand">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type:</label>
                        <input type="text" class="form-control" name="type" id="typeid" placeholder="Example: Woman Dress">
                    </div>

                    <div class="mb-10">
                        <label for="desc" class="form-label">Description:</label>
                        <textarea class="form-control" id="descid" name="description" rows="4"> </textarea>
                    </div>

                    <center>
                        <div class="mb-3" style="padding-top: 10px;">
                            <input type="hidden" class="form-control" name="id" id="id">
                            <button type="button" id="kt_explore_close" class="btn btn-danger">Close</button>
                            <button type="submit" id="submitBtn" class="btn btn-primary"> Save </button>
                        </div>
                    </center>

                </form>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Exolore drawer-->
    <!--end::Drawers-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('metronic/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('metronic/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('metronic/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('metronic/js/custom/intro.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

<script>
    function resetForm() {
        document.getElementById("productForm").reset();
    }

    function getUpdateData(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.get('product/update/' + id, function(data) {
            $('#id').val(data.id);
            $('#codeid').val(data.code);
            $('#nameid').val(data.name);
            $('#categoryid').val(data.category);
            $('#brandid').val(data.brand);
            $('#descid').val(data.description);
            $('#typeid').val(data.type);
        })
    }

    $('#productForm').on('submit', function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#submitBtn').html('Please Wait...');
        $("#submitBtn").attr("disabled", true);

        $.ajax({
            url: "{{url('product/save')}}",
            type: "POST",
            data: $('#productForm').serialize(),
            success: function(response) {
                $('#submitBtn').html('Save');
                $("#submitBtn").attr("disabled", false);
                toastr.success('Save successfully');
                document.getElementById("productForm").reset();
            },
            error: function(response) {
                $('#submitBtn').html('Save');
                $("#submitBtn").attr("disabled", false);
                $('#codeErrorMsg').text(response.responseJSON.errors.code);
                $('#nameErrorMsg').text(response.responseJSON.errors.name);
                $('#categoryErrorMsg').text(response.responseJSON.errors.category);
            },
        });

    });
</script>

</html>