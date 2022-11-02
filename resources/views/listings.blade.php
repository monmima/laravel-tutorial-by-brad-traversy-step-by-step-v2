{{-- php syntax --}}

{{-- <h1>=== the PHP way ===</h1>
<h2><?= $heading ?></h2> --}}

{{-- <?php foreach ($listings as $listing): ?>
    <h3><?= $listing["title"] ?></h3>
    <p><?= $listing["description"] ?></p>
<?php endforeach; ?> --}}

<!-- same, but with cleaner syntax -->

<h1>=== the Blade way ===</h1>
<h2>{{ $heading }}</h2>

@foreach ($listings as $listing)
    <h3>
        <a href="/listings/{{ $listing["id"] }}">{{ $listing["title"] }}</a>
    </h3>
    <p>{{ $listing["description"] }}</p>
@endforeach

{{-- php directive --}}

{{-- <hr>

<h1>=== php directive ===</h1>

@php
    $test = "abcdef"
@endphp

<h6>{{ $test }}</h6>

<h1>=== if and else directives ===</h1>
 
@if(count($listings) == 0)
    <h6>No listings found.</h6>
@else
    <h6>Some listings found.</h6>
@endif

<h1>=== unless directives ===</h1> --}}

{{-- unless is basically another way of writing if statements --}}

{{-- @unless(count($listings) == 0)
    <h6>Some listings found.</h6>
@else
    <h6>No listings found.</h6>
@endunless --}}