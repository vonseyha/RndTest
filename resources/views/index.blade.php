@extends('parent')

@section('main')

<table class="table table-bordered table-striped">
    <tr>
        <th width="10%">Image</th>
        <th width="35%">Application_name</th>
        <th width="35%">Description</th>
        <th width="30%">Action</th>
    </tr>
    @foreach($data as $row)
        <tr>
          <td><img src="{{URL::to('/')}}/images/{{$row->icon}}" class="img-thumbnail" width="75"/></td>
          <td>{{$row->application_name}}</td>
          <td>{{$row->description</td>
          <td>

          </td>
        </tr>
    @endforeach

</table>
{!! $data->links()!!}

@unsection