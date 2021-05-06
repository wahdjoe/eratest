@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Manager</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($users) > 0)
                        @for ($i = 0; $i < count($users); $i++)
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td> {{ $users[$i]->name }} </td>
                            <td>  {{ $users[$i]->email }} </td>
                            <td>  {{ $users[$i]->role->name }} </td>
                            @if (is_object($users[$i]->manager))
                            <td>{{ $users[$i]->manager->name }}</td>
                            @else
                            <td>&nbsp;</td>
                            @endif
                        </tr>
                        @endfor
                    @endif
                    </tbody>
                
                </table>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
