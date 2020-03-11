@extends('layouts.main')

@section('content')
    @if (session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
    @endif

    <!-- =========================================================================================== -->
    <!-- =========================== Widget Menu =================================================== -->
    <!-- =========================================================================================== -->

    @include('layouts.menu')


    <!-- =========================================================================================== -->
    <!-- =================== Wide Featured Image =================================================== -->
    <!-- =========================================================================================== -->

    <section class="qt-middle">

        <!-- For a center image, just wrap tag below in .container -->
        <div class="qt-featured-image qt-header-featured-image qt-header-featured-image-wide">
            <img src="{{ asset($gallery[0]->image) }}" alt="Blog Listing">
        </div>

    </section>

    <!-- =========================================================================================== -->
    <!-- =================== Begin page content ==================================================== -->
    <!-- =========================================================================================== -->

    <section class="qt-page-wrapper">
        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="qt-page-header">
                        <h2>اخبار<small></small></h2>
                        <ol class="breadcrumb">
                            <li class="active">اطلاعیه</li>
                            <li><a href="{{url("/")}}">صفحه اصلی</a></li>
                        </ol>
                    </div>

                    <div class="qt-page-header">
                        <h2>{{$slider->title}}<small> </small></h2>
                    </div>

                    <div class="qt-page-body">
                        <img width="500px" height="300px" src="{{asset($slider->image)}}"/>
                    </div>

                    <div class="qt-page-body">
                        {!!  $slider->description !!}
                    </div>


                </div>

                <div class="col-md-4">

                    <!-- =========================================================================================== -->
                    <!-- =========================== Widget Search ================================================= -->
                    <!-- =========================================================================================== -->
                @include('layouts.search-side')

                <!-- =========================================================================================== -->
                    <!-- =========================== Widget Newsletter ============================================= -->
                    <!-- =========================================================================================== -->

                @include('layouts.join-news-side')


                <!-- =========================================================================================== -->
                    <!-- =========================================================================================== -->
                    <!-- =========================================================================================== -->

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================================================== -->
    <!-- =========================== Recent Photo Galleries========================================= -->
    <!-- =========================================================================================== -->

    @include('layouts.last-pics')


@endsection
