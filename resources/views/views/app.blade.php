<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="seo">
    <meta name="description" content="網站敘述">
    <meta property="og:title" content="網頁標題">
    <meta property="og:image" content="要顯示的封面圖片路徑">
    <meta property="og:url" content="網址">
    <meta property="og:description" content="網站簡述">
    <link rel="icon" href="{{ asset('asset/images/favicon.png')  }}" type="image/x-icon">
    <title>線上訂購餐點 | 美食外送 App | Mzai Eats 嗯災吃啥</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="{{ asset("asset/css/order.css")  }}" rel="stylesheet" type="text/css">
    <!-- 全站共用-->
    <link href="{{ asset('asset/css/style.css')  }}" rel="stylesheet" type="text/css">
</head>
<body>
<header class="header header-transparent" id="header">
    <div class="bg-light sidebar" id="navbarHeader">
        <div class="p-4">
            <button class="btn-login" onclick="location.href=&quot;m-index.html&quot;">登入</button>
            <div class="user-info mt-4">
                <a class="user-info__avatar" href="https://github.com/john8895/wanna-eat" title="檢視嗯災吃啥專案資訊" target="_blank"><i class="fab fa-github"></i></a>
                <div class="user-info__account">
                    <div>訂餐小幫手</div>
                    <a href="https://github.com/john8895/wanna-eat" title="檢視嗯災吃啥專案資訊" target="_blank">檢視本專案資訊</a>
                </div>
            </div>
            <ul class="sidebar__nav nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link link-dark" href="{{ route("groupbuy-list")  }}" title=""><i class="fas fa-bookmark"></i>進行中團購</a>
                </li>
                <li><a class="nav-link link-dark" href="{{  route("store-list") }}" title=""><i class="fas fa-hands-helping"></i>登錄餐廳</a>
                </li>
                <li>
                    <a class="nav-link link-dark" href="{{  route("history-list") }}" title=""><i class="fas fa-history"></i>歷史團購</a>
                </li>
            </ul>
            <a class="link-logout" href="javascript:;" title="">登出</a>
        </div>
        <hr>
        <div class="d-flex align-items-center p-3">
            <img src="{{ asset('asset/images/mzaieats-applogo.svg')  }}" width="56" height="56">
            <div class="app-text ms-3">App 為您帶來更多美食佳餚。</div>
        </div>
    </div>
    <div class="sidebar-layout"></div>
    <div class="navbar navbar-dark bg-lighj shadow-sm">
        <div class="container-fluid">
            <div class="menu-controller d-flex">
                <button class="menu-btn" id="menuBtn" aria-label="主瀏覽選單">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
                        <path d="M19.167 3.333H.833v2.5h18.334v-2.5zm0 5.834H.833v2.5h18.334v-2.5zM.833 15h18.334v2.5H.833V15z"></path>
                    </svg>
                </button>
                <a class="navbar-brand d-flex align-items-center" href="{{ route("home")  }}" title=""><img src="{{ asset('asset/images/logo.svg')  }}" alt="" width="146" height="24"></a>
            </div>
            <div class="recommend-eat">
                <i class="fas fa-utensils"></i><span class="recommend-text">今天推薦你吃</span><a href="order.html" title=""><span class="store-name">龍品魚丸店</span></a>
            </div>
        </div>
    </div>
</header>
@yield("content")
<footer class="footer mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <div class="widget d-flex flex-column justify-content-between h-100"><a href="index.html" title="">
                        <figure class="d-inline-block">
                            <img src="{{ asset('asset/images/logo-light.svg')  }}" width="146" height="24" alt="">
                            <figcaption class="mt-2 text-center">（嗯災吃啥）</figcaption>
                        </figure>
                    </a>
                    <div class="appstore"><a href="https://github.com/john8895/wanna-eat" title="">
                            <image src="{{ asset('asset/images/appstore.png')  }}" alt="" width="132"></image>
                        </a></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget">
                    <ul>
                        <li><a href="ab-list.html" title="">關於 Mzai Eats</a></li>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget">
                    <ul>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                        <li><a href="about.html" title="">關於 Mzai Eats</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="copyright">
        <div class="d-flex justify-content-between align-items-center">
            <div class="social-buttons">
                <a href="https://www.facebook.com/jgui.chen" title="" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </div>
            <div>©&nbsp;2021 Mzai Eats 嗯災吃啥</div>
        </div>
    </section>
</footer>
<!--script(src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js' integrity='sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG' crossorigin='anonymous')-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<!-- 全站共用-->
<script src="{{ asset('asset/js/all.js')  }}" type="text/javascript"></script>
<script>feather.replace();</script>
</body>
</html>
