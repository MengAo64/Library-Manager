

    <br/>
    <form method="/member/{{$member->edit}}" method="POST" action="{{ url('member')}}">
        method('put')
        @csrf
        Name : <input type="text" name="name" value="{{$member->name}}"><br/>
        Join date : <input type="date" name="join_date" value="{{$member->join_date}}">"><br/>

        <button type="submit">SIMPAN</button>
    </form>
    