<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex justify-center w-auto px-4 py-2 text-white bg-sand rounded hover:bg-sand-dark']) }}>
    {{ $slot }}
</button>
