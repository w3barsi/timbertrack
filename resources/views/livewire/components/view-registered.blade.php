@section('css')
<link href="{{asset('css/registered.css')}}" rel="stylesheet">
@endsection

<div id="container">
    <form method="POST" class="movein">
        <input wire:model="search" class="search__input" type="text" placeholder="Search">
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
            <thead>
                <tr>
                    <th style="">Name</th>
                    <th style="">Username</th>
                    <th style="">Date Registered</th>
                    <th style="">Job</th>
                    <th style="">Status</th>
                    <th> </th>
                </tr>
            </thead>
            @foreach ($users as $user)
            <livewire:components.view-registered-row :user="$user" />

            @endforeach
        </table>

    </div>
</div>
