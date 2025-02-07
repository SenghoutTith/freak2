<h1>welcome to blog page hehehe, plz work ;(</h1>

<form action="blog" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">

    <!-- Hidden input ensures "false" is sent if the checkbox is unchecked -->
    <input type="hidden" name="is_active" value="0">
    <input type="checkbox" name="is_active" value="1"> Is Active

    <button type="submit">Submit</button>
</form>

 {{-- show existing blog --}}
<div style="padding: 20px;">
    @foreach($blogs as $blog)
        <h2>{{ $blog->title }}</h2>
        <ul>
            <li>{{ $blog->description }}</li>
            <li>Status: <span style="color: {{ $blog->is_active ? 'green' : 'red' }}">{{ $blog->is_active ? 'Active' : 'Inactive' }}</span></li>
        </ul>
    @endforeach
</div>
