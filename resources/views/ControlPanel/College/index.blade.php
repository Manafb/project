@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-md-12">
                <table class="table table-bordered table-md">

                    <tr>
                        <th width="3%">#</th>
                        <th width="38%">Name</th>
                        <th width="38%">Head Of College</th>
                        <th width="20%">Action</th>
                    </tr>


                    @foreach($colleges as $college)

                    <tr>
                        <td>{{$college->id}}</td>
                        <td>{{$college->name}}</td>
                        <td>{{$college->HeadOfCollege->name}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route("college.edit",["id"=>$college->id])}}">Edit</a>
                                <button class="btn btn-danger deleteBtn" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="deleteFun({{$college->id}})">Delete</button>
                        </td>

                    </tr>
                    @endforeach

                </table>
            <form action="{{route("college.destroy")}}" method="POST" id="deleteForm">
                @csrf
                <input type="hidden" id="id" name="id" >
            </form>
            <script>
                function deleteFun(ele)
                {
                    $("#id").val(ele);
                    $("#deleteForm").submit();
                }
            </script>
        </div>
    </div>

@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a></li>
    <li class="breadcrumb-item"><a>College</a></li>
@endsection
@section("header")
    <h1 class="float-left">College</h1>
@endsection
@section("title")
    Colleges List
@endsection
