<?php

namespace Fx\Slug\Contacts;


interface FxSlug
{
	public function slug(string $title, string $separator = "-"): string;
}
