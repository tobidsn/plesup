@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row push-down">
        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
            <h1 class="page-title">Tags</h1>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            @include("_particles.search")
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
            <div class="content-box">
                <ul class="nav nav-list">
                    <li>
                        <a href="http://laravel-tricks.com/categories/eloquent">
                            Eloquent
                            <span class="text-muted pull-right">105</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/routing">
                            Routing
                            <span class="text-muted pull-right">82</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/views">
                            Views
                            <span class="text-muted pull-right">62</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/configuration">
                            Configuration
                            <span class="text-muted pull-right">56</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/requests-and-input">
                            Requests and Input
                            <span class="text-muted pull-right">56</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/form">
                            Form
                            <span class="text-muted pull-right">34</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/debugging">
                            Debugging
                            <span class="text-muted pull-right">32</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/templating">
                            Templating
                            <span class="text-muted pull-right">32</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/performance">
                            Performance
                            <span class="text-muted pull-right">21</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/raw-queries">
                            Raw queries
                            <span class="text-muted pull-right">20</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/session">
                            Session
                            <span class="text-muted pull-right">18</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/packages">
                            Packages
                            <span class="text-muted pull-right">17</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/cache">
                            Cache
                            <span class="text-muted pull-right">14</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/pagination">
                            Pagination
                            <span class="text-muted pull-right">11</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/queues">
                            Queues
                            <span class="text-muted pull-right">9</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/facade">
                            Facade
                            <span class="text-muted pull-right">8</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/ioc">
                            IoC
                            <span class="text-muted pull-right">8</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/mail">
                            Mail
                            <span class="text-muted pull-right">6</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/composer">
                            Composer
                            <span class="text-muted pull-right">5</span>
                        </a>

                    </li>
                    <li>
                        <a href="http://laravel-tricks.com/categories/localization">
                            Localization
                            <span class="text-muted pull-right">4</span>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection