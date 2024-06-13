<x-app-web-layout>

    <x-slot name="title">
        Add Groups
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Add Groups</h4>
                        <a href="{{ url('groups')}}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('groups/create') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                🔖<label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                🔖<label>Description</label>
                                <textarea name="description" class="form-control"
                                    rows="3">{{ old('description') }}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-3">
                                🔖<label>Is_Active</label>
                                <input type="checkbox" name="is_active" {{ old('is_active') == true ? 'checked' : '' }}>
                                @error('is_active') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>