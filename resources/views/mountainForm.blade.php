<h1>Hegy</h1>
<form action="submit" method = "post">
    {{csrf_field()}}
    <p>
        <label for="">Név</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        <label for="">Magasság</label>
        <input type="number" name="height" value="{{old('height')}}">
        @error("height")
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        <label for="">Hely</label>
        <input type="text" name="location" value="{{old('location')}}">
        @error('location')
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>