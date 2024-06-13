<x-app-web-layout>

    <x-slot:title>
        Contacts Management App
        </x-slot>
        <div class="py-5">
            <div class="container">
                <div class="mb-3">
                    <a href="{{url('groups') }}" class="btn btn-primary btn-sm">View Contacts</a>
                    <img src="{{ asset('images/contact.png') }}" alt="Description of Image"
                        style="max-width: 30%; height: auto; margin-bottom: 20px; display: block; margin-left: auto; margin-right: auto;">

                </div>
            </div>
        </div>

        <x-slot:scripts>
            <script>
                console.log('This is the script');

            </script>
            </x-slot>
</x-app-web-layout>
