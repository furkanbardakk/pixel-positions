@props(["tag", "size" => "base"])

@php

    $clases = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";

    if ( $size == "base" ) {
        $clases .= " px-5 py-1 text-sm";
    };

    if ($size == "small") {
        $clases .= " px-3 py-1 text-2xs";
    }

@endphp

<a href="/tags/{{strtolower($tag->name)}}" class="{{$clases}}">{{$tag->name}}</a>
