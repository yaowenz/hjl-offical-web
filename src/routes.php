<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    //$this->logger->info("Slim-Skeleton '/' route");

	if(is_mobile()) {
		return $response->withHeader('Location',  'http://z.maka.im/k/02B5R8BA');
	}
	
    // Render index view
    return $this->view->render($response, 'index.twig.php', $args);
});
