<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg row">

                <div class="p-6 text-gray-900 col-md-6">
                    <form action="{{route('category.update', $category)}}" method="POST" >
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Parent</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Default</option>
                                @foreach ($categories as $c)
                                    <option value="{{$c->id}}" @if ($category->parent_id == $c->id) selected @endif>{{$c->name}}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" name="name" value="{{$category->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
