<x-app-layout>
    <x-slot name="header">
        Create
    </x-slot>
    <h1> Create </h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル"/>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="武器構成,想定値段,その他"></textarea>
        </div>
        <div class="wepon">
            <h2>Guns</h2>
            <select name="post[gun_id]">
                <option>---------------</option>
                @foreach($guns as $gun)
                <option value="{{ $gun->id }}">{{ $gun->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="image">
            <input type="file" name="post[image]" />
        <div class="tag">
            <h2>Tags</h2>
            <select name="post[tag_id]">
                <option>---------------</option>
                @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <button>
            <input type="submit" value="store"/>
        </button>
    </form>
</x-app-layout>        
