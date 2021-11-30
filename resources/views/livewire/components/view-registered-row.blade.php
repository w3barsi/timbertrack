<tbody>
    @if(auth()->user()->hasPosition('admin'))
    <tr>
        <td>
            <input wire:model.lazy="name" style="font-size: 15px;value=" {{$user->name}}" placeholder="{{$user->name}}">
        </td>
        <td>
            <input wire:model.lazy="username" style="font-size: 15px;value=" {{$user->username}}"
                placeholder="{{$user->username}}">
        </td>
        <td>
            <center>{{$user->created_at->toDateString()}} </center>
        </td>
        <td>
            <select wire:model="position" style="font-size: 15px;">
                <option value="{{$user->position}}">{{$user->position}}</option>
                @if($user->position == 'Admin')
                <option value="Employee">Employee</option>
                <option value="Supplier">Supplier</option>
                @elseif($user->position == 'Employee')
                <option value="Admin">Admin</option>
                <option value="Supplier">Supplier</option>
                @else($user->position == 'Supplier')
                <option value="Admin">Admin</option>
                <option value="Employee">Employee</option>
                @endif
            </select>
        </td>
        <td>
            <select wire:model="status" style="font-size: 15px;">
                <option value="{{$user->status}}">{{ $user->status }}</option>
                @if($user->status === 'Employed')
                <option value="Dismissed">Dismissed</option>
                @else
                <option value="Employed">Employed</option>
                @endif
            </select>
        </td>
    </tr>
    @else
    <tr>
        <td>
            <center><a style="color:black; text-decoration:none">{{$user->name}} </a></center>
        </td>
        <td>
            <center>{{$user->created_at->toDateString()}} </center>
        </td>
        <td>
            <center>{{$user->position}}</center>
        </td>
        <td>
            <center>{{$user->status}}</center>
        </td>
    </tr>
    @endif
</tbody>
