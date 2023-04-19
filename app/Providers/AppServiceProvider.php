<?php

namespace App\Providers;

use App\Activity;
use App\Procomment;
use App\Comment;
use App\Models\Meta;
use App\Contact;
use App\Menu;
use App\Models\ContactInfo;
use App\MessageSend;
use App\Employment;
use App\Models\Blog;
use App\Product;
use App\ProductCategory;
use App\Models\ProductType;
use App\Models\ProductCat;
use App\ArticleCategory;
use App\BroadcastCategory;
use App\Colleague;
use App\User;
use App\Sms;
use App\About;
use App\Hbd;
use App\UserScore;
use App\Slider;
use App\Setting;
use App\NewsCategory;
use App\Basketclub;
use Carbon\Carbon;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    
    public $url = '';

    public function boot(Request $request)
    {

        $this->url = $request->fullUrl();


        ini_set('memory_limit', '512M');
        ini_set('max_execution_time', '300');


        Carbon::setLocale('fa');
        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });

        view()->composer('layouts.admin', function ($view) {
            $view
                ->with('activities', Activity::orderBy('id', 'DESC')->take(4)->get())
                ->with('pending', User::where('status', 4)->get())
                ->with('alarm', User::where('alarm', 5)->get())
                ->with('contact', Contact::where('see', 0)->get())
                ->with('employment', Employment::where('see', 0)->get())
                ->with('comment_product', Comment::where('type','product')->where('reply_id',0)->where('see', 0)->get())
                ->with('comment_blog', Comment::where('type','blog')->where('reply_id',0)->where('see', 0)->get())
                ->with('setting', Setting::find(1))
                ->with('clubBasketC', Basketclub::where(['status' => 4, 'seen_id' => 0])->count());
        });
        view()->composer('layouts.auth', function ($view) {
            $view->with('setting', Setting::find(1));
        });

        view()->composer('layouts.front.header_master', function ($view) {
            $view->with('setting', Setting::find(1));
            $view->with('navbarItems', Navbar::where('parrent_id', null)->where('status','active')->orderBy('sort')->get());
        });

    }

    public function register()
    {
        //
    }
}
