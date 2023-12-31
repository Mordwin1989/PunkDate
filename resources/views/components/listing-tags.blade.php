@props(['tagsCsv'])
@php
$tags = explode(',', $tagsCsv);
@endphp

<!-- TAGS -->
<ul class="flex">
    @foreach($tags as $tag)
    <li class="bg-black text-white rounded-xl py-1 px-3 mr-2">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach()
</ul>