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

    <div class="select-condition wrap">
        <div class="condition-item left">
            <div class="condition-title">
                所有行业
                <span class="breadcrumb">
                    <span class="breadcrumb-item">北京</span>
                    <span class="breadcrumb-item">餐饮</span>
                    <span class="breadcrumb-item">1-5万</span>
                </span>
            </div>
            <div class="condition-content">
                <div class="clearfix">
                    <div class="condition-content-item">城市</div>
                    <div class="condition-content-all"><a href="#">全部</a></div>
                    <div class="condition-content-list">
                        <a href="#">北京</a>
                        <a href="#">上海</a>
                        <a href="#">广州</a>
                        <a href="#">深圳</a>
                        <a href="#">武汉</a>
                        <a href="#">北京</a>
                        <a href="#">上海</a>
                        <a href="#">广州</a>
                        <a href="#">深圳</a>
                        <a href="#">武汉</a>
                        <a href="#">北京</a>
                        <a href="#">上海</a>
                        <a href="#">广州</a>
                        <a href="#">深圳</a>
                        <a href="#">武汉</a>
                        <a href="#">北京</a>
                        <a href="#">上海</a>
                        <a href="#">广州</a>
                        <a href="#">深圳</a>
                        <a href="#">武汉</a>
                        <a href="#">北京</a>
                        <a href="#">上海</a>
                        <a href="#">广州</a>
                        <a href="#">深圳</a>
                        <a href="#">武汉</a>
                        <a href="#">北京</a>
                        <a href="#">上海</a>
                        <a href="#">广州</a>
                        <a href="#">深圳</a>
                        <a href="#">武汉</a>
                        <a href="#">北京</a>
                        <a href="#">上海</a>
                        <a href="#">广州</a>
                        <a href="#">深圳</a>
                        <a href="#">武汉</a>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="condition-content-item">项目</div>
                    <div class="condition-content-all"><a href="#">全部</a></div>
                    <div class="condition-content-list">
                        <a href="#">餐饮</a>
                        <a href="#">母婴</a>
                        <a href="#">服装</a>
                        <a href="#">数码</a>
                        <a href="#">家居</a>
                        <a href="#">餐饮</a>
                        <a href="#">母婴</a>
                        <a href="#">服装</a>
                        <a href="#">数码</a>
                        <a href="#">家居</a>
                        <a href="#">餐饮</a>
                        <a href="#">母婴</a>
                        <a href="#">服装</a>
                        <a href="#">数码</a>
                        <a href="#">家居</a>
                        <a href="#">餐饮</a>
                        <a href="#">母婴</a>
                        <a href="#">服装</a>
                        <a href="#">数码</a>
                        <a href="#">家居</a>
                        <a href="#">餐饮</a>
                        <a href="#">母婴</a>
                        <a href="#">服装</a>
                        <a href="#">数码</a>
                        <a href="#">家居</a>
                        <a href="#">餐饮</a>
                        <a href="#">母婴</a>
                        <a href="#">服装</a>
                        <a href="#">数码</a>
                        <a href="#">家居</a>
                        <a href="#">餐饮</a>
                        <a href="#">母婴</a>
                        <a href="#">服装</a>
                        <a href="#">数码</a>
                        <a href="#">家居</a>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="condition-content-item">投资费用</div>
                    <div class="condition-content-all"><a href="#">全部</a></div>
                    <div class="condition-content-list">
                        <a href="#">1-3万</a>
                        <a href="#">3-5万</a>
                        <a href="#">5-10万</a>
                        <a href="#">10-20万</a>
                        <a href="#">20-30万</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="condition-item left">
            <div class="condition-title">
                行业搜索
                <span class="breadcrumb">
                    <span class="breadcrumb-item">北京</span>
                    <span class="breadcrumb-item">餐饮</span>
                </span>
            </div>
            <div class="search-content">
                <div class="search-content-city">
                    <div class="city">城市</div>
                </div>
                <div class="search-condition">
                    <select name="province" id="" class="search-item">
                        <option value="0" disabled selected>省份</option>
                        <option value="1">北京市</option>
                    </select>
                    <select name="city" id="" class="search-item">
                        <option value="0" disabled selected>市区</option>
                        <option value="1">北京市</option>
                    </select>
                    <select name="country" id="" class="search-item">
                        <option value="0" disabled selected>县城</option>
                        <option value="1">北京市</option>
                    </select>
                </div>
                <div class="search-content-city">
                    <div class="city">行业</div>
                </div>
                <div class="search-condition">
                    <select name="province" id="" class="search-item">
                        <option value="0" disabled selected>行业</option>
                        <option value="1">餐饮</option>
                    </select>
                    <select name="city" id="" class="search-item">
                        <option value="0" disabled selected>项目</option>
                        <option value="1">厨满当</option>
                    </select>
                </div>
                <button class="search-submit">搜索</button>
            </div>
        </div>
    </div>

    <div class="search-result clearfix wrap">
        <div class="item">
            <img src="./images/card-img.jpg" alt="">
            <div class="item-info">
                <p> 投资费用</p>
                <p>1-10万</p>
            </div>
        </div>
        <div class="item">
            <img src="./images/card-img.jpg" alt="">
        </div>
        <div class="item">
            <img src="./images/card-img.jpg" alt="">
        </div>
        <div class="item">
            <img src="./images/card-img.jpg" alt="">
        </div>
        <div class="item">
            <img src="./images/card-img.jpg" alt="">
        </div>
        <div class="item">
            <img src="./images/card-img.jpg" alt="">
        </div>
        <div class="clearfix"></div>
    </div>
@endsection