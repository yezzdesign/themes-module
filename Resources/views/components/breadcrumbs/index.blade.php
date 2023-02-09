<div class="bg-main_brand/30 border-main_brand/40 border rounded-sm uppercase text-sm">
    <div class="flex text-main_font/80 divide-x-2 divide-main_brand/40 p-2">
        @foreach($data['items'] as $items=>$item)

            @if($loop->first)
                <x-themes::breadcrumbs.item.main item-class="p-2" name="{{ $item['name'] }}" route="{{ route($item['route']) }}"/>
            @else
                <x-themes::breadcrumbs.item item-class="p-2" name="{{ $item['name'] }}" route="{{ route($item['route']) }}"/>
            @endif

        @endforeach
    </div>
</div>
