<?php

/*
 * This file is part of the Laravel PDF VIEWER package.
 *
 * (c) Rahmani Saif El Moulouk <hire@saifelmoulouk.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rahmani\LaravelPdfViewer;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class LaravelPdfViewerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '../laraview' => public_path('/vendor/pdfviewer'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
