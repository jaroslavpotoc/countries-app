<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <h1><a href="#" wire:click="navigateTo('home')">Countries</a></h1>
        </div>

        <!-- .navbar -->
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="#" wire:click="navigateTo('home')">Home</a></li>
                <li><a href="#" wire:click="navigateTo('country.list')">App</a></li>
                <li><a href="#" wire:click="navigateTo('pricing')">Pricing</a></li>
                <li><a href="#" wire:click="navigateTo('contact')">Contact</a></li>
            </ul>
        </nav>
        <!-- .navbar -->
    </div>
</header>
