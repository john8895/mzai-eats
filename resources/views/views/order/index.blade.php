@extends("views.app")
@section("content")
    <main class="page-order">
        <section class="order-fixed">
            <div class="container-fluid">
                <div class="d-flex justify-content-between flex-wrap">
                    <ul class="d-flex flex-wrap">
                        <li><i class="fa fa-user-friends me-3"></i>阿翰的團購訂單</li>
                        <li>
                            &nbsp;&nbsp;·&nbsp;&nbsp;
                            共 5 個人
                        </li>
                        <li>
                            &nbsp;&nbsp;·&nbsp;&nbsp;
                            總計：$300
                        </li>
                    </ul>
                    <div class="btn-check-order text-end">
                        <button class="btn me-2" type="button" data-bs-toggle="modal" data-bs-target="#addOrderModal">
                            查看訂單<i class="fa fa-long-arrow-alt-right ms-2"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="innerpage-banner" style="background-image:url(archive/innerpage-banner.jpg);">
            <div class="innerpage-text">
                <h1 class="innerpage-title">大胖肉羹 中國醫店</h1>
                <ul class="store-meta">
                    <li><i class="fa fa-circle"></i>75-100TWD 費用</li>
                    <li><i class="fa fa-circle"></i>準時</li>
                    <li><i class="fa fa-circle"></i>滿 500 外送</li>
                </ul>
            </div>
            <div class="function-button">
                <button class="btn btn-modal-call me-2" type="button" data-bs-toggle="modal" data-bs-target="#addOrderModal">
                    <i class="fa fa-file-signature"></i>增加/修改訂單
                </button>
                <button class="btn btn-modal-call me-2" type="button" data-bs-toggle="modal" data-bs-target="#orderCountModal">
                    <i class="fa fa-clipboard-check"></i>訂單統計
                </button>
                <button class="btn btn-modal-call me-2" type="button"><i class="fa fa-power-off"></i>立即結單</button>
                <button class="btn btn-modal-call" type="button"><i class="fa fa-user-plus"></i>恢復開團</button>
            </div>
            <div class="modal fade order-modal" id="addOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body order-modal-body">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="order-modal-body__content">
                                <section class="order-add">
                                    <h3 class="order-modal-title">增加訂單</h3>
                                    <p class="description">
                                        依序輸入資訊，按下送出即可增加訂單。訂單會自動統計一樣的餐點，相同餐點但不同價格，請寫不同名稱，例如：餛飩麵+小菜、餛飩麵+滷蛋。</p>
                                    <form id="order_form" method="post">
                                        <input id="order_id" type="hidden" value="210423143111" name="add_order_id">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <input class="form-control" type="text" name="add_order_name" placeholder="請輸入姓名 *">
                                            </div>
                                            <div class="col-xl-3">
                                                <input class="form-control" type="text" name="add_order_meal" placeholder="請輸入餐點名稱 *">
                                            </div>
                                            <div class="col-xl-2">
                                                <input class="form-control" type="number" name="add_order_price" placeholder="請輸入價格 *">
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <select class="form-control" name="add_order_number">
                                                        <option value="0" disabled="disabled">請選擇數量</option>
                                                        <option value="1" selected="selected">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <input class="form-control" type="text" name="add_order_remark" placeholder="請輸入備註">
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-default" id="submit_order" type="submit">送出一筆訂單</button>
                                        </div>
                                    </form>
                                </section>
                                <section class="order-list mt-5 order-edit">
                                    <h3 class="order-modal-title">修改訂單</h3>
                                    <p class="description">如要修改訂單，直接修改欄位內容，改完點旁邊一下或按 Enter ，系統即會自動儲存。</p>
                                    <div class="order_list" id="order_list">
                                        <div class="row py-2 rounded order-item" data-index="1">
                                            <div class="order-item__field sn-number col-xl-1 px-0">
                                                <span class="number me-3">1.</span></div>
                                            <div class="order-item__field payment-status paid col-xl-1 px-0 form-check pt-2">
                                                <input class="form-check-input" id="defaultCheck_0" type="checkbox" value="1" name="order_paymentStatus" data-field="付款狀態" checked="checked">
                                                <label class="form-check-label" for="defaultCheck_0"><span class="unpaid" data-amount="70 元"><i class="fas fa-dollar-sign"></i>已付款</span></label>
                                            </div>
                                            <div class="order-item__field col-xl-2 px-1">
                                                <input class="field_id" type="hidden" name="field_id" value="60826a029ea90">
                                                <label class="label-mobile" for=""><i class="fa fa-user me-2"></i>姓名</label>
                                                <input class="form-control" type="text" value="愛吃飯" name="order_name" placeholder="請輸入姓名 *" data-field="姓名">
                                            </div>
                                            <div class="order-item__field col-xl-2 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-utensils me-2"></i>餐點名稱</label>
                                                <input class="form-control" type="text" value="肉絲炒飯" name="order_meal" placeholder="請輸入餐點名稱 *" data-field="餐點名稱">
                                            </div>
                                            <div class="order-item__field col-xl-2 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-coins me-2"></i>價格</label>
                                                <input class="form-control" type="number" value="70" name="order_price" placeholder="請輸入價格 *" data-field="價格">
                                            </div>
                                            <div class="order-item__field col-xl-1 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-calculator me-2"></i>數量</label>
                                                <input class="form-control" type="number" value="1" name="order_number" placeholder="請輸入數量 *" data-field="數量">
                                            </div>
                                            <div class="order-item__field col-xl-2 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-marker me-2"></i>備註</label>
                                                <input class="form-control" type="text" value="不要洋蔥" name="order_remark" placeholder="請輸入備註" data-field="備註">
                                            </div>
                                            <div class="order-item__field col-xl-1 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-trash me-2"></i>刪除</label><a class="btn delete_order" title="刪除此筆訂單">
                                                    <svg class="icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row py-2 rounded order-item" data-index="2">
                                            <div class="order-item__field sn-number col-xl-1 px-0">
                                                <span class="number me-3">2.</span></div>
                                            <div class="order-item__field payment-status unpaid col-xl-1 px-0 form-check pt-2">
                                                <input class="form-check-input" id="defaultCheck_1" type="checkbox" value="0" name="order_paymentStatus" data-field="付款狀態">
                                                <label class="form-check-label" for="defaultCheck_0"><span class="unpaid" data-amount="70 元"><i class="fas fa-dollar-sign"></i>未付款</span></label>
                                            </div>
                                            <div class="order-item__field col-xl-2 px-1">
                                                <input class="field_id" type="hidden" name="field_id" value="60826a029ea90">
                                                <label class="label-mobile" for=""><i class="fa fa-user me-2"></i>姓名</label>
                                                <input class="form-control" type="text" value="愛吃飯" name="order_name" placeholder="請輸入姓名 *" data-field="姓名">
                                            </div>
                                            <div class="order-item__field col-xl-2 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-utensils me-2"></i>餐點名稱</label>
                                                <input class="form-control" type="text" value="肉絲炒飯" name="order_meal" placeholder="請輸入餐點名稱 *" data-field="餐點名稱">
                                            </div>
                                            <div class="order-item__field col-xl-2 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-coins me-2"></i>價格</label>
                                                <input class="form-control" type="number" value="70" name="order_price" placeholder="請輸入價格 *" data-field="價格">
                                            </div>
                                            <div class="order-item__field col-xl-1 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-calculator me-2"></i>數量</label>
                                                <input class="form-control" type="number" value="1" name="order_number" placeholder="請輸入數量 *" data-field="數量">
                                            </div>
                                            <div class="order-item__field col-xl-2 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-marker me-2"></i>備註</label>
                                                <input class="form-control" type="text" value="不要洋蔥" name="order_remark" placeholder="請輸入備註" data-field="備註">
                                            </div>
                                            <div class="order-item__field col-xl-1 px-1">
                                                <label class="label-mobile" for=""><i class="fa fa-trash me-2"></i>刪除</label><a class="btn delete_order" title="刪除此筆訂單">
                                                    <svg class="icon-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade order-modal" id="orderCountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body order-modal-body">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="order-modal-body__content">
                                <section class="order-total">
                                    <h3 class="order-modal-title">訂單統計</h3>
                                    <p class="mb-2">共有 2 人參與團購，累積有 2 筆訂單</p>
                                    <div class="order-total__content" id="orderTotal">
                                        <div class="th order-total__content__title row">
                                            <div class="col-sm-3"><span>點餐內容</span></div>
                                            <div class="col-sm-2"><span>備註</span></div>
                                            <div class="col-sm-1"><span>數量</span></div>
                                            <div class="col-sm-1"><span>價格</span></div>
                                            <div class="col-sm-2"><span>小計</span></div>
                                            <div class="col-sm-3"><span>訂購人</span></div>
                                        </div>
                                        <div class="tr row">
                                            <div class="col-sm-3"><span>肉絲炒飯</span></div>
                                            <div class="col-sm-2"><span>備註</span></div>
                                            <div class="col-sm-1"><span>1</span></div>
                                            <div class="col-sm-1"><span>70</span></div>
                                            <div class="col-sm-2"><span>70</span></div>
                                            <div class="col-sm-3">
                                                <ul class="d-flex flex-wrap">
                                                    <li class="btn btn-outline-success px-1 mr-2">愛吃飯</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tr row">
                                            <div class="col-sm-3"><span>肉絲炒麵</span></div>
                                            <div class="col-sm-2"><span>備註</span></div>
                                            <div class="col-sm-1"><span>1</span></div>
                                            <div class="col-sm-1"><span>70</span></div>
                                            <div class="col-sm-2"><span>70</span></div>
                                            <div class="col-sm-3">
                                                <ul class="d-flex flex-wrap">
                                                    <li class="btn btn-outline-success px-1 mr-2">愛吃麵</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="th order-total__content__all-total row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-2">
                                                <span class="justify-content-end">總計<span class="total-number-mobile ms-1">140</span></span>
                                            </div>
                                            <div class="col-sm-2"><span class="total-number-desktop">140</span></div>
                                            <div class="col-sm-3"></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-info">
            <div class="container-fluid">
                <ul class="d-flex flex-column">
                    <li class="category"><i class="fa fa-folder-open"></i>中式美食</li>
                    <li class="address"><i class="fa fa-map-marker-alt"></i>台中市北區梅亭街253號, Taichung, 404</li>
                    <li class="intro"><i class="fa fa-info-circle"></i>各式炒飯、現炒餐點，每週五公休</li>
                    <li class="link"><i class="fa fa-link"></i><a href="javascript:;" title="" target="_blank">相關網站</a></li>
                </ul>
            </div>
        </section>
        <section class="groupbuy">
            <div class="container-fluid">
                <h3 class="groupbuy-title">菜單及圖庫 Restaurant menu</h3>
                <div class="row gx-0">
                    <article class="groupbuy-meta">
                        <div class="store-image">
                            <a href="archive/menu.jpg" data-lightbox="image-1" data-title="菜單"><img src="archive/menu.jpg" alt=""></a>
                        </div>
                    </article>
                    <article class="groupbuy-meta">
                        <div class="store-image">
                            <a href="archive/menu.jpg" data-lightbox="image-1" data-title="菜單"><img src="archive/menu.jpg" alt=""></a>
                        </div>
                    </article>
                    <article class="groupbuy-meta">
                        <div class="store-image">
                            <a href="archive/menu.jpg" data-lightbox="image-1" data-title="菜單"><img src="archive/menu.jpg" alt=""></a>
                        </div>
                    </article>
                    <article class="groupbuy-meta">
                        <div class="store-image">
                            <a href="archive/menu.jpg" data-lightbox="image-1" data-title="菜單"><img src="archive/menu.jpg" alt=""></a>
                        </div>
                    </article>
                    <article class="groupbuy-meta">
                        <div class="store-image">
                            <a href="archive/menu.jpg" data-lightbox="image-1" data-title="菜單"><img src="archive/menu.jpg" alt=""></a>
                        </div>
                    </article>
                    <article class="groupbuy-meta">
                        <div class="store-image">
                            <a href="archive/menu.jpg" data-lightbox="image-1" data-title="菜單"><img src="archive/menu.jpg" alt=""></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <div class="remark">
            <div class="container-fluid"><em>上開資訊是由我們所合作之商家合作夥伴所提供。如對上開資訊有任何疑問，請直接與商家合作夥伴聯繫。</em></div>
        </div>
    </main>
@endsection
