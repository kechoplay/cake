<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CakePhp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><?=$this->Html->link(
                    'Home',
                    '/home'
                    ) ?></li>

                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>

                </li>
            </ul>
            <div class="nav navbar-nav">

            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><?= $this->Html->link(
                        'Login',
                        ['controller'=>'Users','action' =>'Login']
                    ) ?></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="">

