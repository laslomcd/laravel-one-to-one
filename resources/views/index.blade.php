@extends('layouts.app')

@section('content')
        <table class="table">
            @foreach($data as $user)
               <tr>
                   <td>{{ $user->name }}</td>
                   <td>{{ $user->email }}</td>
                   <td>{{ $user->phone->phone_type }}</td>
                   <td>{{ $user->phone->phone_number }}</td>
               </tr>
            @endforeach
        </table>

@endsection
