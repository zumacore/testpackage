<?php

namespace Zuma\TestPackage\Providers;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind('testService', function () {
      return new class
      {
        public function sayHello()
        {
          return 'Hello from Test Service';
        }
      };
    });
  }

  public function boot()
  {
    $this->mergeConfigFrom(
      __DIR__.'/../../config/testpackage.php', 'testpackage'
    );
  }
}
