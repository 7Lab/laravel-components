@props([
    'size' => 'md',
    'src' => '',
    'initials' => '',
    'shape' => ''
])

<div>
    <span class="avatar avatar-{{ $size }} avatar-{{ $shape }}">
        @if (isset($src) && strlen($src) > 0)
            <span class="avatar__img"
                style="background-image: url({{$src}});"></span>
        @else
            <span class="avatar__initials">{{$initials}}</span>
        @endif
    </span>
</div>