<?php

it('can render', function () {
    $contents = $this->view('invoices', [
        //
    ]);

    $contents->assertSee('');
});
