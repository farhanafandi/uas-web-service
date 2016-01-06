<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new \Slim\Slim();

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */

// GET route
$app->get(
    '/',
    function () {
     
    }
);

// POST route
$app->post(
    '/laptop',
    function () {
        $laptoppart = new \Aksesoris\Laptop();
		$laptoppart->tambahLaptop($_POST['LaptopBrand'], $_POST['LaptopModel'], $_POST['LaptopReleaseYear']);
    }
);

// POST route
$app->post(
    '/parts',
    function () {
        $laptoppart = new \Aksesoris\Laptop();
		$laptoppart->tambahParts($_POST['PartLaptopId'], $_POST['PartCategory'], $_POST['PartNumber'], $_POST['PartDescription']);
    }
);

$app->post(
    '/category',
    function () {
        $laptoppart = new \Aksesoris\Laptop();
		$laptoppart->tambahCategory($_POST['PartCategoryName']);
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
