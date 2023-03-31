<?php

use function Pest\Laravel\get;

it('has a homepage', function () {
	get(
		uri:route('homepage')
	)->assertOk()
	->assertSee('Laravel');
});
