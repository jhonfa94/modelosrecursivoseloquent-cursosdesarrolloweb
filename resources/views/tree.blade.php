<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tree</title>
</head>

<body>

    <div style="background-color:crimson;color:whitesmoke;border:1px solid #333; width:800px; font-size:24px;">
        @foreach ($categoryTree as $category)
            {{-- {{ $category->title }} {{ $category->level }} --}}
            <x-category :category="$category"/>
        @endforeach
    </div>

</body>

</html>


