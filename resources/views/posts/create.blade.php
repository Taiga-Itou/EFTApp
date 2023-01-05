<x-app-layout>
    <x-slot name="header">
        Create
    <x-slot>
    <h1> Create </h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル"/>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="武器構成,想定値段,その他"/>
        </div>
        <div class="wepon">
            <h2>Guns</h2>
            <>
<x-app-layout>        
