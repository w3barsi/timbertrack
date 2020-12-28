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
                <option value="Checker">Checker</option>
                <option value="Cashier">Cashier</option>
                @elseif($user->position == 'Cashier')
                <option value="Admin">Admin</option>
                <option value="Checker">Checker</option>
                <option value="Employee">Employee</option>
                @elseif($user->position == 'Checker')
                <option value="Admin">Admin</option>
                <option value="Cashier">Cashier</option>
                <option value="Employee">Employee</option>
                @elseif($user->position == 'Employee')
                <option value="Admin">Admin</option>
                <option value="Checker">Checker</option>
                <option value="Cashier">Cashier</option>
                @endif
            </select>
        </td>
        <td>
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
        </td>
    </tr>
    @endif

</tbody>
