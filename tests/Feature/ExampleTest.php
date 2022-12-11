<?php

use function Pest\Laravel\get;

it('will return welcome page', function () {
    get('/')
        ->assertSuccessful();
});
