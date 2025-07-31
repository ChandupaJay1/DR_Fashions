<?php

class PageController {
    public function home() {
        require_once __DIR__ . '/../../views/index.php';
    }

    public function about() {
        require_once __DIR__ . '/../../views/about.php';
    }

    public function blog() {
        require_once __DIR__ . '/../../views/blog.php';
    }

    public function contact() {
        require_once __DIR__ . '/../../views/contact.php';
    }

    public function element() {
        require_once __DIR__ . '/../../views/element.php';
    }

    public function portfolio() {
        require_once __DIR__ . '/../../views/portfolio.php';
    }

    public function service() {
        require_once __DIR__ . '/../../views/service.php';
    }
}
