<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="/">
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">{{config('settings.site_name')}}</span>
                        </span>
        </a>
        <!-- END Logo -->

    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            @foreach ($menus as $key => $item)
                @if ($item['parent'] != 0)
                    @break
                @endif
                @include('layouts.Parts.menu-item', ['item' => $item])
            @endforeach
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
