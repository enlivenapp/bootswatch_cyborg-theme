<?php namespace Enlivenapp\BootswatchCyborgTheme;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;
/**
 * Class BootswatchFlatlyThemeRouteProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ExampleTheme
 */
class BootswatchCyborgThemeRouteProvider extends RouteServiceProvider
{
    /**
     * Map the routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->any(
            '/',
            function () {
                return view('theme::hello');
            }
        );
    }
}