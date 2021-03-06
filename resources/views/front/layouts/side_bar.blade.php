<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
            </li>
            @if (!Auth::user()  || Auth::user()->type == 'user'  )

            <li> <a class="has-arrow waves-effect waves-dark" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Home</span></a></li>

            <li> <a class="has-arrow waves-effect waves-dark" href="{{route('coin.add') }}" aria-expanded="false"><span class="hide-menu"> <i class="mdi mdi-plus"></i>Add coin</span></a></li>

                <li class="nav-devider"></li>
                <li class="nav-small-cap">PERSONAL</li>



                <li> <a class="has-arrow waves-effect waves-dark" href="{{route('promote') }}" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Promote</span></a>
                    </li>

            @endif


                @if (Auth::user())

                @if (Auth::user()->type == 'admin')

                    <li> <a class="has-arrow waves-effect waves-dark " href="{{route('users') }}" aria-expanded="false"> <i class="fa fa-users"></i><span class="hide-menu ">  Users</span></a></li>

                <li> <a class="has-arrow waves-effect waves-dark " href="{{route('new.coins')}}" aria-expanded="false"> <i class="fa fa-coins"></i><span class="hide-menu"> New coin </span></a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark " href="{{route('coins.show')}}" aria-expanded="false"> <i class="fa fa-coins"></i><span class="hide-menu"> All coins  </span></a>
                </li>
                @php
                 $coins = \App\Models\Coin::where('delete_request', 'new')->get();
                @endphp
                <li> <a class="has-arrow waves-effect waves-dark " href="{{route('request.delete')}}" aria-expanded="false"> <i class="fa fa-coins"></i><span class="hide-menu"> delete request ( {{$coins->count()}} ) </span></a>
                </li>


                @endif
                @endif








            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
