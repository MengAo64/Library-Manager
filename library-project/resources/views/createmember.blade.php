

    <br/>
    <form method="POST" action="{{ url('member')}}">
        @csrf
        Name : <input type="text" name="name"><br/>
        Join date : <input type="date" name="join_date"><br/>

        <button type="submit">SIMPAN</button>
    </form>
    