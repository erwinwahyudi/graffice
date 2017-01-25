<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ asset('images/favicon_1.ico') }}">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('js/modernizr.min.js') }}"></script>
        
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper" class="enlarged forced">

            <!-- Top Bar Start -->
            @include('layout.header')
            <!-- Top Bar End -->


            <!-- Left Sidebar Start -->
            @include('layout.sidebar')
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title"> @yield('judul_konten') </h4>
                                <ol class="breadcrumb">
									<li>
										<a href="#">Ubold</a>
									</li>
									<li>
										<a href="#">Layouts</a>
									</li>
									<li class="active">
										Leftbar with user
									</li>
								</ol>
                            </div>
                        </div>
                        <!-- ./  Page-Title -->
                        
                        <!-- ini untuk notif pesan bro -->
                        <div id="pesan" data-pesan="info"></div>
                        <!-- ./ini untuk notif pesan bro -->
                    

                        <!-- konten utama disini ya bro -->
                        @yield('konten')
                        <!-- ./konten utama disini ya bro -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <!-- footer -->
                @include('layout.footer')
                <!--./footer -->               

            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/detect.js') }}"></script>
        <script src="{{ asset('js/fastclick.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

        <script src="{{ asset('js/jquery.core.js') }}"></script>
        <script src="{{ asset('js/jquery.app.js') }}"></script>

        <!-- plugin ni bro -->
            <script src="{{ asset('plugins/notifyjs/js/notify.js') }}"></script>
            <script src="{{ asset('plugins/notifications/notify-metro.js') }}"></script>

            <!--Morris Chart-->
            <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
            <script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>
            <script src="{{ asset('pages/morris.init.js') }}"></script>

        <!-- ./plugin ni bro -->       

        

        <script type="text/javascript">
            $( document ).ready(function() {
                // var pesan = $("#pesan").data('pesan');
                // console.log(pesan);
                // if(pesan == 'info') {
                //     $.Notification.confirm('success','top right', 'Are you nuts?!');
                //     $.Notification.autoHideNotify('info', 'top right', 'Info', 'Pesan informasi');
                // } else if(pesan == 'success') {
                //     $.Notification.autoHideNotify('success', 'top right', 'Success', 'Pesan sukses');
                // } else if(pesan == 'warning') {
                //     $.Notification.autoHideNotify('warning', 'top right', 'Warning', 'Pesan warning');
                // } else {
                //     $.Notification.autoHideNotify('error', 'top right', 'Error', 'Pesan error');
                // }
            });
        </script>

    
    </body>
</html>
