<select class="p-2 w-full mt-3 rounded-s" value="{{old('question')}}" name="question">
    @foreach ($questions as $key => $val )
        @foreach ($questions[$key] as $question)
        @endforeach
        <option value="{{$key}}">{{ $question }}</option>
    @endforeach
</select>