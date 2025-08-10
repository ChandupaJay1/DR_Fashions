<?php

class PageController {

    public function home() {
        require __DIR__ . '/../../views/home.php';
    }

    public function about() {
        require __DIR__ . '/../../views/about.php';
    }

    public function contact() {
        require __DIR__ . '/../../views/contact.php';
    }

    public function blog() {
        require __DIR__ . '/../../views/blog.php';
    }

    public function portfolio() {
        require __DIR__ . '/../../views/portfolio.php';
    }

    public function service() {
        require __DIR__ . '/../../views/service.php';
    }

    public function carreres() {
        require __DIR__ . '/../../views/carreres.php';
    }

    public function element() {
        require __DIR__ . '/../../views/element.php';
    }
}
