@extends('main.main')
@section('content')
    <nav class="clearfix">
        <div class="nav">
            <div class="wrap nav-items">
                <div class="nav-item all">
                    所有分类
                    <div class="list">
                        <div class="list-item">
                            餐饮
                            <div class="list-item-detail">
                                <a href="{{route('list')}}" class="detail">火锅</a>
                                <a href="#1" class="detail">烧烤</a>
                                <a href="#1" class="detail">炸鸡</a>
                                <a href="#1" class="detail">鱼火锅</a>
                                <a href="#1" class="detail">蟹煲</a>
                                <a href="#1" class="detail">奶茶饮品</a>
                                <a href="#1" class="detail">牛排杯</a>
                                <a href="#1" class="detail">冒菜</a>
                                <a href="#1" class="detail">果汁果饮</a>
                                <a href="#1" class="detail">快餐</a>
                                <a href="#1" class="detail">中餐</a>
                                <a href="#1" class="detail">烤鱼</a>
                                <a href="#1" class="detail">小吃</a>
                                <a href="#1" class="detail">酸菜鱼</a>
                                <a href="#1" class="detail">西餐</a>
                                <a href="#1" class="detail">美蛙鱼头</a>
                                <a href="#1" class="detail">蛋糕</a>
                                <a href="#1" class="detail">甜品</a>
                                <a href="#1" class="detail">酸奶</a>
                                <a href="#1" class="detail">饺子</a>
                            </div>
                        </div>
                        <div class="list-item">
                            母婴
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            零售
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            服装
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            教育
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            建材
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            游乐
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            珠宝
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            美容
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            家居
                            <div class="list-item-detail">

                            </div>
                        </div>
                        <div class="list-item">
                            环保
                            <div class="list-item-detail">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item">
                    首页
                </div>
                <div class="nav-item">
                    热门
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="wrap">
            <div class="banner-sider">
                <section class="banner-content">
                    <div class="banner">
                        <img src="{{asset('images/banner.jpg')}}" alt="">
                    </div>
                </section>
                <aside>
                    <div class="user-sider">
                        <div class="avatar">
                            <div class="user-verify">
                                未认证
                            </div>
                            <div class="user-img">
                                <img src="{{asset('images/avatar.png')}}" alt="">
                            </div>
                            <div class="user-text">
                                Hi，你好
                            </div>
                        </div>
                        <div class="option-item">
                            <button class="btn publish">发布加盟</button>
                            <button class="btn seeking">寻找项目</button>
                        </div>
                        <div class="news">
                            <div class="news-title">
                                公告
                            </div>
                            <div class="news-content">
                                <a href="#"><span class="news-num news-num1">1、</span>大润发入住步步高</a>
                                <a href="#"><span class="news-num news-num2">2、</span>湖北美宜佳第112加分店开张</a>
                                <a href="#"><span class="news-num news-num3">3、</span>麦当劳“95后餐厅”告诉你如…</a>
                                <a href="#"><span class="news-num news-num4">4、</span>5G时代全面开启，中国加盟博</a>
                                <a href="#"><span class="news-num">5、</span>新奇的煎饼受欢迎！让人惊喜</a>
                                <a href="#"><span class="news-num">6、</span>加盟日记丨房地产转行外卖餐</a>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="clearfix"></div>
            </div>
            <div class="ads ">
                <img src="{{asset('images/ads.gif')}}" alt="">
            </div>
            <div class="items">
                <div class="items-content">
                    <div class="item-content-title">
                        <span class="title">推荐</span>
                        <span class="more">更多</span>
                    </div>
                    <div class="item-content-cards">
                        <a class="item-card" href="{{route('detail')}}">
                            <div class="item-card-img">
                                <img src="{{asset('images/card-img.jpg')}}" alt="">
                                <div class="item-card-float">
                                    <p><img src="{{asset('icons/icon-liulan.png')}}" alt=""> &nbsp;2890</p>
                                    <p><img src="{{asset('icons/icon-zixun.png')}}" alt=""> &nbsp;已咨询：291人</p>
                                </div>
                            </div>
                            <div class="item-card-info">
                                <p>美宜佳10-30万</p>
                                <p>实地考察 统一装修 成本管控</p>
                            </div>
                        </a>
                        <div class="item-card">
                            <div class="item-card-img">
                                <img src="{{asset('images/card-img.jpg')}}" alt="">
                                <div class="item-card-float">
                                    <p><img src="{{asset('icons/icon-liulan.png')}}" alt=""> &nbsp;2890</p>
                                    <p><img src="{{asset('icons/icon-zixun.png')}}" alt=""> &nbsp;已咨询：291人</p>
                                </div>
                            </div>
                            <div class="item-card-info">
                                <p>美宜佳10-30万</p>
                                <p>实地考察 统一装修 成本管控</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="items-content">
                    <div class="item-content-title">
                        <span class="title">新店</span>
                        <span class="more">更多</span>
                    </div>
                    <div class="item-content-cards">
                        <div class="item-card">
                            <div class="item-card-img">
                                <img src="{{asset('images/card-img.jpg')}}" alt="">
                                <div class="item-card-float">
                                    <p><img src="{{asset('icons/icon-liulan.png')}}" alt=""> &nbsp;2890</p>
                                    <p><img src="{{asset('icons/icon-zixun.png')}}" alt=""> &nbsp;已咨询：291人</p>
                                </div>
                            </div>
                            <div class="item-card-info">
                                <p>美宜佳10-30万</p>
                                <p>实地考察 统一装修 成本管控</p>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card-img">
                                <img src="{{asset('images/card-img.jpg')}}" alt="">
                                <div class="item-card-float">
                                    <p><img src="{{asset('icons/icon-liulan.png')}}" alt=""> &nbsp;2890</p>
                                    <p><img src="{{asset('icons/icon-zixun.png')}}" alt=""> &nbsp;已咨询：291人</p>
                                </div>
                            </div>
                            <div class="item-card-info">
                                <p>美宜佳10-30万</p>
                                <p>实地考察 统一装修 成本管控</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="items-content">
                    <div class="item-content-title">
                        <span class="title">热门</span>
                        <span class="more">更多</span>
                    </div>
                    <div class="item-content-cards">
                        <div class="item-card">
                            <div class="item-card-img">
                                <img src="{{asset('images/card-img.jpg')}}" alt="">
                                <div class="item-card-float">
                                    <p><img src="{{asset('icons/icon-liulan.png')}}" alt=""> &nbsp;2890</p>
                                    <p><img src="{{asset('icons/icon-zixun.png')}}" alt=""> &nbsp;已咨询：291人</p>
                                </div>
                            </div>
                            <div class="item-card-info">
                                <p>美宜佳10-30万</p>
                                <p>实地考察 统一装修 成本管控</p>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="item-card-img">
                                <img src="{{asset('images/card-img.jpg')}}" alt="">
                                <div class="item-card-float">
                                    <p><img src="{{asset('icons/icon-liulan.png')}}" alt=""> &nbsp;2890</p>
                                    <p><img src="{{asset('icons/icon-zixun.png')}}" alt=""> &nbsp;已咨询：291人</p>
                                </div>
                            </div>
                            <div class="item-card-info">
                                <p>美宜佳10-30万</p>
                                <p>实地考察 统一装修 成本管控</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
