@props([
'label'=>'',
'type'=>'text',
'required'=>'false',
'name' => ''
])

<div class="mt-4 relative"><span
        @error($name)

        {{$attributes->merge(['class'=>"absolute p-1 bottom-14 ml-2 bg-white text-gray-400"])}}>
        @else
            {{$attributes->merge(['class'=>"absolute p-1 bottom-8 ml-2 bg-white text-gray-400"])}}>

            @enderror
            {{$label}}
    </span>
    <input type="{{$type}}" required="{{$required}}" name="{{$name}}"
        @error($name)
        {{$attributes->merge(['class'=> 'border-red-500 h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600'])}}>
    <div style="top: -25px;bottom: 0" class="absolute right-0 pr-3 flex items-center pointer-events-none">
        <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                  clip-rule="evenodd"/>
        </svg>
    </div>
    @else
        {{$attributes->merge(['class'=> 'h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600'])}}>

        @enderror

        @error($name)
        <span class="text-sm text-red-600" role="alert">
      <strong>{{ $message }}</strong>
       </span>
        @enderror
</div>
