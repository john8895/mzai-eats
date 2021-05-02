@extends("views.app")
@section("content")
    <main class="page-index">
        <section class="groupbuy">
            <div class="container-fluid">
                <h2 class="section-title">最新 Mzai Eats 嗯災吃啥團購
                    <div class="carousel-control">
                        <button class="carousel-control-prev" type="button" data-bs-target="#groupbuyCarosel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#groupbuyCarosel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </h2>
                <div class="carousel slide" id="groupbuyCarosel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <article class="store-list__item">
                                        <div class="store-image" data-groupstart="已成團">
                                            <a href="order.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                                        </div>
                                        <div class="store-meta">
                                            <div class="store-name"><a href="order.html" title="">A Bao House 成都店</a></div>
                                            <ul class="d-flex store-other-info">
                                                <li class="me-2"><i class="fa fa-clock me-1"></i>7 天後收單</li>
                                                <li><i class="far fa-user me-1"></i>5 人參加</li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article class="store-list__item">
                                        <div class="store-image" data-groupstart="已成團">
                                            <a href="order.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                                        </div>
                                        <div class="store-meta">
                                            <div class="store-name"><a href="order.html" title="">A Bao House 成都店</a></div>
                                            <ul class="d-flex store-other-info">
                                                <li class="me-2"><i class="fa fa-clock me-1"></i>7 天後收單</li>
                                                <li><i class="far fa-user me-1"></i>5 人參加</li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article class="store-list__item">
                                        <div class="store-image" data-groupstart="已成團">
                                            <a href="order.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                                        </div>
                                        <div class="store-meta">
                                            <div class="store-name"><a href="order.html" title="">A Bao House 成都店</a></div>
                                            <ul class="d-flex store-other-info">
                                                <li class="me-2"><i class="fa fa-clock me-1"></i>7 天後收單</li>
                                                <li><i class="far fa-user me-1"></i>5 人參加</li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <article class="store-list__item">
                                        <div class="store-image">
                                            <a href="order.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                                        </div>
                                        <div class="store-meta">
                                            <div class="store-name"><a href="order.html" title="">A Bao House 都店</a></div>
                                            <ul class="d-flex store-other-info">
                                                <li class="me-2"><i class="fa fa-clock me-1"></i>7 天後收單</li>
                                                <li><i class="far fa-user me-1"></i>5 人參加</li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article class="store-list__item">
                                        <div class="store-image">
                                            <a href="order.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                                        </div>
                                        <div class="store-meta">
                                            <div class="store-name"><a href="order.html" title="">A Bao House 都店</a></div>
                                            <ul class="d-flex store-other-info">
                                                <li class="me-2"><i class="fa fa-clock me-1"></i>7 天後收單</li>
                                                <li><i class="far fa-user me-1"></i>5 人參加</li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article class="store-list__item">
                                        <div class="store-image">
                                            <a href="order.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                                        </div>
                                        <div class="store-meta">
                                            <div class="store-name"><a href="order.html" title="">A Bao House 都店</a></div>
                                            <ul class="d-flex store-other-info">
                                                <li class="me-2"><i class="fa fa-clock me-1"></i>7 天後收單</li>
                                                <li><i class="far fa-user me-1"></i>5 人參加</li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-list">
            <div class="container-fluid">
                <h2 class="section-title">最新 Mzai Eats 嗯災吃啥登錄餐廳</h2>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <article class="store-list__item">
                            <div class="store-image">
                                <a href="{{ route("groupbuy")  }}" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                            </div>
                            <div class="store-meta d-flex">
                                <div class="store-name"><a href="groupbuy.html" title="">A Bao House 成都店</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <article class="store-list__item">
                            <div class="store-image">
                                <a href="groupbuy.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                            </div>
                            <div class="store-meta d-flex">
                                <div class="store-name"><a href="groupbuy.html" title="">A Bao House 成都店</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <article class="store-list__item">
                            <div class="store-image">
                                <a href="groupbuy.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                            </div>
                            <div class="store-meta d-flex">
                                <div class="store-name"><a href="groupbuy.html" title="">A Bao House 成都店</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <article class="store-list__item">
                            <div class="store-image">
                                <a href="groupbuy.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                            </div>
                            <div class="store-meta d-flex">
                                <div class="store-name"><a href="groupbuy.html" title="">A Bao House 成都店</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <article class="store-list__item">
                            <div class="store-image">
                                <a href="groupbuy.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                            </div>
                            <div class="store-meta d-flex">
                                <div class="store-name"><a href="groupbuy.html" title="">A Bao House 成都店</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <article class="store-list__item">
                            <div class="store-image">
                                <a href="groupbuy.html" title=""><img src="{{ asset('archive/products/p1.jpg')  }}" alt=""></a>
                            </div>
                            <div class="store-meta d-flex">
                                <div class="store-name"><a href="groupbuy.html" title="">A Bao House 成都店</a></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-category">
            <div class="container-fluid">
                <h2 class="section-title">附近的美食</h2>
                <ul class="store-category__item">
                    <li><a href="category.html" title="">
                            <figure><img src="{{ asset('asset/images/store-category.jpg')  }}" alt=""></figure>
                            <figcaption class="text-center">中式美食</figcaption>
                        </a></li>
                    <li><a href="category.html" title="">
                            <figure><img src="{{ asset('asset/images/store-category.jpg')  }}" alt=""></figure>
                            <figcaption class="text-center">中式美食</figcaption>
                        </a></li>
                    <li><a href="category.html" title="">
                            <figure><img src="{{ asset('asset/images/store-category.jpg')  }}" alt=""></figure>
                            <figcaption class="text-center">中式美食</figcaption>
                        </a></li>
                    <li><a href="category.html" title="">
                            <figure><img src="{{ asset('asset/images/store-category.jpg')  }}" alt=""></figure>
                            <figcaption class="text-center">中式美食</figcaption>
                        </a></li>
                    <li><a href="category.html" title="">
                            <figure><img src="{{ asset('asset/images/store-category.jpg')  }}" alt=""></figure>
                            <figcaption class="text-center">中式美食</figcaption>
                        </a></li>
                    <li><a href="category.html" title="">
                            <figure><img src="{{ asset('asset/images/store-category.jpg')  }}" alt=""></figure>
                            <figcaption class="text-center">中式美食</figcaption>
                        </a></li>
                </ul>
            </div>
        </section>
    </main>
@endsection
