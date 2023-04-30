<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            \App\Repositories\Food\IFoodRepository::class,
            \App\Repositories\Food\FoodRepository::class,
        );
        $this->app->bind(
            \App\Repositories\RepositoryInterface::class
        );

        $this->app->bind(
            \App\Repositories\CartFood\ICartFoodRepository::class,
            \App\Repositories\CartFood\CartFoodRepository::class
        );
        $this->app->bind(
            \App\Repositories\Cart\ICartRepository::class,
            \App\Repositories\Cart\CartRepository::class
        );
        $this->app->bind(
            \App\Repositories\Combo\IComboRepository::class,
            \App\Repositories\Combo\ComboRepository::class
        );
        $this->app->bind(
            \App\Repositories\ComboFood\IComboFoodRepository::class,
            \App\Repositories\ComboFood\ComboFoodRepository::class
        );
        $this->app->bind(
            \App\Repositories\DonHang\IDonHangRepository::class,
            \App\Repositories\DonHang\DonHangRepository::class
        );
        $this->app->bind(
            \App\Repositories\InforShop\IInforShopRepository::class,
            \App\Repositories\InforShop\InforShopRepository::class
        );
        $this->app->bind(
            \App\Repositories\InforUser\IInforUserRepository::class,
            \App\Repositories\InforUser\InforUserRepository::class
        );
        $this->app->bind(
            \App\Repositories\ReviewFood\IReviewFoodRepository::class,
            \App\Repositories\ReviewFood\ReviewFoodRepository::class
        );
        $this->app->bind(
            \App\Repositories\Role\IRoleRepository::class,
            \App\Repositories\Role\RoleRepository::class
        );
        $this->app->bind(
            \App\Repositories\ShipperDonHangShop\IShipperDonHangShopRepository::class,
            \App\Repositories\ShipperDonHangShop\ShipperDonHangShopRepository::class
        );
        $this->app->bind(
            \App\Repositories\TrangThaiDonHang\ITrangThaiDonHangRepository::class,
            \App\Repositories\TrangThaiDonHang\TrangThaiDonHangRepository::class
        );
        $this->app->bind(
            \App\Repositories\Vouncher\IVouncherRepository::class,
            \App\Repositories\Vouncher\VouncherRepository::class
        );
        $this->app->bind(
            \App\Repositories\InforShipper\IInforShipperRepository::class,
            \App\Repositories\InforShipper\InforShipperRepository::class
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
