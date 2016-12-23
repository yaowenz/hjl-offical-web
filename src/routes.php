<?php
// Routes

use App\Libs\Homecare\OfficialApi;
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
    $api = new OfficialPageApi;
    $divisions = $api->getDivisions('310100');
    return $this->view->render($response, 'order.twig.php', compact('divisions'));
})->setName('order');

$app->get('/branches', function ($request, $response, $args) {
    // Render branches view
    return $this->view->render($response, 'branches.twig.php', $args);
})->setName('branches');

$app->get('/about', function ($request, $response, $args) {
    // Render about view
    return $this->view->render($response, 'about.twig.php', $args);
})->setName('about');

$app->get('/captcha', function ($request, $response, $args) {
    $builder = new Gregwar\Captcha\CaptchaBuilder;
    $builder->build();
    $_SESSION['submit-branch-captcha'] = $builder->getPhrase();
    return $response->withHeader('Content-Type', 'image/jpeg')->write($builder->get());
})->setName('captcha');

$app->get('/m/branches', function ($request, $response, $args) {
    return $this->view->render($response, 'm/branches.twig.php', $args);
})->setName('m.branches');

$app->group('/api', function () {
    $this->get('/branches', function ($request, $response, $args) {
        $divisionId = (string)$request->getQueryParam('division_id', '');
        $api = new OfficialPageApi;
        $branches = $api->getBranchList($divisionId);
        return $response->withJson($branches);
    })->setName('api.branches');

    $this->post('/branches', function ($request, $response, $args) {
        $input = $request->getParams();
        $input = is_array($input) ? $input : [];
        if (isset($input['captcha']) &&
            isset($_SESSION['submit-branch-captcha']) &&
            $input['captcha'] == $_SESSION['submit-branch-captcha']
        ) {
            unset($_SESSION['submit-branch-captcha']);
            $api = new OfficialApi;
            $data = $api->newBranch($input);
        } else {
            $data = ['err' => 'captcha', 'msg' => '验证码错误'];
        }
        return $response->withJson($data);
    })->setName('api.branches');
});


