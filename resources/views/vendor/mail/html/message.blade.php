@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <style>
               #icon{
                  width: 32px;
               }
            </style>
            <p>Vind ons ook op sociale media</p>
            <a href="https://www.facebook.com/Prismacare-225274354778984/"><img id="icon" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-512.png" alt=""></a>
            <a href="https://www.instagram.com/prisma.care/"><img id="icon"src="https://cdn2.iconfinder.com/data/icons/instagram-new/512/instagram-round-3d-512.png" alt=""></a>
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
