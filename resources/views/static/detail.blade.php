@extends('main.main')
@section('content')
    <nav class="clearfix">
        <div class="nav">
            <div class="wrap nav-items">
                <a class="nav-item" href="{{route('home')}}">
                    首页
                </a>
                <div class="nav-item">
                    行业
                </div>
            </div>
        </div>
    </nav>

    <div class="detail-box wrap">
        <div class="detail-left">
            <div class="detail-header">
                <div class="bread-nav">
                    当前位置：
                    <a href="#">首页</a> >
                    <a href="#">餐饮</a> >
                    <a href="#" class="focus">美宜佳</a>
                </div>
                <div class="project-info">
                    <div class="project-info-left">
                        <div class="big-img">
                            <img src="./images/card-img.jpg" alt="">
                        </div>
                        <div class="small-img">
                            <img src="./images/card-img.jpg" alt="" class="img-focus">
                            <img src="./images/card-img.jpg" alt="">
                            <img src="./images/card-img.jpg" alt="">
                            <img src="./images/card-img.jpg" alt="">
                            <div class="prev"></div>
                            <div class="next"></div>
                        </div>
                    </div>
                    <div class="project-info-right">
                        <div class="basic-info-title title">
                            基本信息
                        </div>
                        <div class="basic-info-content content">
                            <span>投资费用：</span> 1-3万
                            <span>所属行业：</span> 餐饮
                            <span>加盟门店：</span> 123家
                        </div>
                        <div class="company-info-title title">
                            公司信息
                        </div>
                        <div class="company-info-content content">
                            <div class="company-name">公司名称：美宜佳</div>
                            <div class="company-asset">注册资金：123万</div>
                            <div class="company-area">所在地区：东莞</div>
                        </div>
                        <button class="btn getfile">获取资料</button>
                    </div>
                </div>
            </div>
            <div class="detail-nav">
                <div class="detail-nav-item item-focus">
                    项目展示
                </div>
                <div class="detail-nav-item">
                    项目详情
                </div>
                <div class="detail-nav-item">
                    项目资讯
                </div>
            </div>
            <div class="detail-content">
                <img src="./images/card-img.jpg" alt="">
            </div>
        </div>
        <div class="detail-right">
            <div class="detail-guess-like">
                <div class="guess-title">
                    <div class="like">猜你喜欢</div>
                    <div class="change">换一批</div>
                </div>
                <div class="guess-content">
                    <div class="guess-content-item">
                        <img src="./images/card-img.jpg" alt="">
                        <div class="img-content">美宜佳  投资费10-30万</div>
                    </div>
                    <div class="guess-content-item">
                        <img src="./images/card-img.jpg" alt="">
                        <div class="img-content">美宜佳  投资费10-30万</div>
                    </div>
                    <div class="guess-content-item">
                        <img src="./images/card-img.jpg" alt="">
                        <div class="img-content">美宜佳  投资费10-30万</div>
                    </div>
                </div>
            </div>
            <div class="detail-information">
                <div class="information-title">
                    <div class="latest information-item item-focus">
                        最新资讯
                    </div>
                    <div class="hotest information-item">
                        最热资讯
                    </div>
                    <div class="recomend information-item">
                        推荐资讯
                    </div>
                </div>
                <div class="information-content">
                    <p>为什么冰雪时光饮品能在众多品牌中脱颖...</p>
                    <p>一家四季热卖的冰雪时光饮品店，经营三...</p>
                    <p>我的餐饮创业思考---------《侑汤侑饭》</p>
                </div>
            </div>
            <div class="detail-topic">
                <div class="information-title">
                    <div class="latest information-item item-focus">
                        最新专题
                    </div>
                    <div class="hotest information-item">
                        最热专题
                    </div>
                    <div class="recomend information-item">
                        推荐专题
                    </div>
                </div>
                <div class="information-content">
                    <p>为什么冰雪时光饮品能在众多品牌中脱颖...</p>
                    <p>一家四季热卖的冰雪时光饮品店，经营三...</p>
                    <p>我的餐饮创业思考---------《侑汤侑饭》</p>
                </div>
            </div>
            <div class="detail-knowledge">
                <div class="knowledge-title">
                    <div class="title">创业知识</div>
                    <div class="more">更多</div>
                </div>
                <div class="knowledge-content">
                    <div class="content-item"><a>在乡镇开一家眼镜店能赚...</a>2019/07/12</div>
                    <div class="content-item"><a>在乡镇开一家眼镜店能赚...</a>2019/07/12</div>
                </div>
            </div>
        </div>
    </div>
    <div class="blank clearfix"></div>
@endsection