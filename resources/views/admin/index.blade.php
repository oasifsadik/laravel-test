@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin') }}</div>

                <div class="card-body">
                    <h3>Pending User List</h3>
                   <table class="table">
                        <thead>
                            <tr>
                                <td>#sl</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $j = 1;
                            @endphp
                            @if (count($users)>0)
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $j++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>
                                            <a href="{{ url('/approved-user', $user->id) }}" class="btn btn-outline-success btn-sm">Approved</a>
                                            <a href="{{ url('approved-decline',$user->id) }}" class="btn btn-outline-danger btn-sm">Decline</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <th class="text-center text-danger" colspan="5"> No Pending Pending Available</th>
                            </tr>
                            @endif
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
