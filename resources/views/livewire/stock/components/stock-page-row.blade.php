<tbody>
    @if(auth()->user()->hasPosition('admin'))
    <tr>
        <td>
            <center>
                <a style="color:black; text-decoration:none"> {{ $stock->product }} </a>
            </center>
        </td>
        <td>
            <center>{{ $stock->available }}</center>
        </td>
        <td>
            <center>{{ $stock->price }}</center>
        </td>
        <td>
            <center>{{ $stock->subcategory }}</center>
        </td>
        <td>
            <center>

                <input type="submit" name="delete" value="" id="submit-icon2">
                <i class="fas fa-trash" style="margin-left:-23px; margin-top:5px; "> </i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="form" value="" id="submit-icon3">
                <i class="fas fa-pen" style="margin-left:-20px; margin-top:5px; "></i>
            </center>
        </td>
    </tr>
    @else
    <tr>
        <td>
            <center><a style="color:black; text-decoration:none"> {{ $stock->product }} </a></center>
        </td>
        <td>
            <center>{{ $stock->available }}</center>
        </td>
        <td>
            <center>{{ $stock->price }}</center>
        </td>
        <td>
            <center>{{ $stock->subcategory }}</center>
        </td>
        <td>
            <center>

                <input type="submit" name="delete" value="" id="submit-icon2">
                <i class="fas fa-trash" style="margin-left:-23px; margin-top:5px; "> </i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="form" value="" id="submit-icon3">
                <i class="fas fa-pen" style="margin-left:-20px; margin-top:5px; "></i>
            </center>
        </td>
    </tr>
    @endif
</tbody>
