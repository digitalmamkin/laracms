<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenerateMenus
{
    public function handle($request, Closure $next)
    {
        // Header Menu
        \Menu::make('header', function ($menu) {

            // Link1
            $menu->add('Origins', ['url'  => url('/').'/category/origins']);
            // Link2
            $menu->add('Characters', ['url'  => url('/').'/category/characters']);
            // Link3
            $menu->add('Artists', ['url'  => url('/').'/category/artists']);

            // Dropdown Links
            $menu->add('Friends', ['route'  => 'index'])->id('about1');
            // Adding sub items;
            $menu->add('Site1', ['parent' => 'about1', 'url' => 'https://site1.com']);
        });

        // Links Sidebar
            \Menu::make('link-exchange', function ($menu) {
           // Link 1
           $menu = $menu->add('Site2',    ['url'  => 'https://google.com']);
           $menu->link->attr(['class' => 'link-plain text-sm color-contrast-medium']);
           // Link 2
           $menu = $menu->add('Site3',    ['url'  => 'https://google.com']);
           $menu->link->attr(['class' => 'link-plain text-sm color-contrast-medium']);
        });

        // User Dropdown Navigation
        \Menu::make('user-dropdown', function ($menu) {

            // Dashboard
            $menu = $menu->add('Home',    ['url'  => url('/').'/home']);
            $menu->link->attr(['class' => 'dropdown__item']);
            // Profile
            $menu = $menu->add('Profile',    ['url'  => url('/').'/user/my']);
            $menu->link->attr(['class' => 'dropdown__item']);
            // Edit Profile
            $menu = $menu->add('Edit Profile',    ['url'  => url('/').'/user/edit']);
            $menu->link->attr(['class' => 'dropdown__item']);
            // Divider
            $menu->divide( ['class' => 'border-top border-contrast-lower margin-top-xs margin-bottom-xs'] );
        });

        // Footer Navigation
        \Menu::make('footer', function ($menu) {
            $menu->add('Home',     ['url'  => url('/').'/',  'class' => 'footer-v4__nav-item', 'id' => 'home']);
            $menu->add('Contact',     ['url'  => url('/page/contact').'/',  'class' => 'footer-v4__nav-item', 'id' => 'home']);
            $menu->add('Term',     ['url'  => url('/page/term').'/',  'class' => 'footer-v4__nav-item', 'id' => 'home']);
        });

        return $next($request);
    }
}
