<div class="relative z-50 w-full h-24">
    <div
        class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

        <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
            <svg class="w-auto h-6 text-indigo-600 fill-current" viewBox="0 0 194 116"
                 xmlns="http://www.w3.org/2000/svg">
                <g fill-rule="evenodd">
                    <path
                        d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z"/>
                    <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z"/>
                </g>
            </svg>
            <span class="ml-3 text-xl text-gray-800">Landmark<span class="text-pink-500">.</span></span>
        </a>


        {{$slot}}
    </div>
</div>
