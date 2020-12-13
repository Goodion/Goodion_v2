<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center w-auto px-4 py-2 text-white bg-forest rounded hover:bg-forest-dark']) }}>
    {{ $slot }}
</button>
