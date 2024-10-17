<x-app-layout>
    <div class="hero2">
        @include('layouts.navigation')




        <div class="box-dashboard">
            <div class="box-circle1"></div>
            <div class="box-circle2"></div>
            <div class="box-circle3"></div>
            <div class="dashboard-circle-center"></div>
        </div>

        <div class="menu-links">
            <div class="circle-rot"></div>
            <a href="{{ route('user.products') }}" id="FH1">Your Products</a>
            <a href="{{ route('products.create') }}" id="FH2">Build Products</a>
            <a href="{{ route('userEditDelete') }}" id="FH3">Edit Products</a>
            <a href="{{ route('userEditDelete') }}" id="FH4">Delete Products</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" href="route('logout')"
                onclick="event.preventDefault();
                                this.closest('form').submit();">Logout</a>
            </form>
        </div>




    </div>


    <script>
        let FH1 = document.querySelector('#FH1')
        let FH2 = document.querySelector('#FH2')
        let FH3 = document.querySelector('#FH3')
        let FH4 = document.querySelector('#FH4')
        let boxDashboard = document.querySelector('.box-dashboard')

        FH1.onmouseenter = function() {
            boxDashboard.classList.add('hover-link1')
        }
        FH1.onmouseleave = function() {
            boxDashboard.classList.remove('hover-link1')
        }

        FH2.onmouseenter = function() {
            boxDashboard.classList.add('hover-link2')
        }
        FH2.onmouseleave = function() {
            boxDashboard.classList.remove('hover-link2')
        }

        FH3.onmouseenter = function() {
            boxDashboard.classList.add('hover-link3')
        }
        FH3.onmouseleave = function() {
            boxDashboard.classList.remove('hover-link3')
        }

        FH4.onmouseenter = function() {
            boxDashboard.classList.add('hover-link4')
        }
        FH4.onmouseleave = function() {
            boxDashboard.classList.remove('hover-link4')
        }
    </script>
</x-app-layout>
