@props(['category'])

<div>
    {{ $category->title }} (ID: {{ $category->id }}) (Profundidad: {{ $category->level}})
    @foreach($category->children as $children)
        <div style="margin-left: 30px;">
            <x-category :category="$children" />
        </div>

    @endforeach
</div>

