<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\GeneralSetting;
use App\Models\Category;
use App\Models\Brand;
use App\Models\SocialMedia;
use App\Models\Contact;
use App\Models\CreatePage;
use App\Models\OrderStatus;
use App\Models\EcomPixel;
use App\Models\Order;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $generalsetting = GeneralSetting::where('status',1)->limit(1)->first();
        view()->share('generalsetting',$generalsetting); 

        $sidecategories = Category::where('parent_id','=','0')->where('status',1)->select('id','name','slug','status','image')->get();
        view()->share('sidecategories',$sidecategories); 
        
        $menucategories = Category::where('status',1)->select('id','name','slug','status','image')->get();
        view()->share('menucategories',$menucategories); 

        $contact = Contact::where('status',1)->first();
        view()->share('contact',$contact); 

        $socialicons = SocialMedia::where('status',1)->get();
        view()->share('socialicons',$socialicons);

        $pages = CreatePage::where('status',1)->limit(3)->get();
        view()->share('pages',$pages);

        $pagesright = CreatePage::where('status',1)->skip(3)->limit(10)->get();
        view()->share('pagesright',$pagesright);

        $cmnmenu = CreatePage::where('status',1)->get();
        view()->share('cmnmenu',$cmnmenu);

        $brands = Brand::where('status',1)->get();
        view()->share('brands',$brands);
        
        $neworder = Order::where('order_status','1')->count();
        view()->share('neworder',$neworder); 
        
        $pendingorder = Order::where('order_status','1')->latest()->limit(9)->get();
        view()->share('pendingorder',$pendingorder); 
        
        $orderstatus = OrderStatus::get();
        view()->share('orderstatus',$orderstatus);
        
        $pixels = EcomPixel::where('status',1)->get();
        view()->share('pixels',$pixels);
    }
}
