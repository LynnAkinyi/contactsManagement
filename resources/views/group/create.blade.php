<x-app-web-layout>

    <x-slot name="title">
        Add Contact
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Add Contact</h4>
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
                                🔖<label>Occupation</label>
                                <textarea name="occupation" class="form-control"
                                    rows="3">{{ old('occupation') }}</textarea>
                                @error('occupation') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                🔖<label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                🔖<label>Phone Number</label>
                                <input type="text" name="phone_number" class="form-control"
                                    value="{{ old('phone_number') }}">
                                @error('phone_number') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>
