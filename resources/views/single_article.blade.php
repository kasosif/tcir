@extends('layout')
@section('csspage')
    <style>
        ul.pagination {
            border: none;
        }
    </style>

@endsection
@section('title') {{$article->title}} @endsection
@section('content')
    <section class="medium-gap standard-home list-home">
        <div class="container">
            @if(!$article->videos()->count())
                @if($article->gallery()->count() > 1)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-posts">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single-post gallery-post">
                                            <div class="post-image">
                                                <div class="owl-post-banner owl-carousel">
                                                    @foreach($article->gallery as $image)
                                                        <div class="item">
                                                            <div class="overlay"></div>
                                                            <img src="{{asset('uploads/article_pictures/'.$image->name)}}" alt="">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="down-content">
                                                <h4>{{$article->title}}</h4>
                                                <ul class="post-info">
                                                    <li><a href="#">{{date('F d, Y',strtotime($article->created_at))}}</a></li>
                                                    <li><a href="#">Admin</a></li>
{{--                                                    <li><a href="#">{{$comments->count()}} Comments</a></li>--}}
                                                </ul>
                                                @if($article->body)
                                                {!! $article->body !!}
                                                @else
                                                <p>{{$article->description}}</p>
                                                @endif
                                                <div class="row">
                                                    <div class="col-lg-7 col-md-6">
                                                        <div class="tags">
                                                            <ul class="tags">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-6">
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
                                    @if($comments->count())
                                        <div class="col-lg-12">
                                            <div class="widget-post comments">
                                                <div class="widget-header">
                                                    <h4>3 Comments</h4>
                                                </div>
                                                <div class="widget-content">
                                                    <ul class="comments">
                                                        <li>
                                                            <div class="comment-author-image">
                                                                <img src="http://placehold.it/90x90" alt="">
                                                            </div>
                                                            <div class="right-content">
                                                                <h6>Robert Imeri <span>January 10, 2020</span></h6>
                                                                <a href="#" class="reply-button">Reply</a>
                                                                <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                            </div>
                                                        </li>
                                                        <li class="replied">
                                                            <div class="comment-author-image">
                                                                <img src="http://placehold.it/90x90" alt="">
                                                            </div>
                                                            <div class="right-content">
                                                                <h6>Kate Luise <span>January 11, 2020</span></h6>
                                                                <a href="#" class="reply-button">Reply</a>
                                                                <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comment-author-image">
                                                                <img src="http://placehold.it/90x90" alt="">
                                                            </div>
                                                            <div class="right-content">
                                                                <h6>Antonio Matters <span>January 09, 2020</span></h6>
                                                                <a href="#" class="reply-button">Reply</a>
                                                                <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-12">
                                        <div class="widget-post leave-comment">
                                            <div class="widget-header">
                                                <h4>Leave a comment</h4>
                                            </div>
                                            <div class="widget-content">
                                                <div class="contact-form">
                                                    <form id="contact" action="#" method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                                <fieldset>
                                                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                                <fieldset>
                                                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <fieldset>
                                                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your comment..." required=""></textarea>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <fieldset>
                                                                    <button type="submit" id="form-submit" class="filled-button">Post Comment</button>
                                                                </fieldset>
                                                            </div>
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
                @else
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-posts">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single-post">
                                            <div class="post-image">
                                                <img src="{{asset('uploads/article_pictures/'.$article->image)}}" alt="">
                                            </div>
                                            <div class="down-content">
                                                <h4>{{$article->title}}</h4>
                                                <ul class="post-info">
                                                    <li><a href="#">{{date('F d, Y',strtotime($article->created_at))}}</a></li>
                                                    <li><a href="#">Admin</a></li>
                                                    <li><a href="#">{{$comments->count()}} Comments</a></li>
                                                </ul>
                                                @if($article->body)
                                                    {!! $article->body !!}
                                                @else
                                                    <p>{{$article->description}}</p>
                                                @endif
                                                <div class="row">
                                                    <div class="col-lg-7 col-md-6">
                                                        <div class="tags">
                                                            <ul class="tags">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-6">
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
                                    @if($comments->count())
                                        <div class="col-lg-12">
                                            <div class="widget-post comments">
                                                <div class="widget-header">
                                                    <h4>3 Comments</h4>
                                                </div>
                                                <div class="widget-content">
                                                    <ul class="comments">
                                                        <li>
                                                            <div class="comment-author-image">
                                                                <img src="http://placehold.it/90x90" alt="">
                                                            </div>
                                                            <div class="right-content">
                                                                <h6>Robert Imeri <span>January 10, 2020</span></h6>
                                                                <a href="#" class="reply-button">Reply</a>
                                                                <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                            </div>
                                                        </li>
                                                        <li class="replied">
                                                            <div class="comment-author-image">
                                                                <img src="http://placehold.it/90x90" alt="">
                                                            </div>
                                                            <div class="right-content">
                                                                <h6>Kate Luise <span>January 11, 2020</span></h6>
                                                                <a href="#" class="reply-button">Reply</a>
                                                                <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comment-author-image">
                                                                <img src="http://placehold.it/90x90" alt="">
                                                            </div>
                                                            <div class="right-content">
                                                                <h6>Antonio Matters <span>January 09, 2020</span></h6>
                                                                <a href="#" class="reply-button">Reply</a>
                                                                <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-12">
                                        <div class="widget-post leave-comment">
                                            <div class="widget-header">
                                                <h4>Leave a comment</h4>
                                            </div>
                                            <div class="widget-content">
                                                <div class="contact-form">
                                                    <form id="contact" action="#" method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                                <fieldset>
                                                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                                <fieldset>
                                                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <fieldset>
                                                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your comment..." required=""></textarea>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <fieldset>
                                                                    <button type="submit" id="form-submit" class="filled-button">Post Comment</button>
                                                                </fieldset>
                                                            </div>
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
                @endif
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-posts">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-post">
                                        <div class="post-image">
                                            @if(\Illuminate\Support\Str::startsWith($article->mainVideo()->url, 'https://fb.watch/'))
                                                <iframe src="https://www.facebook.com/plugins/video.php?href={{$article->mainVideo()->url}}&show_text=true&appId=1674770442828640" style="width: 100%; height: 300px; border: none;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                            @else
                                                <iframe style="width: 100%; height: 300px; border: none;" src="{{$article->mainVideo()->url}}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            @endif
                                        </div>
                                        <div class="down-content">
                                            <h4>{{$article->title}}</h4>
                                            <ul class="post-info">
                                                <li><a href="#">{{date('F d, Y',strtotime($article->created_at))}}</a></li>
                                                <li><a href="#">Admin</a></li>
                                                <li><a href="#">{{$comments->count()}} Comments</a></li>
                                            </ul>
                                            @if($article->body)
                                                {!! $article->body !!}
                                            @else
                                                <p>{{$article->description}}</p>
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-7 col-md-6">
                                                    <div class="tags">
                                                        <ul class="tags">
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-6">
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
                                @if($comments->count())
                                    <div class="col-lg-12">
                                        <div class="widget-post comments">
                                            <div class="widget-header">
                                                <h4>3 Comments</h4>
                                            </div>
                                            <div class="widget-content">
                                                <ul class="comments">
                                                    <li>
                                                        <div class="comment-author-image">
                                                            <img src="http://placehold.it/90x90" alt="">
                                                        </div>
                                                        <div class="right-content">
                                                            <h6>Robert Imeri <span>January 10, 2020</span></h6>
                                                            <a href="#" class="reply-button">Reply</a>
                                                            <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                        </div>
                                                    </li>
                                                    <li class="replied">
                                                        <div class="comment-author-image">
                                                            <img src="http://placehold.it/90x90" alt="">
                                                        </div>
                                                        <div class="right-content">
                                                            <h6>Kate Luise <span>January 11, 2020</span></h6>
                                                            <a href="#" class="reply-button">Reply</a>
                                                            <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comment-author-image">
                                                            <img src="http://placehold.it/90x90" alt="">
                                                        </div>
                                                        <div class="right-content">
                                                            <h6>Antonio Matters <span>January 09, 2020</span></h6>
                                                            <a href="#" class="reply-button">Reply</a>
                                                            <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-lg-12">
                                    <div class="widget-post leave-comment">
                                        <div class="widget-header">
                                            <h4>Leave a comment</h4>
                                        </div>
                                        <div class="widget-content">
                                            <div class="contact-form">
                                                <form id="contact" action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <fieldset>
                                                                <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <fieldset>
                                                                <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." required="">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <fieldset>
                                                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your comment..." required=""></textarea>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <fieldset>
                                                                <button type="submit" id="form-submit" class="filled-button">Post Comment</button>
                                                            </fieldset>
                                                        </div>
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
            @endif
        </div>
    </section>

@endsection
