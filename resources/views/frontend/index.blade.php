<x-app-web-layout>

    <x-slot:title>
        Contacts Management App
        </x-slot>
        <div class="py-5">
            <div class="container">
                <h2>This is a contacts management app</h2>
                <div class="mb-3">
                    <a href="{{url('groups') }}" class="btn btn-primary btn-sm">View Contacts</a>
                </div>
            </div>
        </div>

        <x-slot:scripts>
            <script>
                console.log('This is the script');

            </script>
            </x-slot>
</x-app-web-layout>
