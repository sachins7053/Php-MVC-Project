<?php

// Function to get defined routes
use app\Controllers\FrontendController;
use app\Controllers\AuthController;
use app\Controllers\PageController;
use app\Controllers\ServiceController;
use app\Controllers\DashboardController;
use app\Controllers\EnquiryController;
use app\Middlewares\AuthMiddleware;

// Function to get defined routes
function getRoutes() {
    return [
        '' => [FrontendController::class, 'index', null],
        'page/{slug}' => [PageController::class, 'getpages', null],
        'enquiry' => [EnquiryController::class, 'submitEnquiry', null],
        'about' => [FrontendController::class, 'about', null],
        'service/{id}' => [ServiceController::class, 'show', null],
        'contact' => [FrontendController::class, 'contact', null],
        '404' => [FrontendController::class, 'notfound', null],
        'admin/login' => [AuthController::class, 'index',null],
        'admin/register' => [AuthController::class, 'register',null],
        'admin/logout' => [AuthController::class, 'logout',null],
        // Correct group structure
        'group' => [
            'middleware' => AuthMiddleware::class,
            'routes' => [
                'admin/dashboard' => [DashboardController::class, 'index', null],
                'admin/all-pages' => [pageController::class, 'Allpages', null],
                'admin/add-page' => [pageController::class, 'Addpage', null],
                'admin/edit-page/{id}' => [pageController::class, 'Editpage', null],
                'admin/remove-page/{id}' => [pageController::class, 'Deletepage', null],
                'admin/enquiries' => [EnquiryController::class, 'AllEnquiry', null],
                'service-detail/{id}' => [ServiceController::class, 'show', null],
            ],
        ],  
        // Add more routes as needed
    ];
}
