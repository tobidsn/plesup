@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row push-down">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <h1 class="page-title">Recent tricks</h1>


            <ul class="nav nav-pills">
                <li class="active"><a href="http://laravel-tricks.com">Most recent</a></li><li><a href="http://laravel-tricks.com/popular">Most popular</a></li><li><a href="http://laravel-tricks.com/comments">Most commented</a></li>
            </ul>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="carbonads-container clearfix">

            </div>

            <p class="text-muted text-center">Ads cover the costs of maintaining Laravel-tricks</p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            @include("_particles.search")
        </div>
    </div>

    <div class="row js-trick-container">
        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="add-array-in-laravel">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/add-array-in-laravel">
                    Add Array in Laravel
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/Xubayer">Xubayer</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 1 day ago in <a href="http://laravel-tricks.com/categories/eloquent">Eloquent</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 39</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/add-array-in-laravel#disqus_thread" data-disqus-identifier="1331" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 1</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/50" class="tag" title="5.0">5.0</a>
                </div>
            </div>
        </div>

        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="httpwwwlaraphpcom">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/httpwwwlaraphpcom">
                    http://www.laraphp.com/
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/laraphp">laraphp</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 1 day ago in <a href="http://laravel-tricks.com/categories/routing">Routing</a>, <a href="http://laravel-tricks.com/categories/raw-queries">Raw queries</a>, <a href="http://laravel-tricks.com/categories/form">Form</a>, <a href="http://laravel-tricks.com/categories/session">Session</a>, <a href="http://laravel-tricks.com/categories/cache">Cache</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 45</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/httpwwwlaraphpcom#disqus_thread" data-disqus-identifier="1330" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 0</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/40" class="tag" title="4.0">4.0</a>
                    <a href="http://laravel-tricks.com/tags/testing" class="tag" title="testing">testing</a>
                    <a href="http://laravel-tricks.com/tags/macros" class="tag" title="macros">macros</a>
                    <a href="http://laravel-tricks.com/tags/view-data" class="tag" title="view data">view data</a>
                    <a href="http://laravel-tricks.com/tags/relationships" class="tag" title="relationships">relationships</a>
                </div>
            </div>
        </div>

        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="acl-using-middleware-and-role-id">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/acl-using-middleware-and-role-id">
                    ACL using Middleware and Role ID
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/laraveltricksmember">laraveltricksmember</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 1 week ago in <a href="http://laravel-tricks.com/categories/routing">Routing</a>, <a href="http://laravel-tricks.com/categories/performance">Performance</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 134</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/acl-using-middleware-and-role-id#disqus_thread" data-disqus-identifier="1329" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 0</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/50" class="tag" title="5.0">5.0</a>
                </div>
            </div>
        </div>

        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="laravel-dynamically-add-or-remove-input-fields-using-jquery">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/laravel-dynamically-add-or-remove-input-fields-using-jquery">
                    Laravel - Dynamically Add or Remove input fields using JQuery
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/chantouchsek">chantouchsek</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 1 week ago in <a href="http://laravel-tricks.com/categories/routing">Routing</a>, <a href="http://laravel-tricks.com/categories/raw-queries">Raw queries</a>, <a href="http://laravel-tricks.com/categories/form">Form</a>, <a href="http://laravel-tricks.com/categories/ioc">IoC</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 222</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/laravel-dynamically-add-or-remove-input-fields-using-jquery#disqus_thread" data-disqus-identifier="1328" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 2</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/patterns" class="tag" title="patterns">patterns</a>
                    <a href="http://laravel-tricks.com/tags/repository" class="tag" title="repository">repository</a>
                    <a href="http://laravel-tricks.com/tags/40" class="tag" title="4.0">4.0</a>
                    <a href="http://laravel-tricks.com/tags/database" class="tag" title="database">database</a>
                    <a href="http://laravel-tricks.com/tags/troubleshooting" class="tag" title="troubleshooting">troubleshooting</a>
                </div>
            </div>
        </div>

        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="hosting-laravel-on-linode-servers">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/hosting-laravel-on-linode-servers">
                    Hosting Laravel on Linode Servers
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/azazqadir">azazqadir</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 1 week ago in <a href="http://laravel-tricks.com/categories/configuration">Configuration</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 74</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/hosting-laravel-on-linode-servers#disqus_thread" data-disqus-identifier="1327" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 0</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/50" class="tag" title="5.0">5.0</a>
                </div>
            </div>
        </div>

        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="navigation-helper">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/navigation-helper">
                    Navigation Helper
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/alexmayo">alexmayo</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 3 weeks ago in <a href="http://laravel-tricks.com/categories/routing">Routing</a>, <a href="http://laravel-tricks.com/categories/requests-and-input">Requests and Input</a>, <a href="http://laravel-tricks.com/categories/views">Views</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 283</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/navigation-helper#disqus_thread" data-disqus-identifier="1326" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 0</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/templating" class="tag" title="templating">templating</a>
                </div>
            </div>
        </div>

        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="integration-of-cdn-with-laravel-app">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/integration-of-cdn-with-laravel-app">
                    Integration of CDN with Laravel App
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/azazqadir">azazqadir</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 3 weeks ago in <a href="http://laravel-tricks.com/categories/configuration">Configuration</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 209</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/integration-of-cdn-with-laravel-app#disqus_thread" data-disqus-identifier="1325" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 0</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/50" class="tag" title="5.0">5.0</a>
                </div>
            </div>
        </div>

        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="how-to-install-laravel-horizon-on-cloudways">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/how-to-install-laravel-horizon-on-cloudways">
                    How To Install Laravel Horizon On Cloudways
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/azazqadir">azazqadir</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 1 month ago in <a href="http://laravel-tricks.com/categories/queues">Queues</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 337</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/how-to-install-laravel-horizon-on-cloudways#disqus_thread" data-disqus-identifier="1324" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 0</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/50" class="tag" title="5.0">5.0</a>
                </div>
            </div>
        </div>

        <div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="trick-card-inner js-goto-trick" data-slug="route-api">
                <a class="trick-card-title" href="http://laravel-tricks.com/tricks/route-api">
                    Route API
                </a>
                <div class="trick-card-stats trick-card-by">by <b><a href="http://laravel-tricks.com/fauzzi">fauzzi</a></b></div>
                <div class="trick-card-stats clearfix">
                    <div class="trick-card-timeago">Submitted 1 month ago in <a href="http://laravel-tricks.com/categories/routing">Routing</a></div>
                    <div class="trick-card-stat-block"><span class="fa fa-eye"></span> 1579</div>
                    <div class="trick-card-stat-block text-center"><span class="fa fa-comment"></span> <a href="http://laravel-tricks.com/tricks/route-api#disqus_thread" data-disqus-identifier="1321" style="color: #777;">0</a></div>
                    <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> 1</div>
                </div>
                <div class="trick-card-tags clearfix">
                    <a href="http://laravel-tricks.com/tags/patterns" class="tag" title="patterns">patterns</a>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <ul class="pagination">
                <li class="disabled"><span>&laquo;</span></li><li class="active"><span>1</span></li><li><a href="http://laravel-tricks.com?page=2">2</a></li><li><a href="http://laravel-tricks.com?page=3">3</a></li><li><a href="http://laravel-tricks.com?page=4">4</a></li><li><a href="http://laravel-tricks.com?page=5">5</a></li><li><a href="http://laravel-tricks.com?page=6">6</a></li><li><a href="http://laravel-tricks.com?page=7">7</a></li><li><a href="http://laravel-tricks.com?page=8">8</a></li><li class="disabled"><span>...</span></li><li><a href="http://laravel-tricks.com?page=43">43</a></li><li><a href="http://laravel-tricks.com?page=44">44</a></li><li><a href="http://laravel-tricks.com?page=2" rel="next">&raquo;</a></li>   </ul>

        </div>
    </div>

</div>
@endsection