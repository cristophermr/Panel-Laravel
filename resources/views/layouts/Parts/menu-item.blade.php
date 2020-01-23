@if ($item['submenu'] == [])
<li class="nav-main-item">
    <a class="nav-main-link{{ request()->is($item['slug']) ? ' active' : '' }}" href="{{ route($item['route']) }}">
        <i class="nav-main-link-icon {{$item['icon']}}"> </i>
        <span class="nav-main-link-name"> {{ $item['name'] }}</span>
    </a>
</li>
@else
<li class="nav-main-item{{ request()->is($item['slug'].'/*') ? ' open' : '' }}">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
        <i class="nav-main-link-icon {{$item['icon']}}"></i>
        <span class="nav-main-link-name">{{ $item['name'] }}</span>
    </a>
    <ul class="nav-main-submenu">
        @foreach ($item['submenu'] as $submenu)
            @if ($submenu['submenu'] == [])
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is($submenu['slug']) ? ' active' : '' }}" href="{{ route($submenu['route']) }}">
                <span class="nav-main-link-name">{{ $submenu['name'] }}</span>
            </a>
        </li>
            @else
                @include('layouts.Parts.menu-item', [ 'item' => $submenu ])
            @endif
        @endforeach
    </ul>
</li>
@endif
