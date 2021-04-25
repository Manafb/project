@extends("layouts.app")
@section("group","active")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-md">
                <tr>
                    <th width="3%">#</th>
                    <th width="38%">Name</th>
                    <th width="38%">College</th>
                    <th width="9%">Type</th>
                    <th width="15%">Action</th>
                </tr>
                @foreach($groups as $group)
                    <tr>
                        <td>{{$group->id}}</td>
                        <td>{{$group->Groupable->name}}</td>
                        <td>
                            @if($group->type=="public")
                                {{$group->Groupable->name}}
                                @else
                                {{$group->Groupable->Major->College->name}}
                            @endif
                        </td>
                        <td>
                            {{$group->type}}
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{route("website.group.index",["id"=>$group->id])}}"> Vist</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a>Groups</a></li>
@endsection
@section("title")
    Group List
@endsection
