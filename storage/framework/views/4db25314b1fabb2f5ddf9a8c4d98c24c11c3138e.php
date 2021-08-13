<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Acme</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item <?php echo e(Request::is('about') ? 'active' : ''); ?>">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item <?php echo e(Request::is('contact') ? 'active' : ''); ?>">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<?php /**PATH F:\Program Files\Ampps\www\basicwebsite\resources\views/inc/navbar.blade.php ENDPATH**/ ?>