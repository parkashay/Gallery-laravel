<link rel="stylesheet" href="{{ asset('css/form.css') }}">

<h1 style="text-align: center">Add New Image</h1>
@foreach ($errors->all() as $error)
    <div style="text-align: center; color:red">{{ $error }}</div>
@endforeach

<form action="/saveimage" method="POST" class="form" enctype="multipart/form-data">
    @csrf
    <input name="title" type="text" class="txt-input" placeholder="Title">

    <input name="description" type="text" class="txt-input" placeholder="Description">

    <div class="input-div">
        <input name="image" class="input" name="file" type="file" accept="image/*">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round"
            stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor"
            class="icon">
            <polyline points="16 16 12 12 8 16"></polyline>
            <line y2="21" x2="12" y1="12" x1="12"></line>
            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
            <polyline points="16 16 12 12 8 16"></polyline>
        </svg>
    </div>

    <input type="submit" value="Add" class="btn-submit">
</form>
