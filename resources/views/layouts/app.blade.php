<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield("title")</title>

    @include("layouts.css")
    <!-- Start GA -->
    @yield("css")
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    @yield("head")
    <!-- /END GA --></head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        @include("layouts.nav")
        @include("layouts.leftNav")

        <!-- Main Content -->
        <div class="main-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-breadcrumb-color">
                   @yield("breadcrumb")
                </ol>
            </nav>
                <section class="section">
                    <div class="section-header">
                        <div class="width-100-100">
                           @yield("header")
                        </div>
                    </div>

                    <div class="card ">
                        <div class="card-body">
                            @yield("content")
                        </div>
                    </div>
                </section>
        </div>
        </div>
        @include("layouts.footer")
    </div>
</div>

@include("layouts.js")
@yield("js")
</body>
</html>
