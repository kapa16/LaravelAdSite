@if (session('status'))
    <div {{ $attributes->merge(['class' => 'bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4']) }}>
        <span class="text-green-800"> {{ session('status') }} </span>
    </div>
@endif

@if (session('error'))
    <div {{ $attributes->merge(['class' => 'bg-red-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4']) }}>
        <span class="text-red-800"> {{ session('error') }} </span>
    </div>
@endif

@if (session('success'))
    <div {{ $attributes->merge(['class' => 'bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4']) }}>
        <span class="text-green-800"> {{ session('success') }} </span>
    </div>
@endif

@if (session('info'))
    <div {{ $attributes->merge(['class' => 'bg-blue-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4']) }}>
        <span class="text-blue-800"> {{ session('info') }} </span>
    </div>
@endif
