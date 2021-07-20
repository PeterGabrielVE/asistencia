<div>
    @foreach($groups as $gr)
    <li><input type="checkbox" name="list" id="nivel1-{{$gr->group}}"><label for="nivel1-{{$gr->group}}">{{ $gr->group }}</label>
    </li>
    @endforeach
</div>