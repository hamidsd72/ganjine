{{--<div class="header-top2">--}}
{{--    <div class="container">--}}
{{--        <div class="{{app()->getLocale()=='en'?'float-left':'float-right'}}">--}}
{{--            <p class="mb-0">--}}
{{--                {{set_lang($setting,'shoar',app()->getLocale())}}--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="{{app()->getLocale()=='en'?'float-right':'float-left'}}">--}}
{{--            @if(!is_null(set_lang($contact_info,'phone1',app()->getLocale())))--}}
{{--                <a href="tel:{{str_replace(['-',' '],'',set_lang($contact_info,'phone1',app()->getLocale()))}}"--}}
{{--                   class="phn_btn2">{{__('text.header_up.call_us')}}--}}
{{--                    <span dir="ltr">--}}
{{--                        {{set_lang($contact_info,'phone1',app()->getLocale())}}--}}
{{--                    </span>--}}
{{--                </a>--}}
{{--            @endif--}}
{{--            <a href="{{route('user.contact.show')}}" class="req_call_btn2"> {{__('text.header_up.contact_us')}}</a>--}}
{{--            <ul class="header_social2">--}}
{{--                @if(!is_null($contact_info->facebook))--}}
{{--                    <li><a href="{{$contact_info->facebook}}"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                @endif--}}
{{--                @if(!is_null($contact_info->instagram))--}}
{{--                    <li><a href="{{$contact_info->instagram}}"><i class="fab fa-instagram"></i></a></li>--}}
{{--                @endif--}}
{{--                @if(!is_null($contact_info->telegram))--}}
{{--                    <li><a href="{{$contact_info->telegram}}"><i class="fab fa-telegram-plane"></i></a></li>--}}
{{--                @endif--}}
{{--                @if(!is_null($contact_info->whatsapp))--}}
{{--                    <li><a href="{{$contact_info->whatsapp}}"><i class="fab fa-whatsapp"></i></a></li>--}}
{{--                @endif--}}
{{--                @if(!is_null($contact_info->linkdin))--}}
{{--                    <li><a href="{{$contact_info->linkdin}}"><i class="fab fa-linkedin"></i></a></li>--}}
{{--                @endif--}}
{{--                @if(!is_null($contact_info->aparat))--}}
{{--                    <li><a href="{{$contact_info->aparat}}"><img src="{{asset('user/pic/aparat1.png')}}"--}}
{{--                                                                 alt="آپارات حافظ"></a></li>--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="container header_hr">--}}
{{--    <hr/>--}}
{{--</div>--}}
<header id="header">
    <nav id="nav_id" class="nav_id2 navbar navbar-expand-lg navbar-light">
        <div class="container  d-block">
            <a class="navbar-brand" href="{{route('user.index')}}">
                <img src="{{url($setting->logo)}}" alt="{{set_lang($setting,'title',app()->getLocale())}}">
            </a>
            <button id="btn_mobile_menu" class="navbar-toggler navbar-toggler2 collapsed  position-relative z-index-9" type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon_menu_mobile icon_menu_mobile2 fas fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-nav2 {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
                    <li class="nav-item mt-2px">
                        <a class="nav-link" href="{{route('user.index')}}">{{__('text.header_down.home')}} <span
                                    class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="#"> خدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{route('user.faq.show')}}"> سوالات متداول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{route('user.blog.index','all')}}"> وبلاگ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{route('user.about.show')}}">درباره حافظ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">آموزش</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{route('user.employment.show')}}">فرصت های شغلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{route('user.contact.show')}}">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">باشگاه مشتریان</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link btn_default1" id="navbarDropdown"
                           role="button"
                           data-toggle="dropdown" data-behavior="hover" aria-haspopup="true" aria-expanded="false">
                            معاملات آنلاین
                        </a>
                        <div class="dropdown-menu about_drop" aria-labelledby="navbarDropdown">
                            <ul>
                                    <li class="sub_hover">
                                        <a href="https://online.hafezbroker.ir" target="_blank" class="dropdown-item drop_sub {{app()->getLocale()=='fa'?'text-right':'text-left'}}">
                                            معاملات بورس اوراق
                                        </a>
                                    </li>
                                    <li class="sub_hover">
                                        <a href="https://hafez.ephoenix.ir/" target="_blank" class="dropdown-item drop_sub {{app()->getLocale()=='fa'?'text-right':'text-left'}}">
                                            معاملات مشتقه اوراق
                                        </a>
                                    </li>
                                    <li class="sub_hover">
                                        <a href="https://hafez.exphoenixfuture.ir/" target="_blank" class="dropdown-item drop_sub {{app()->getLocale()=='fa'?'text-right':'text-left'}}">
                                            معاملات مشتقه کالایی
                                        </a>
                                    </li>
                                    <li class="sub_hover">
                                        <a href="https://c.hafezbroker.ir/" target="_blank" class="dropdown-item drop_sub {{app()->getLocale()=='fa'?'text-right':'text-left'}}">
                                            پنل اینترنتی آفلاین
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                {{--                menu mobile--}}
                <ul id="menu-main-menu" class="resmenu resmenu2 menu_mobile">
                    <li id="menu-item-1789"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1789">
                        <a href="{{route('user.index')}}">{{__('text.header_down.home')}}</a>
                    </li>
                    <li id="menu-item-1790"
                        class="menu-item menu-item-type-post_type menu-item-object-custom_built menu-item-has-children menu-item-1790">
                        <a href="{{route('user.product.index','all')}}">{{__('text.header_down.product')}}</a>
                        <ul class="sub-menu">
                            @foreach($product_cat as $key=>$cat)
                                @if($cat->id==1)
                                    <?php
                                    $product_child = 'products_g';
                                    $p_type = $type_g;
                                    $p_category = $category_g;
                                    ?>
                                @else
                                    <?php
                                    $product_child = 'products_s';
                                    $p_type = $type_s;
                                    $p_category = $category_s;
                                    ?>
                                @endif
                                <li id="menu-item-{{$cat->id}}"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-{{$cat->id}}">
                                    <a href="{{route('user.product.index',$cat->id)}}"> {{set_lang($cat,'name',app()->getLocale())}}</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-{{$cat->id+1000}}"
                                            class="menu-item menu-item-type-custom menu-item-object-custom {{$p_type && count($p_type)?'menu-item-has-children':''}} menu-item-{{$cat->id+1000}}">
                                            <a>{{__('text.product.type_product')}}</a>
                                            {{--                                            <span class="sub-arrow">+</span><span class="sub-arrow">+</span>--}}
                                            <ul class="sub-menu">
                                                @foreach($p_type as $type)
                                                    <li id="menu-item-{{$type->id}}"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom {{$type->children && count($type->children)?'menu-item-has-children':''}} menu-item-{{$type->id}}">
                                                        <a href="{{route('user.product.index',[$cat->id,'type2'=>$type->id])}}"> {{set_lang($type,'name',app()->getLocale())}}</a>
                                                        {{--                                                    <span class="sub-arrow">+</span>--}}
                                                        {{--                                                    <span class="sub-arrow">+</span>--}}
                                                        @if($type->children && count($type->children))
                                                            <ul class="sub-menu">
                                                                @foreach($type->children as $child)
                                                                    @if($child->$product_child && count($child->$product_child))
                                                                        <li id="menu-item-{{$child->id}}"
                                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-{{$child->id}}">
                                                                            <a href="{{route('user.product.index',[$cat->id,'type2'=>$child->id])}}">{{set_lang($child,'name',app()->getLocale())}}</a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li id="menu-item-{{$cat->id+1000}}"
                                            class="menu-item menu-item-type-custom menu-item-object-custom {{$p_category && count($p_category)?'menu-item-has-children':''}} menu-item-{{$cat->id+1000}}">
                                            <a>{{__('text.product.cat_product')}}</a>
                                            {{--                                            <span class="sub-arrow">+</span><span class="sub-arrow">+</span>--}}
                                            <ul class="sub-menu">
                                                @foreach($p_category as $category)
                                                    <li id="menu-item-{{$category->id}}"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom {{$category->children && count($category->children)?'menu-item-has-children':''}} menu-item-{{$category->id}}">
                                                        <a href="{{route('user.product.index',[$cat->id,'cat2'=>$category->id])}}"> {{set_lang($category,'name',app()->getLocale())}}</a>
                                                        {{--                                                    <span class="sub-arrow">+</span>--}}
                                                        {{--                                                    <span class="sub-arrow">+</span>--}}
                                                        @if($category->children && count($category->children))
                                                            <ul class="sub-menu">
                                                                @foreach($category->children as $child_cat)
                                                                    @if($child_cat->$product_child && count($child_cat->$product_child))
                                                                        <li id="menu-item-{{$child_cat->id}}"
                                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-{{$child_cat->id}}">
                                                                            <a href="{{route('user.product.index',[$child_cat->id,'cat2'=>$child_cat->id])}}">{{set_lang($child_cat,'name',app()->getLocale())}}</a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li id="menu-item-{{$cat->id+2000}}"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-{{$cat->id+2000}}">
                                            <a href="{{route('user.product.brands',$cat->id)}}">{{__('text.product.brand_product')}}</a>
                                        </li>
                                        <li id="menu-item-{{$cat->id+3000}}"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-{{$cat->id+3000}}">
                                            <a href="{{route('user.product.index',[$cat->id,'sort2'=>'new'])}}">{{__('text.product.name_product')}}</a>
                                        </li>
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li id="menu-item-1791"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1791">
                        <a href="{{route('user.medical.advice')}}">{{__('text.header_down.tosieh')}}</a>
                    </li>
                    {{--                    <li id="menu-item-1792"--}}
                    {{--                        class="menu-item menu-item-type-post_type menu-item-object-custom_built menu-item-has-children menu-item-1792">--}}
                    {{--                        <a href="{{route('user.blog.index','all')}}">{{__('text.header_down.blog')}}</a>--}}
                    {{--                        <ul class="sub-menu">--}}
                    {{--                            <li id="menu-item-1793"--}}
                    {{--                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1793">--}}
                    {{--                                <a href="{{route('user.blog.index','news')}}"> {{__('text.header_down.news')}}</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li id="menu-item-1793"--}}
                    {{--                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1793">--}}
                    {{--                                <a href="{{route('user.blog.index','article')}}"> {{__('text.header_down.article')}}</a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    <li id="menu-item-1792"
                        class="menu-item menu-item-type-post_type menu-item-object-custom_built menu-item-1792">
                        <a href="{{route('user.blog.index','all')}}">{{__('text.header_down.blog')}}</a>
                    </li>
                    <li id="menu-item-1793"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1793">
                        <a href="{{route('user.contact.show')}}">{{__('text.header_down.contact_us')}}</a>
                    </li>
                    {{--                    <li id="menu-item-1794"--}}
                    {{--                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1794">--}}
                    {{--                        <a href="{{route('user.about.show')}}">{{__('text.header_down.about_us')}}</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li id="menu-item-1792"--}}
                    {{--                        class="menu-item menu-item-type-post_type menu-item-object-custom_built menu-item-has-children menu-item-1792">--}}
                    {{--                        <a href="{{route('user.about.show')}}">{{__('text.header_down.about_us')}}</a>--}}
                    {{--                        <ul class="sub-menu">--}}
                    {{--                            <li id="menu-item-{{$cat->id+5000}}"--}}
                    {{--                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-{{$cat->id+1000}}">--}}
                    {{--                                <a>{{__('text.header_down.menu_1')}}</a>--}}
                    {{--                                <ul class="sub-menu">--}}
                    {{--                                    @foreach($menu_1 as $item_1)--}}
                    {{--                                        <li id="menu-item-{{$item_1->id}}"--}}
                    {{--                                            class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-{{$item_1->id}}">--}}
                    {{--                                            <a href="{{route('user.page.show',app()->getLocale()=='fa'?$item_1->slug:$item_1->slug_en)}}"> {{set_lang($item_1,'name',app()->getLocale())}}</a>--}}
                    {{--                                        </li>--}}
                    {{--                                    @endforeach--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li id="menu-item-{{$cat->id+6000}}"--}}
                    {{--                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-{{$cat->id+1000}}">--}}
                    {{--                                <a>{{__('text.header_down.menu_2')}}</a>--}}
                    {{--                                <ul class="sub-menu">--}}
                    {{--                                    @foreach($menu_2 as $item_2)--}}
                    {{--                                        <li id="menu-item-{{$item_2->id}}"--}}
                    {{--                                            class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-{{$item_2->id}}">--}}
                    {{--                                            <a href="{{route('user.page.show',app()->getLocale()=='fa'?$item_2->slug:$item_2->slug_en)}}"> {{set_lang($item_2,'name',app()->getLocale())}}</a>--}}
                    {{--                                        </li>--}}
                    {{--                                    @endforeach--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}

                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    @if(app()->getLocale()=='fa')
                        <li id="menu-item-1793"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1793">
                            <a href="{{route('user.employment.show')}}">{{__('text.header_down.employment')}}</a>
                        </li>
                    @endif
                    <li id="menu-item-1795"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1795 dropdown-search">
                        <form class="form-inline my-2 my-lg-0" action="{{route('user.search')}}" method="get">
                            <input class="form-control mr-sm-2" type="search" name="search"
                                   placeholder="{{__('text.header_down.search')}}"
                                   aria-label="{{__('text.header_down.search')}}" required
                                   oninvalid="this.setCustomValidity('دنبال چه میگردید؟؟؟')"
                                   oninput="setCustomValidity('')">
                            <button class="btn btn-not my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="banner_header"
         style="background:
         @if(app()->getLocale()=='fa')
                 url('{{url($setting->header_pic_fa)}}')
         @else
                 url('{{url($setting->header_pic_en)}}')
         @endif
                 ">
    <div class="container">
        @if($title)
            <div class="banner_content">
                <h3 class="text-center">{{$title}}</h3>
            </div>
        @endif
    </div>
</section>
{{--address--}}
<section class="banner_link">
    <div class="container">
        <div class="banner_link_inner">
            <a class="active" href="{{route('user.index')}}">{{__('text.page_name.home')}}</a>
            @if(app()->getLocale()=='fa')
                <i class="fas fa-angle-double-left"></i>
            @else
                <i class="fas fa-angle-double-right"></i>
            @endif
            @if(\Request::route()->getName()=='user.blog.show')
                <a class="active" href="{{route('user.blog.index','all')}}">{{__('text.page_name.blog')}}</a>
                @if(app()->getLocale()=='fa')
                    <i class="fas fa-angle-double-left"></i>
                @else
                    <i class="fas fa-angle-double-right"></i>
                @endif
            @endif
            @if(\Request::route()->getName()=='user.product.show')
                <a class="active" href="{{route('user.product.index','all')}}">{{__('text.page_name.product')}}</a>
                @if(app()->getLocale()=='fa')
                    <i class="fas fa-angle-double-left"></i>
                @else
                    <i class="fas fa-angle-double-right"></i>
                @endif
            @endif
            <a>{{$title}}</a>
        </div>
    </div>
</section>
