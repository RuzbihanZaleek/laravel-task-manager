<h2>Create Task</h2>
<form action="/tasks" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" />
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Save</button>
</form>