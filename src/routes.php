<?php
// Routes

use App\Libs\Homecare\OfficialPageApi;

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    //$this->logger->info("Slim-Skeleton '/' route");

	if(is_mobile()) {
		return $response->withHeader('Location',  'http://z.maka.im/k/02B5R8BA');
	}	

    $api = new OfficialPageApi;
    $jobs = $api->getJobList();
    $workers = $api->getWorkerList();
    return $this->view->render($response, 'index.twig.php', compact('jobs', 'workers'));
})->setName('index');

$app->get('/order', function ($request, $response, $args) {
    // Render order view
    return $this->view->render($response, 'order.twig.php', $args);
})->setName('order');

$app->get('/branches', function ($request, $response, $args) {
    // Render branches view
    return $this->view->render($response, 'branches.twig.php', $args);
})->setName('branches');

$app->get('/about', function ($request, $response, $args) {
    // Render about view
    return $this->view->render($response, 'about.twig.php', $args);
})->setName('about');

