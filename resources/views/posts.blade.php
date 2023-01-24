<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
        <a href="{{route('post.create')}}" class="btn btn-primary">New Post</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg row">
                <div class="p-6 text-gray-900 col-md-8">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Header</th>
                            <th scope="col">Text</th>
                            <th scope="col">Category</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ( $posts as $post )
                                <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->name}}</td>
                                    <td>{{$post->post}}</td>
                                    <td>{{$post->category->name}}</td>
                                    <td>
                                        <a href="{{route('post.edit', $post)}}" class="btn btn-primary">Edit</a>
                                        <form action="{{route('post.destroy', $post)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
