<meta name="csrf-token" content="{{ csrf_token() }}">
<form method="POST">
    @csrf
    <input type="text" name="title">
    <input type="text" name="body">
    <input type="text" name="image">
    <input type="submit" value="salvar">
</form>
