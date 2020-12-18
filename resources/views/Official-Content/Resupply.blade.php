@extends('Official-Content/Resupply-layout')

@section('new-css')
    <link href="{{asset('css/stock/view.css')}}" rel="stylesheet">
@endsection



@section ('content')
<table id="table-resupplyk">
    <tr>
        <th></th>
        <th style="width:25%">Product</th>
        <th style="width:25%">Total</th>
        <th style="width:25%">Accept</th>
        <th style="width:25%">Reject</th>
    </tr>
    <tr>
        <td> test</td>
        <td>23</td>
        <form>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="updating" max="4" maxlength='4' value='1234'/></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="updating" maxlength='4' max="4" value='0123'/></center></td>
            <td><input type='submit' name='update' value='' id='submit-icon'> <i class='fas fa-check'style='margin-left:-20px; margin-top:5px; '></i></td>
        </form>
    </tr>
</table>
@endsection
