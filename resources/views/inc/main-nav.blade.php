<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo asset('dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Dobrodošli</a>
            </div>
        </div>

        @include ('inc.nav')
    </section>
</aside>