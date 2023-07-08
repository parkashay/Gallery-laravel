<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<form action="/verify" method="post"
    style="
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    gap: 2rem;
    height: 50vh;
    margin-inline: 20vw;
    ">
    @csrf
    @error('key')
    <div style="color: red">{{ $message }}</div>
    @enderror
    <input name="key" type="text" placeholder="Enter Key Here">
    <input type="submit" value="Get Access">
</form>
