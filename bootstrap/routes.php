<?php

use App\v1_0\Controllers\IndexController;
use App\v1_0\Controllers\MemberController;
use Nen\Http\Request;
use Nen\Router\Group;
use Nen\Router\Route;
use Nen\Router\Routes;

return new Group(
    'api/1.0',
    new Routes(
        [
            new Route(IndexController::class, 'welcome', 'welcome', Request::METHOD_GET),
            new Group(
                'member',
                new Routes(
                    [
                        new Route(MemberController::class, 'create', null, Request::METHOD_POST),
                        new Routes(
                            [
                                new Route(MemberController::class, 'view', '([0-9]+)', Request::METHOD_GET),
                                new Group(
                                    '([0-9]+)',
                                    new Routes(
                                        [
                                            new Route(MemberController::class, 'update', null, Request::METHOD_PUT),
                                            new Route(MemberController::class, 'delete', null, Request::METHOD_DELETE),
                                        ]
                                    )
                                ),
                            ]
                        )
                    ]
                )
            ),
        ]
    )
);
