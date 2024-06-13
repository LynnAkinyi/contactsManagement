<x-app-web-layout>

    <x-slot name="title">
        Groups
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Contacts</h4>
                        <a href="{{ url('groups/create')}}" class="btn btn-primary btn-sm">Add Contacts</a>
                    </div>
                    <div class="card-body">


                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Occupation</th>
                                    <th>Is_Active</th>
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
                                                                                            <td colspan="5" class="occupation-row">{{ $item->occupation }}</td>
                                                                                        </tr>
                                                                                        @php
                                                                                            $previousOccupation = $item->occupation;
                                                                                        @endphp
                                                            @endif

                                                            <tr>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->occupation }}</td>
                                                                <td>
                                                                    @if ($item->is_active)
                                                                        Activate
                                                                    @else
                                                                        In-Active
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <a href="{{ url('groups/' . $item->id . '/group') }}"
                                                                        class="btn btn-success btn-sm">View Group</a>
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
