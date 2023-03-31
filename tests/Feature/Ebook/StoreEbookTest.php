<?php

use App\Models\Ebook;

use function Pest\Laravel\post;

it('can store an Ebook', function () {
	post(
		uri: route('ebooks.store'),
		data: [
			'title' => $title = fake()->sentence,
			'description' => $description = fake()->paragraph(3),
			'amount' => $amount = fake()->randomFloat(2, 1, 100),
		]
	)->assertRedirect();

	expect(Ebook::first()->title)->toBe($title);
	expect(Ebook::first()->description)->toBe($description);
	expect(Ebook::first()->amount)->toBe($amount);
});
