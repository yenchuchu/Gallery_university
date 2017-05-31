<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Gallery</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 s and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
        .heading-container {
            background: url(//hstatic.net/744/1000106744/1000219854/header_page.jpg?v=24) no-repeat scroll center center;
            -webkit-background-size: cover !important;
            -moz-background-size: cover !important;
            -o-background-size: cover !important;
            background-size: cover !important;
            overflow: hidden;
            position: relative;
        }
        .heading-container>div {height: 100%;}
        .heading-container .heading-parallax {
            overflow: hidden;
            text-align: center;
            position: relative;
        }
        .heading-container .heading-parallax .heading-wrap {
            overflow: hidden;
            padding: 30px 0;
        }
        .heading-container .heading-parallax .page-title {float: none;}
        .heading-container .heading-parallax .page-title h1 {
            margin: 0;
            font-size: 43px;
            color: #ffffff;
            text-transform: uppercase;
            position: relative;
            width: 100%;
            display: block;
            white-space: pre;
            overflow: hidden;
            text-overflow: ellipsis;
            font-family: 'Roboto', sans-serif!important;
        }

        .heading-container .heading-parallax {min-height: 280px;}
        .heading-container .heading-parallax .heading-wrap {
            width: 100%;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            -o-transform: translate(0, -50%);
            transform: translate(0, -50%);
            margin-top: 31px;
        }

        .modal-dialog {
            margin-top: 80px;
        }
    </style>
</head>

<body>

<section id="container" >
    <!--header start-->
    <div class="heading-container">
        <div class="container heading-parallax">
            <div class="heading-wrap">
                <div class="page-title"><h1>Gallery</h1></div>
                <div class="col-lg-12 col-md-12 col-sm-12 hidden-sm hidden-xs col-xs-12 pd5  ">

                </div>
                <div class="heading-page-icon hidden-xs">
                    <span class="soups"></span>
                    <span class="chicken"></span>
                    <span class="dizhes"></span>
                </div>
            </div>
        </div>
    </div>

    <!--main content start-->
    <section id="">
        <section class="wrapper">
            <!-- page start-->
            @yield('content')
            <!-- page end-->
        </section>
    </section>

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<script src="js/jquery.isotope.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Cache-Control': 'no-cache',
            'Pragma': 'no-cache'
        }
    });
</script>

<script type="text/javascript">
    $(function() {
        var $container = $('#gallery');
        $container.isotope({
            itemSelector: '.item',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        // filter items when filter link is clicked
        $('#filters a').click(function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({filter: selector});
            return false;
        });
    });
</script>

@yield('script')

</body>
</html>
