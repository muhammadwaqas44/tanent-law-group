@extends('site-layout.site-layout')

@section('title')
    @php
        $title = 'Security Deposit Toolkit-Blogs'
    @endphp

    {{$title}}
@endsection


{{--@section('seo-tags')--}}
{{--    <link rel=canonical href="{{route('aboutUs')}}">--}}

{{--    <meta property="og:url" content="{{route('aboutUs')}}"/>--}}
{{--    <meta property="og:type" content="website"/>--}}
{{--    <meta property="og:title" content="{{$title}}"/>--}}
{{--    <meta property="og:description" content="{{$title}}"/>--}}
{{--    <meta property="og:image" content="{{asset('site/img/new-logo.png')}}"/>--}}

{{--    <meta name="twitter:title" content="{{$title}}">--}}
{{--    <meta name="twitter:description" content="{{$title}}">--}}
{{--    <meta name="twitter:image" content="{{asset('site/img/new-logo.png')}}">--}}
{{--    <meta name="twitter:card" content="{{$title}}">--}}
{{--@endsection--}}


@section('content')
    <div class="container">
        <div class="row float-left">
            <div>

                <div class="left_main col-md-7 col-sm-12">
                @if(sizeof($blogs)>0)
                    <!-- ----------------------------------------------------------------------------------------------- -->
                        @foreach($blogs as $blog)
                            <div class="blog_1">
                                <h2 class="blog_title"><a
                                            href="{{route('blogView',$blog->id)}}">{{$blog->title}}</a>
                                </h2>
                                <p class="blog_para">
                                    {{str_limit($blog->description, $limit = 100, $end = '........') }}
                                </p>


                                <span class="date"
                                >{{$blog->created_at}}
            </span>
                                <a href="{{route('blogView',$blog->id)}}" class="read-more">Read More</a>

                            </div>
                        @endforeach
                    @else
                        <div class="blog_1">
                            <h2 class="blog_title col-md-7" style="width: 100%;">
                                No Record Found
                            </h2>
                            <p class="blog_para col-md-7" style="visibility:hidden ">
                                aalsdsakndksandksajndkjasndkjasndkjnsdkjnaskjdnsakjdnaskdnaskdnaskda
                                'dsaldjasdnasdnaksdkjasdnkasndasd'asldasdnaskdasdas
                                askdnaskjdnaskjdnaskjdnaksjdnkjasdnkjasndkjasndkjasndkjasndsakjd
                            </p>
                            <span class="date">
{{--                            >{{$blog->created_at}} --}}
                                {{--<span class="blog_author">Micheal Wells</span>--}}
            </span>
                        </div>
                @endif
                <!-- ----------------------------------------------------------------------------------- -->

                    <!-- ------------------------------------------------------------------------------- -->

                    <div class="d-flex pagination">
                        {{--<a href="javascript:void()">Pre</a>--}}
                        {{--<a href="javascript:void()" class="active">1</a>--}}
                        {{--<a href="javascript:void()">2</a>--}}
                        {{--<a href="javascript:void()">3</a>--}}
                        {{--<a href="javascript:void()">Next</a>--}}
                    </div>
                </div>
                <div class="right_main col-sm-12 col-md-5">
                    <div class="s_section">
                        <span class="search">Search</span>
                        <form action="{{route('blogTitle')}}">
                            <div class="input-group mt-3">
                                <input type="text" name="search" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="jbd" style="border: none;background-color: #f13f3f;padding:3.5px 3px;" type="submit"><span class="search_icon"><i class="fas fa-search"></i></span></button>
                                </div>
                            </div>
{{--                            <div class="input-group mt-4">--}}

{{--                                <input type="search" class="form-control input" style="border-radius: 0px;" placeholder="Search" name="search"--}}
{{--                                       aria-label="Recipient's username" aria-describedby="basic-addon2">--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <button type="submit"><span class="search_icon" style="font-size: 17px"><i class="fas fa-search"></i></span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                        </form>
                    </div>

                    {{--<div class="s_archive">--}}
                    {{--<span class="txt_archives w-100">Archives</span>--}}
                    {{--<div class="archives_list">--}}
                    {{--<div class="archive_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<span class="archive_date"> Jun 2018</span>--}}
                    {{--</div>--}}
                    {{--<div class="archive_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<span class="archive_date"> Jun 2018</span>--}}
                    {{--</div>--}}
                    {{--<div class="archive_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<span class="archive_date"> Jun 2018</span>--}}
                    {{--</div>--}}
                    {{--<div class="archive_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<span class="archive_date"> Jun 2018</span>--}}
                    {{--</div>--}}
                    {{--<div class="archive_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<span class="archive_date"> Jun 2018</span>--}}
                    {{--</div>--}}
                    {{--<div class="archive_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<span class="archive_date"> Jun 2018</span>--}}
                    {{--</div>--}}
                    {{--<div class="archive_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<span class="archive_date"> Jun 2018</span>--}}
                    {{--</div>--}}
                    {{--<div class="archive_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<span class="archive_date"> Jun 2018</span>--}}
                    {{--</div>--}}
                    {{--</d>--}}

                    {{--</div>--}}
                    {{--</div>--}}


                    {{--<div class="blog_post">--}}
                    {{--<span class="txt_blogpost">Recent Blog Post</span>--}}
                    {{--<div>--}}
                    {{--<a href="javascript:void()" class="blog_link">Lorem ipsum dolor sit amet, consectetur </a>--}}
                    {{--<span class="post_date"> 2 days ago</span>--}}
                    {{--</div>--}}
                    {{--<div>--}}
                    {{--<a href="javascript:void()" class="blog_link">Lorem ipsum dolor sit amet, consectetur </a>--}}
                    {{--<span class="post_date"> 2 days ago</span>--}}
                    {{--</div>--}}
                    {{--<div>--}}
                    {{--<a href="javascript:void()" class="blog_link">Lorem ipsum dolor sit amet, consectetur </a>--}}
                    {{--<span class="post_date"> 2 days ago</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="categories">--}}
                    {{--<span class="txt_categories">--}}
                    {{--Categories--}}
                    {{--</span>--}}
                    {{--<div class="category_list">--}}
                    {{--<div class="category_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<a href="javascript:void()" class="category_link">Tatto</a>--}}
                    {{--</div>--}}
                    {{--<div class="category_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<a href="javascript:void()" class="category_link">Piercing</a>--}}
                    {{--</div>--}}
                    {{--<div class="category_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<a href="javascript:void()" class="category_link">Design</a>--}}
                    {{--</div>--}}
                    {{--<div class="category_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<a href="javascript:void()" class="category_link">Cover Up</a>--}}
                    {{--</div>--}}
                    {{--<div class="category_item">--}}
                    {{--<span class="a_arrow"> <i class="fas fa-chevron-right"></i> </span>--}}
                    {{--<a href="javascript:void()" class="category_link">Permanent Make Up</a>--}}
                    {{--</div>--}}

                    {{--</div>--}}

                    {{--</div>--}}
                </div>
            </div>


        </div>
    </div>
@endsection
