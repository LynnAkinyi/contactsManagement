<x-app-web-layout>

    <x-slot name="title">
        Contacts
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center; font-size: 1.5rem;">Contacts</h2>
                        <a href="{{ url('groups/create')}}" class="btn btn-success btn-sm">Add Contact</a>
                    </div>
                    <div class="card-body">


                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Occupation</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
$previousOccupation = null;
                                @endphp

                                @foreach ($groups->sortBy('occupation') as $item)
                                                            @if ($item->occupation !== $previousOccupation)
                                                                                        <tr>
                                                                                            <td colspan="5" class="occupation-row">
                                                                                                <h3 style="font-size: 1rem; margin-bottom: 10px;">{{ $item->occupation }}</h3>
                                                                                                <a href="{{ url('groups/' . $item->id . '/group') }}"
                                                                                                    class="btn btn-primary btn-sm">View Group</a>
                                                                                            </td>

                                                                                        </tr>
                                                                                        @php
        $previousOccupation = $item->occupation;
                                                                                        @endphp
                                                            @endif

                                                            <tr>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->occupation }}</td>
                                                                <td>{{ $item->email }}</td>
                                                                <td>{{ $item->phone_number }}</td>

                                                                <td>
                                                                    <a href="{{ url('groups/' . $item->id . '/edit') }}"
                                                                        class="btn btn-secondary btn-sm">Edit</a>
                                                                    <a href="{{ url('groups/' . $item->id . '/delete') }}"
                                                                        class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Are you sure')">Delete</a>
                                                                </td>
                                                            </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>
