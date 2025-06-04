<h2>Create Task</h2>

@if ($errors -> any())
<div style="color: red;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/tasks" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" value="{{old('title')}}" />
    <br>
    <textarea name="description" placeholder="Description">{{old('description')}}</textarea>
    <br>
    <label>
        <input type="checkbox" name="is_completed" {{old('is_completed') ? 'checked' : ''}} />
        Completed
    </label>
    <br>
    <button type="submit">Save</button>
</form>