<x-admin.wrapper>
    <x-slot name="title">
        {{ __($crud->title) }}
    </x-slot>

    <div class="w-full py-2 overflow-hidden">
        {!! crud($crud) !!}
    </div>
</x-admin.wrapper>
