@extends('layouts.default')
@section('content')

<!--====== App Content ======-->
<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="shop-w-master">
                        <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                            <span>FILTERS</span></h1>
                        <div class="shop-w-master__sidebar sidebar--bg-snow">
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">CATEGORY</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-category">
                                        <ul class="shop-w__category-list gl-scroll">
                                       
                                            <li class="has-list">

                                                <a href="#">Categorias</a>
                                                
                                                <span class="category-list__text u-s-m-l-6"></span>

                                                <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span>
                                                <ul style="display:block">
                                                    <li class="has-list">

                                                        <a href="#">Deportes</a>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li>

                                                                <a href="#"> Balón De Fútbol Golty Tradicional 5 </a></li>
                                                            <li>

                                                                <a href="#"> Bicicleta Todo Terreno Gw Scorpion </a></li>

                                                            <li>

                                                                <a href="#"> Raqueta Tenis Profesional Wilson </a></li>

                                                            <li>

                                                                <a href="#"> Guayos Nike Hypervenom Phantom </a></li>    
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">Futbol</a>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li>

                                                                <a href="#"> Balón De Fútbol Golty Tradicional 5 </a></li>
                                                            <li>

                                                                <a href="#"> Espinilleras predator 20 Adidas </a></li>
                                                            <li>

                                                                <a href="#"> Guayos Nike Hypervenom Phantom </a></li>
                                                            <li>

                                                        </ul>
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">Diversion</a>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li>

                                                                <a href="#"> Balón De Fútbol Golty Tradicional 5 </a></li>
                                                              
                                                        </ul>
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">Accesorios_Deportivos</a>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li>

                                                                <a href="#"> Espinilleras predator 20 Adidas</a></li>
                                                            <li>

                                                                <a href="#"> BOTILO O TERMO NIKE </a></li>

                                                            <li>

                                                                <a href="#"> Casco Bicicleta MTB All Ride Cairbull </a></li>

                                                            <li>

                                                                <a href="#"> Bolso De Tenis Raquetero Wilson</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">Ciclismo</a>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li>

                                                                <a href="#"> Bicicleta Todo Terreno Gw Scorpion</a></li>
                                                            <li>

                                                                <a href="#"> Casco Bicicleta MTB All Ride Cairbull</a></li>
   
                                                        </ul>
                                                    </li>

                                                    <li class="has-list">

                                                        <a href="#">Tenis</a>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li>

                                                                <a href="#"> Raqueta Tenis Profesional Wilson  </a></li>
                                                            <li>

                                                                <a href="#"> Bolso De Tenis Raquetero Wilson </a></li>

                                                            
                                                        </ul>
                                                    </li>
                                                        
                                                       
                                                    
                                            </li>
                                        
                                        
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">RATING</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-rating" data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-rating">
                                        <ul class="shop-w__list gl-scroll">
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                                </div>

                                                <span class="shop-w__total-text">(2)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                        <span>& Up</span></div>
                                                </div>

                                                <span class="shop-w__total-text">(8)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>& Up</span></div>
                                                </div>

                                                <span class="shop-w__total-text">(10)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>& Up</span></div>
                                                </div>

                                                <span class="shop-w__total-text">(12)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>& Up</span></div>
                                                </div>

                                                <span class="shop-w__total-text">(1)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">SHIPPING</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-shipping" data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-shipping">
                                        <ul class="shop-w__list gl-scroll">
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="free-shipping">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="free-shipping">Free Shipping</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">PRICE</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-price" data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-price">
                                        <form class="shop-w__form-p">
                                            <div class="shop-w__form-p-wrap">
                                                <div>

                                                    <label for="price-min"></label>

                                                    <input class="input-text input-text--primary-style" type="text" id="price-min" placeholder="Min"></div>
                                                <div>

                                                    <label for="price-max"></label>

                                                    <input class="input-text input-text--primary-style" type="text" id="price-max" placeholder="Max"></div>
                                                <div>

                                                    <button class="btn btn--icon fas fa-angle-right btn--e-transparent-platinum-b-2" type="submit"></button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    
                                </div>
                            </div>
                            
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">SIZE</h1>

                                        <span class="fas fa-minus collapsed shop-w__toggle" data-target="#s-size" data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse" id="s-size">
                                        <ul class="shop-w__list gl-scroll">
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="xs">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="xs">XS</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(2)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="small">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="small">Small</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(4)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="medium">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="medium">Medium</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(6)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="large">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="large">Large</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(8)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="xl">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="xl">XL</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(10)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="xxl">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="xxl">XXL</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(12)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="shop-p">
                        <div class="shop-p__toolbar u-s-m-b-30">
                            <div class="shop-p__meta-wrap u-s-m-b-60">

                                <span class="shop-p__meta-text-1">FOUND 5 RESULTS</span>
                                <div class="shop-p__meta-text-2">

                                    <span>Related Searches:</span>
                                    @foreach ($categories as $category)
                                    <a class="gl-tag btn--e-brand-shadow" href="#">{{$category->name}}</a>
                                    @endforeach
                                    
                            </div>
                            <div class="shop-p__tool-style">
                                <div class="tool-style__group u-s-m-b-8">

                                    <span class="js-shop-grid-target is-active">Grid</span>

                                    <span class="js-shop-list-target">List</span></div>
                                <form>
                                    <div class="tool-style__form-wrap">
                                        <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                <option>Show: 8</option>
                                                <option selected>Show: 12</option>
                                                <option>Show: 16</option>
                                                <option>Show: 28</option>
                                            </select></div>
                                        <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                <option selected>Sort By: Newest Items</option>
                                                <option>Sort By: Latest Items</option>
                                                <option>Sort By: Best Selling</option>
                                                <option>Sort By: Best Rating</option>
                                                <option>Sort By: Lowest Price</option>
                                                <option>Sort By: Highest Price</option>
                                            </select></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                              @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-m">
                                        <div class="product-m__thumb">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="{{ count($product->images) > 0 ? $product->images[0]->url : 'no tiene imagen disponible' }}" alt=""></a>
                                            <div class="product-m__quick-look">

                                                <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                            <div class="product-m__add-cart">

                                                <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                        </div>
                                        <div class="product-m__content">
                                            <div class="product-m__category">

                                                <a href="shop-side-version-2.html"></a></div>
                                            <div class="product-m__name">

                                                <a href="product-detail.html">{{ $product->name }}</a></div>
                                            <div class="product-m__rating gl-rating-style">
                                                
                                            @for ($i = 0; $i < ($product->score); $i++)
                                               <i class="fas fa-star"></i>
                                            @endfor 

                                            <!--
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            -->
                                            
                                            
                                                <span class="product-m__review"></span></div>
                                                
                                            <div class="product-m__price">${{ $product ->price - (($product ->discount/100)*$product ->price)}}
                                                <span class="product-o__discount">${{ $product ->price}} </span>
                                            </div>
                                            <div class="product-m__hover">
                                                <div class="product-m__preview-description">

                                                    <span>{{ $product->description }}</span></div>
                                                <div class="product-m__wishlist">

                                                    <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                                 
                            </div>
                        </div>
                        <div class="u-s-p-y-60">

                            <!--====== Pagination ======-->
                            <ul class="shop-p__pagination">
                                <li class="is-active">

                                    <a href="shop-grid-left.html">1</a></li>
                                <li>

                                    <a href="shop-grid-left.html">2</a></li>
                                <li>

                                    <a href="shop-grid-left.html">3</a></li>
                                <li>

                                    <a href="shop-grid-left.html">4</a></li>
                                <li>

                                    <a class="fas fa-angle-right" href="shop-grid-left.html"></a></li>
                            </ul>
                            <!--====== End - Pagination ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->
</div>
<!--====== End - App Content ======-->
@endsection

