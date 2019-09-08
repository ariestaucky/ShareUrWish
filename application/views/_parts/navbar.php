<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <div class="container">
        <a href="<?php echo site_url('/') ?>" class="navbar-brand">
        SU<span class="blue">Wish!</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavCollapse">
            <div class="container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </button>

        <div class="collapse navbar-collapse" id="myNavCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Setting</a>
                    
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li class="dropdown-item">
                            <a href="#">Theme</a>

                            <input class="checkbox" id="checkbox" name="theme" type="checkbox"/>
                            <label for="checkbox" class="checkbox-label float-right"></label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>