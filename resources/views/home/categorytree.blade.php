@foreach($children as $subcategory)
    <ul class="menu-large">
        @if(count($subcategory->children))
            <li style="">{{$subcategory->title}}</li>
            <ul class="list-group">
                @include('home.categorytree', ['children'=> $subcategory->children])
            </ul>
            <hr>
        @else
        <li><a href="{{route('categoryhaber', ['id' => $subcategory->id, 'slug'=> $subcategory->slug])}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
