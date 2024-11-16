<?php 

namespace Secureid\Secureidsdk;

use Illuminate\Support\ServiceProvider;

class SecureIDSDKServiceProvider extends ServiceProvider
{
    public function register(){

        //Lier le SDK comme singleton
        $this->app->singleton('secureid', function () {
            return new SecureID();
        });
    }

    public function boot() {
        //publier les configurations
       
    }
   


}