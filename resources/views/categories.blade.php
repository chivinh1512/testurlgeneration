@php
$cate = App\Category::find(1);

echo url("/category/{$cate->name}");
@endphp