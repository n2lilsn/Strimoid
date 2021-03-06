<?php namespace Strimoid\Providers;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @param ViewFactory $view
     */
    public function boot(ViewFactory $view)
    {
        $view->composer('global.master', 'Strimoid\Http\ViewComposers\MasterComposer');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
    }
}
