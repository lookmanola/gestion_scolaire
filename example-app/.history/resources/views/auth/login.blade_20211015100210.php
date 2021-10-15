<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
           
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
di
        </form>
    </x-auth-card>
</x-guest-layout>
