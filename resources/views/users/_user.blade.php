<li>
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
    <a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a>

    @can('destroy',$user)
        <form action="{{route('users.destroy',$user->id)}}" method="post" onsubmit="return sumbit_sure()">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan

</li>


<script language="javascript">
    //友好提示
    function sumbit_sure(){
        var gnl=confirm("确定要删除该用户?");
        if (gnl==true){
            return true;
        }else{
            return false;
        }
    }
</script>