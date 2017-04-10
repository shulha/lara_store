@foreach(App\Categories::all() as $category)
    <p>
        <a href="/categories/{{$category->id}}">
            {{ $category->name }}
        </a>
    </p>
@endforeach