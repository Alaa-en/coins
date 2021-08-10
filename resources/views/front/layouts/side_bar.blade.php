<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Home_4</span></a></li>

            <li> <a class="has-arrow waves-effect waves-dark" href="{{route('coin.add') }}" aria-expanded="false"><span class="hide-menu"> <i class="mdi mdi-plus"></i>Add coin</span></a>

                <li class="nav-devider"></li>
                <li class="nav-small-cap">PERSONAL</li>

                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Promote</span></a>

                </li>
                @if (Auth::user())

                @if (Auth::user()->type == 'admin')
                <li> <a class="has-arrow waves-effect waves-dark" href="{{route('users')}}" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Users</span></a>
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
