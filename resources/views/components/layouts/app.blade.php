<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title ?? 'Countries' }}</title>

</head>
<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <h1><a wire:navigate href="#" wire:click="navigateTo('home')">Countries</a></h1>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a wire:navigate href="#" wire:click="navigateTo('home')" @class(['current' =>request()->is('/')])>Home</a></li>
                    <li><a wire:navigate href="#" wire:click="navigateTo('country.list')" @class(['current' =>request()->is('/')])>App</a></li>
                    <li><a wire:navigate href="#" wire:click="navigateTo('pricing')" @class(['current' =>request()->is('/')])>Pricing</a></li>
                    <li><a wire:navigate href="#" wire:click="navigateTo('contact')" @class(['current' =>request()->is('/')])>Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    {{ $slot }}
</body>
</html>
