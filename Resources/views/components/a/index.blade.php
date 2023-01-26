<a {{ $attributes->merge([
	'href' => '#',
	'rel' => 'next',
	'target' => '_self',
	'referrerpolicy' => 'origin']) }}>{{ $slot }}</a>
