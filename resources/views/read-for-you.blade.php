@extends('layout')
@section('csspage')
    <style>
        ul.pagination {
            border: none;
        }
    </style>

@endsection
@section('title') {{$cat->name}} @endsection
@section('content')
    <section class="medium-gap standard-home list-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="standard-posts">
                        @foreach($articles as $article)
                            @if($article->videos()->count())
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="standard-post">
                                        @if(\Illuminate\Support\Str::startsWith($article->mainVideo()->url, 'https://fb.watch/'))
                                                <div class="post-image">
                                                    <iframe src="https://www.facebook.com/plugins/video.php?href={{$article->mainVideo()->url}}&show_text=true&appId=1674770442828640" style="width: 100%; height: 300px; border: none;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                                </div>
                                            @else
                                                <div class="post-image">
                                                    <iframe style="width: 100%; height: 300px; border: none;" src="{{$article->mainVideo()->url}}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            @endif
                                            <div class="down-content">
                                                <div class="meta-category">
                                                    <span>Article {{ ($articles->currentpage()-1) * $articles->perpage() + $loop->index + 1 }}</span>
                                                </div>
                                                <a href="{{route('single_article',$article->slug)}}">
                                                    <h4>{{$article->title}}</h4>
                                                </a>
                                                <ul class="post-info">
                                                    <li><a href="#">{{date('F d, Y',strtotime($article->created_at))}}</a></li>
                                                    <li><a href="#">Admin</a></li>
                                                </ul>
                                                <p>
                                                    {{$article->description}}
                                                </p>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
{{--                                                        <div class="comments-info">--}}
{{--                                                            <i class="fa fa-comment-o"></i>--}}
{{--                                                            <span>{{$article->comments()->count()}} comments</span>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <ul class="share-post">
                                                            <li><i class="fa fa-share-alt"></i></li>
                                                            <li><a href="#" onclick='window.open("https://www.facebook.com/sharer/sharer.php?u={{route('single_article',$article->slug)}}", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=300,width=400,height=400");'>Facebook</a>,</li>
                                                            <li><a href="#" onclick='window.open("https://twitter.com/share?text={{$article->title}}&url={{route('single_article',$article->slug)}}", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=300,width=400,height=400");'>Twitter</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="standard-post">
                                            <div class="post-image">
                                                <a href="{{route('single_article',$article->slug)}}"><img src="{{asset('uploads/article_pictures/'.$article->image)}}" alt="{{$article->title}}"></a>
                                            </div>
                                            <div class="down-content">
                                                <div class="meta-category">
                                                    <span>Article {{ ($articles->currentpage()-1) * $articles->perpage() + $loop->index + 1 }}</span>
                                                </div>
                                                <a href="{{route('single_article',$article->slug)}}">
                                                    <h4>{{$article->title}}</h4>
                                                </a>
                                                <ul class="post-info">
                                                    <li><a href="#">{{date('F d, Y',strtotime($article->created_at))}}</a></li>
                                                    <li><a href="#">Admin</a></li>
                                                </ul>
                                                <p>
                                                    {{$article->description}}
                                                </p>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <ul class="share-post">
                                                            <li><i class="fa fa-share-alt"></i></li>
                                                            <li><a href="#" onclick='window.open("https://www.facebook.com/sharer/sharer.php?u={{route('single_article',$article->slug)}}", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=300,width=400,height=400");'>Facebook</a>,</li>
                                                            <li><a href="#" onclick='window.open("https://twitter.com/share?text={{$article->title}}&url={{route('single_article',$article->slug)}}", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=300,width=400,height=400");'>Twitter</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{$articles->links()}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar right-sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget-sidebar categories">
                                    <div class="widget-header">
                                        <h4>Categories</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="categories">
                                            @foreach($article_categories as $article_category)
                                                <li><a href="{{url()->current()}}?category={{$article_category->id}}">{{$article_category->name}} <span>({{$article_category->countArticles($cat->link)}})</span></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="widget-sidebar latest-posts">
                                    <div class="widget-header">
                                        <h4>Latest Posts</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="latest-post-list">
                                            @foreach($latest_posts as $p)
                                                <li>
                                                    <a href="{{route('single_article',$p->slug)}}">
                                                        <div class="left-image">
                                                            <img src="{{asset('uploads/article_pictures/'.$p->image)}}" alt="">
                                                            <span>{{$p->count_views}}</span>
                                                        </div>
                                                        <div class="right-content">
                                                            <h6>{{$p->title}}</h6>
                                                            <span>{{date('F d, Y',strtotime($p->created_at))}}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
