<div
    class="min-h-screen bg-gray-100 bg-cover bg-no-repeat bg-blend-multiply relative"
    style="background-image: url('{{ asset('assets/images/bg_auth.jpg') }}');">
    <div
        class="bg-gradient-to-b from-[rgba(0,0,0,.85)] to-[rgba(0,0,0,.4)] w-full h-full absolute flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div>
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-center text-2xl font-bold py-4">Acesse a sua conta</h2>
            {{ $slot }}
        </div>
    </div>
</div>
