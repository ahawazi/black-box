<?php

use App\Models\Product;

it('has attributes', function () {
    expect(Product::factory()->make())
        ->title->not->toBeNull()
        ->price->not->toBeNull()
        ->category_id->not->toBeNull();
    $this->withexceptionHandling();
});
