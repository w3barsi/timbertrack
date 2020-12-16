@extends('Official-Content/Stock-layout')

@section('new-css')
    <link href="{{asset('css/stock/view.css')}}" rel="stylesheet">
@endsection

@section('content')
    <table id="table-stock">
        <tr>
            <th style="width:25%">Product</th>
            <th style="width:25%">Available</th>
            <th style="width:25%">Price</th>
            <th>  </th>
        </tr>
        <tr>
            <td><center><a style="color:black; text-decoration:none"> test </a></center></td>
            <td><center>26 </center></td>
            <td><center>PHP 32</center></td>
            <td><center>

            <input type="submit" name="delete" value="" id="submit-icon2">
            <i class="fas fa-trash" style="margin-left:-23px; margin-top:5px; "> </i>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="form" value="" id="submit-icon3">
            <i class="fas fa-pen"style="margin-left:-20px; margin-top:5px; "></i>
        </center></td>
        </tr>

        <tr>
            <td><center><a style="color:black; text-decoration:none"> test 2 </a></td>
            <form></form>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="updating" maxlength='4' value='1234'/></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                PHP  <input class="updating" maxlength='4' value='0123'/></center></td>
            <td><input type='submit' name='update' value='' id='submit-icon'> <i class='fas fa-check'style='margin-left:-20px; margin-top:5px; '></i></td>

        </tr>
    </table>
@endsection


