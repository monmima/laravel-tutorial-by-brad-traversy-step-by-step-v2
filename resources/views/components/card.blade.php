{{-- $attributes->merge() means you use default classes and add whatever is passed on top of that --}}
<div {{ $attributes->merge(["bg-gray-50 border border-gray-200 rounded p-6"]) }}>
    {{ $slot }}
</div>