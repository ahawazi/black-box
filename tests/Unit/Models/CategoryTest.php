<?php

use App\Models\Category;

it('has attributes', function () {
    expect(Category::factory()->make())
        ->title->not->toBeNull();
});
