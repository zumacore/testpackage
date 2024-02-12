<?php

use Zuma\TestPackage\Providers\TestPackageServiceProvider;

it('registers a test service', function () {
  $provider = new TestPackageServiceProvider($this->app);
  $provider->register();

  $testService = $this->app->make('testService');
  expect($testService->sayHello())->toBe('Hello from Test Service');
});

it('loads package configuration', function () {
  $provider = new TestPackageServiceProvider($this->app);
  $provider->boot();

  expect(config('testpackage'))->toBeArray();
});
