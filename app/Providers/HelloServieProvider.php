<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Validators\HelloValidator;

class HelloServieProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){
        //
        $validator = $this->app['validator'];
        $validator->resolver(
            //引数に関数
            function($translator, $data, $rules, $messages){
                return new HelloValidator($translator, $data, $rules, $messages);
            }
        );
    }
}
