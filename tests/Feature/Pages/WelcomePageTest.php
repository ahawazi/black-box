<?php

use App\Models\Category;
use App\Models\Product;

use function Pest\Laravel\get;

beforeEach(function () {
    $this->category = Category::factory()->create();
    $this->Product = Product::factory()->create();
});

it('see category name', function () {
    get(route('home'))
        ->assertSee($this->category->title);

    $this->withoutExceptionHandling();
});

it('see product', function () {
    get(route('home'))
        ->assertSee($this->Product->title)
        ->assertSee($this->Product->price);

    $this->withoutExceptionHandling();
});
