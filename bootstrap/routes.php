<?php

use App\Controllers\MemberController;
use Nen\Http\Request;
use Nen\Router\Group;
use Nen\Router\Route;

return new Group([
    new Route(MemberController::class, 'view', 'member/([0-9]+)', Request::METHOD_GET),
    new Route(MemberController::class, 'create', 'member', Request::METHOD_POST),
    new Route(MemberController::class, 'update/([0-9]+)', 'member', Request::METHOD_PUT),
    new Route(MemberController::class, 'delete/([0-9]+)', 'member', Request::METHOD_DELETE),
]);
