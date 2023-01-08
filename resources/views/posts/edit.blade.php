<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <h1> Edit </h1>
    <form action="/posts/{{ $posts->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル" value="{{ $posts->title }}"/>
            <p class="errors">{{ $errors->first('post.title') }}</p>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="武器構成,想定値段,その他" >{{ $posts->body }}</textarea>
            <p class="errors">{{ $errors->first('post.body') }}</p>
        </div>
        <div class="wepon">
            <h2>Guns</h2>
            <select name="post[gun_id]">
                <option value="{{ $posts->gun_id}}">{{ $posts->gun->name }}</option>
                <option></option>
                @foreach($guns as $gun)
                <option value="{{ $gun->id }}">{{ $gun->name }}</option>
                @endforeach
            </select>
            <p class="errors">{{ $errors->first('post.gun_id') }}</p>
        </div>
        <div class="image">
            <input type="file" name="image" class="form-control"/>
            <p class="errors">{{ $errors->first('image') }}</p>
        </div>
        <div class="tag">
            <h2>Tags</h2>
            <select name="post[tag_id]">
                <option value="{{ $posts->tag_id }}">{{ $posts->tag->name }}</option>
                <option></option>
                @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            <p class="errors">{{ $errors->first('post.tag_id') }}</p>
        </div>
            <input type="submit" value="更新"/>
    </form>
</x-app-layout>