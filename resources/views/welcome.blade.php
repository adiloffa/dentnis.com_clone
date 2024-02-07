<ul>
    @foreach($menuTree as $menuItem)
        <li>
            {{ $menuItem->title }}
            <b>Slug: {{ $menuItem->slug }}</b>
            @if(count($menuItem->children) > 0)
                <ul>
                    @foreach($menuItem->children as $submenu)
                        <li>
                            {{ $submenu->title }}
                            <b>Slug: {{ $submenu->slug }}</b>
{{--                            @if(count($submenu->children) > 0)--}}
{{--                                @include('menu.submenu', ['submenus' => $submenu->children])--}}
{{--                            @endif--}}
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
