<section class="sidebar">
    <ul class="nav-bar">
        <li  @if (url()->current()==Route('Dashboard'))class="active" @endif>
         <a href="{{Route('Dashboard')}}">
        <i class="fa fa-tachometer-alt"></i>&nbsp;Dashboard</a></li>
        <li @if (url()->current()==Route('dashboard.products.index')) class="active" @endif>
        <a href="{{Route('dashboard.products.index')}}">
        <i class="fa fa-shopping-basket" ></i>&nbsp;Products</a></li>
        <li @if (url()->current()==Route('dashboard.users.index')) class="active" @endif>
        <a href="{{Route('dashboard.users.index')}}">
        <i class="fas fa-user" ></i>&nbsp;Users</a></li>
        <li  @if (url()->current()==Route('dashboard.categories.index')) class="active" @endif>
        <a href="{{Route('dashboard.categories.index')}}">
        <i class="fa fa-dolly" ></i>&nbsp;Category</a></li>
        <li @if (url()->current()==Route('dashboard.orders.index')) class="active" @endif>
        <a href="{{Route('dashboard.orders.index')}}">
        <i class="fa fa-truck" ></i>&nbsp;Orders</a></li>
        <li @if (url()->current()==Route('dashboard.orders_valid.index')) class="active" @endif>
        <a href="{{Route('dashboard.orders_valid.index')}}">
        <i class="fa fa-truck-loading" ></i>&nbsp;Orders Valid</a></li>
    </ul>
</section>