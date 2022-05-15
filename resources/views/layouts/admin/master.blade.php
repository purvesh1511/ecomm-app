<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        
        <meta charset="utf-8" />
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('layouts.admin.nav')
            @include('layouts.admin.topnav')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">    
                                        <h5 class="card-title">Clipboard Examples</h5>
                                        <p class="card-title-desc">Input example of clipboard.</p>    
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="clipboardInput" value="Welcome to Amezia !">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardInput"><i class="far fa-copy mr-2"></i>Copy</button>
                                                <button type="button" class="btn btn-dark btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardInput"><i class="fas fa-cut mr-2"></i>Cut</button>
                                            </div>
                                        </div>                  
                                    </div><!--end card-body-->
                                </div><!--end card-->
                                <div class="card">
                                    <div class="card-body">    
                                        <h5 class="card-title">Clipboard Examples of Paragraph</h5>
                                        <p class="card-title-desc">Inpu example of clipboard.</p>    
                                        <p id="clipboardParagraph" class="border p-3">Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
                                            a Latin professor at Hampden-Sydney College in Virginia, looked 
                                        </p>
                                        <div class="mt-3">
                                                <button type="button" class="btn btn-primary btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Copy</button>
                                        </div>            
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">    
                                        <h5 class="card-title">Clipboard Examples of Textarea</h5>
                                        <p class="card-title-desc">
                                            Textarea example of clipboard
                                        </p>    
                                        <textarea  type="text" class="form-control" rows="3" id="clipboardTextarea">Welcome to Amezia !</textarea>
                                        <div class="mt-3">
                                            <button type="button" class="btn btn-primary btn-clipboard mr-1" data-clipboard-action="copy" data-clipboard-target="#clipboardTextarea"><i class="far fa-copy mr-2"></i>Copy</button>
                                            <button type="button" class="btn btn-dark btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardTextarea"><i class="fas fa-cut mr-2"></i>Cut</button>
                                        </div>                                                   
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
    
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @include('layouts.admin.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        @include('layouts.admin.rightsidebar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script src="{{ asset('assets/libs/clipboard/clipboard.min.js') }}"></script>

        <script src="{{ asset('assets/js/pages/clipboard.init.js') }}"></script>

    </body>
</html>
