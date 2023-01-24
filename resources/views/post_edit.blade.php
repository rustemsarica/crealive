<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg row">
                <div class="p-6 text-gray-900 col-md-4">
                    <form action="{{route('post.update', $post)}}" method="POST" >
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @if ($category->id == $post->category_id) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" name="name" value="{{$post->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="post" rows="3">{{$post->post}}</textarea>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
        </div>
    </div>
</x-app-layout>
