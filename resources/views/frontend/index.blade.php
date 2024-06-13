<x-app-web-layout>
    <x-slot:title>
        Contacts Management App
        </x-slot>
        <div class="py-5">
            <div class="container">
                <div class="mb-3">
                    <!-- Image to display for 2 seconds -->
                    <img src="{{ asset('images/contact.png') }}" alt="Description of Image"
                        style="max-width: 30%; height: auto; margin-bottom: 20px; display: block; margin-left: auto; margin-right: auto;">

                    <!-- JavaScript for delay and redirection -->
                    <script>
                        // Delay function
                        function delayRedirect() {
                            setTimeout(function () {
                                window.location.href = "{{ url('groups') }}"; // Redirect to groups URL
                            }, 1000); // 2000 milliseconds = 2 seconds
                        }

                        // Call delay function when the page loads
                        document.addEventListener('DOMContentLoaded', function () {
                            delayRedirect(); // Start the delay on page load
                        });
                    </script>
                </div>
            </div>
        </div>
        <x-slot:scripts>
            <script>
                console.log('This is the script');
            </script>
            </x-slot>
</x-app-web-layout>
