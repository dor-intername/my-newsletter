<x-app>

    <x-header>
        <x-navigation/>
    </x-header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-form method="POST" action="{{route('login')}}">
                    <div class="py-20 h-screen">
                        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
                            <div class="md:flex">
                                <div class="w-full p-3 px-6 py-10">
                                    {{--                                    <div class="text-center">--}}
                                    {{--                                        <span class="text-xl text-gray-700">Registration Form</span>--}}
                                    {{--                                    </div>--}}
                                    <x-form-input  required="true" name="email" type="email" label="Email"/>
                                    <x-form-input  required="true" name="password" type="password" label="Password"/>

                                    <div class="mt-4">
                                        <button class="h-12 w-full bg-red-600 text-white rounded hover:bg-red-700">Click
                                            to proceed <i class="fa fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
</x-app>
