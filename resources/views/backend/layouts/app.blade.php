<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Blog</title>
</head>
<body class="">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
   @include('backend.layouts.header')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
       @include('backend.layouts.sidemenu')
        <!--  END SIDEBAR  -->
        <div id="content" class="main-content">
            @yield('section')

            <!--  BEGIN FOOTER  -->
                @include('backend.layouts.footer')
            <!--  END CONTENT AREA  -->
        </div>
    </div><!-- END MAIN CONTAINER -->
</body>
</html>