<?php

use function Pest\Laravel\post;

it('fails if an invalid email', function () {
    post('/register', [
        'name' => 'Alex',
        'email' => 'bad'
    ])
        ->assertOnlyInvalid('email');
});
