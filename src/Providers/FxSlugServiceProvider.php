<?php

namespace Fx\Slug\Providers;

use Illuminate\Support\ServiceProvider;
use Fx\Slug\Contacts\FxSlug;
use Fx\Slug\Services\FxSlugService;

class FxSlugServiceProvider extends ServiceProvider
{
	public function boot()
	{
		// 
	}

	public function register()
	{
		$this->app->bind(FxSlug::class, FxSlugService::class);
	}
}