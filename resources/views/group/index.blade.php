<x-app-web-layout>

    <x-slot name="title">
        Groups
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Groups</h4>
                        <a href="{{ url('groups/create')}}" class="btn btn-primary btn-sm">Add Group</a>
                    </div>
                    <div class="card-body">


                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Is_Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($groups as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            @if ($item->is_active)
                                                Activate
                                            @else
                                                In-Active
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('groups/' . $item->id . '/edit') }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{url('groups/' . $item->id . '/delete') }}"
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
