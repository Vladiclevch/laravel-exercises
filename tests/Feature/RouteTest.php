<?php

it('The About page test returns a 200 response code', function () {
    $response = $this->get('/about');

    $response->assertStatus(200);
});
