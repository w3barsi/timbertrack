@section('css')
<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css" />
@endsection

<div id="container">
    <input id="flatpickr" id="timer"
        style="position:absolute;   width: 13em; height: 13em; margin-left: 17%; margin-top: 3%; ">
    <label for="flatpickr">
        <i id="flatpickr" class="icon" style="margin-left: 17%; cursor:pointer;">
            <em>Saturday</em>
            <strong>September</strong>
            <span>20</span>
        </i>
    </label>


    <i class="icon" style="margin-left: 40%">
        <strong>Year</strong>
        <span>2020</span>
    </i>
    <div class="hovertimestamp"><span>Time Period</span>
        <a class="social-link" target="_blank">Day</a>
        <a class="social-link" target="_blank">Week</a>
        <a class="social-link" target="_blank">Month</a>
        <a class="social-link" target="_blank">Year</a></div>

    <div id="piechart">
        <h2>
            <center> Sales</center>
        </h2>
    </div>


    <div id="listofprod">
        <h2>
            <center> Product Sales</center>
        </h2>
        <table id="ListofProdTable">
            <tr>
                <td style="width:50%">Product Name</td>
                <td align="center">Item Sold</td>
                <td align="center">Unit Price</td>
                <td align="center">Total</td>

            </tr>
            <tr>
                <td style="width:50%">Product Name</td>
                <td align="center">25</td>
                <td align="center">Php 30</td>
                <td align="center">Php 750</td>

            </tr>

        </table>
    </div>

    <div id="categorysales">
        <h2>
            <center> Categories</center>
        </h2>
        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <p>Wood</p>
                </div>
            </div>
        </div>
        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <p>Plastic</p>
                </div>
            </div>
        </div>

        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <p>Concrete</p>
                </div>
            </div>
        </div>
        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <p>Metal</p>
                </div>
            </div>
        </div>
        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <p>Others </p>
                </div>
            </div>
        </div>
    </div>
    <div id="selectedprod">
        <h1 style="position:absolute; margin-top:6%; margin-left:2%"> Product Name</h1>
        <table id="ListofProdTable"
            style="display:inline-block; float: right; width:68%;margin-top:3%; margin-right:3%">
            <tr style="position: sticky">
                <td align="center" style="width:29%">Date</td>
                <td align="center" style="width:29%">Time</td>
                <td align="center" style="width:29%">No. of Items</td>
                <td align="center" style="width:29%">Total</td>
            </tr>
            <tr>
                <td align="center" style="width:29%">02/05/2020</td>
                <td align="center" style="width:29%">11:49:00</td>
                <td align="center" style="width:29%">25</td>
                <td align="center" style="width:29%">750</td>
            </tr>
            <tr>
                <td align="center" style="width:29%">02/05/2020</td>
                <td align="center" style="width:29%">11:49:00</td>
                <td align="center" style="width:29%">25</td>
                <td align="center" style="width:29%">750</td>
            </tr>
            <tr>
                <td align="center" style="width:29%">02/05/2020</td>
                <td align="center" style="width:29%">11:49:00</td>
                <td align="center" style="width:29%">25</td>
                <td align="center" style="width:29%">750</td>
            </tr>
            <tr>
                <td align="center" style="width:29%">02/05/2020</td>
                <td align="center" style="width:29%">11:49:00</td>
                <td align="center" style="width:29%">25</td>
                <td align="center" style="width:29%">750</td>
            </tr>
            <tr>
                <td align="center" style="width:29%">02/05/2020</td>
                <td align="center" style="width:29%">11:49:00</td>
                <td align="center" style="width:29%">25</td>
                <td align="center" style="width:29%">750</td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <script>
        var example = flatpickr('#flatpickr');
    </script>
</div>
