@extends('Official-Content/layout')

@section('css')
<link href="{{asset('css/registered.css')}}" rel="stylesheet">
@endsection

@section('body')
<form method="POST" class="movein">
    <input class="search__input" type="text" placeholder="Search">
    <input type="submit" name="go_search" style="position:absolute; display:none">
</form>
<center>
    <div id="categories">
        <div id="selectedCategory"> </div>
        <a class="hover-shadow hover-color">
            <span>E</span><span>m</span><span>p</span><span>l</span><span>o</span><span>y</span><span>e</span><span>d</span>
        </a>
        <a class="hover-shadow hover-color"> <span>V</span><span>i</span><span>e</span><span>w</span>
            <span>A</span><span>l</span><span>l</span> </a>
        <a
            class="hover-shadow hover-color"><span>D</span><span>i</span><span>s</span><span>m</span><span>i</span><span>s</span><span>s</span><span>e</span><span>d</span></a>

    </div>
</center>
<div id="container3" class="moveout">
    <table id="table-stock">
        <tr>
            <th style="width:25%">Name</th>
            <th style="width:25%">Date Hired</th>
            <th style="width:25%">Job</th>
            <th style="width:25%">Status</th>
            <th> </th>
        </tr>
        <tr>
            <td>
                <center><a style="color:black; text-decoration:none"> test </a></center>
            </td>
            <td>
                <center>may 26,2000 </center>
            </td>
            <td>
                <center>Cashier</center>
            </td>
            <td>
                <center>
                    <select style="">
                        <option>Employed</option>
                        <option>Dismissed</option>
                    </select>
                </center>
            </td>
    </table>

</div>

@endsection
