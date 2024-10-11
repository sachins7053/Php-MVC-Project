<?php

class GoogleSocialiteController {
    public function go_back() {
        View::render('go_back', ['message' => 'Redirecting to the previous page...']);
    }
}
