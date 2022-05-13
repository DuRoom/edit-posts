<?php

/*
 * This file is part of duroom/edit-posts.
 *
 * Copyright (c) 2022 NKDuy
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace DuRoom\EditPostsButton;

use DuRoom\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    new Extend\Locales(__DIR__ . '/resources/locale'),
];
