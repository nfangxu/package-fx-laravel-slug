<?php

namespace Fx\Slug\Services;

use Fx\Slug\Contacts\FxSlug;
use Fx\Translation\Contacts\Translate;

class FxSlugService implements FxSlug
{
	protected $translate;

	public function __construct(Translate $translate)
	{
		$this->translate = $translate;
	}

	public function slug(string $title, string $separator = "-"): string
	{
		$title = $this->translate->trans($title, 'en');

		return str_slug($title, $separator);
	}
}