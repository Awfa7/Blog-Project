@props(['name', 'placeholder'])

<textarea class="border border-gray-200 p-2 rounded w-full text-sm focus:outline-none focus:ring" rows="5"
    type="text" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" required>{{ $slot ?? old($name) }}</textarea>
