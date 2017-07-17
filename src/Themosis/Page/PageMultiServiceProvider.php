<?php

namespace Themosis\Page;

use Themosis\Foundation\ServiceProvider;

class PageMultiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('page_multi', function ($container) {

            $data = new PageData();

            $view = $container['view'];
            $view = $view->make('pages._themosisCorePage');

            return new PageMultiBuilder($data, $view, $container['validation'], $container['action']);
        });
    }
}
