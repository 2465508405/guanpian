@extends('h5.layouts.main')
@section('title')
    @if($page>=2)
        <title>{{$category->meta_title}}-六安瓜片网-第{{$page}}页</title>
    @else
        <title>{{$category->meta_title}}-六安瓜片网</title>
    @endif
    <meta name="keywords" content="{{$category->meta_keyword}}" />
    <meta name="description" content="{{$category->meta_description}}" />
@endsection
@section('content')
    <div class="content_top">
        <div class="arrowl"><a href=""><img src="/h5/images/home.png" alt="首页" height="22"></a></div>
        <div class="context">{{$category->alias}}</div>
        <div class="arrowr"><a href="/" class="more" id="dhmore"><img src="/h5/images/more.png" height="23"></a></div>
    </div>
    <div class="cnsnav">
        <div class="navlayer" id="navlayer">
            <div class="cnsnav">
                <ul id="">
                    <li class="selimg"><a href="/">首页</a></li>

                    <li><a href="/index6.html">资讯</a></li>

                    <li><a href="/index1.html">价格</a></li>

                    <li><a href="/index4.html">功效</a></li>

                    <li><a href="/index10.html">种植</a></li>

                    <li><a href="/index2.html">冲泡</a></li>

                    <li><a href="/index11.html">图片</a></li>

                    <li><a href="/index12.html">品牌</a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- 元素开始 -->
    <div id="tabBox2" class="tabBox">
        <div class="hd">
            <h2>当前位置：<a href='/'>六安瓜片</a> > <a href='/index{{$category->id}}.html'>{{$category->alias}}</a></h2>
        </div>
        <div class="news_list">
            @foreach($articles as $article)
            <div class='news_item'><img src="{{env('IMG_URL')}}/{{$article->thumbPic}}" alt="{{$article->title}}" class='avator75'>
                <div class='news_detail cursor'><a href='/thread-{{$article->id}}.html'><span>{{$article->title}}</span></a>
                    <p>{{mb_substr($article->meta_description,0,50)}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pages pagination">
        <?php
        echo htmlspecialchars_decode($pageSize);
        ?>
        </ul>
    </div>
    <!-- 效果导航 -->
    <div class="effectNav">
        <h3><a href="/m">首页</a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="list.php?tid=60" >帮助</a></h3>
        <p>首页 | 资讯 | 关注 | 科技 | 财经 | 汽车 | 房产 | 图片 | 视频 | 全国</p>
        <p></p>
    </div>
    <div id="goTopBtn"><img src="/h5/images/top.png" width="30"></div>
    <script src="/h5/js/top.js" type="text/javascript"></script>
    <script type="text/javascript">goTopEx();</script>
@endsection