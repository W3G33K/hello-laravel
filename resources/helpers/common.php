<?php

	use Illuminate\Support\Str;

	function render_time(): float {
		return round((microtime(true) - LARAVEL_START), 3);
	}

	function unslug(string $slug): string {
		return Str::of($slug)->slug(' ')->title();
	}
