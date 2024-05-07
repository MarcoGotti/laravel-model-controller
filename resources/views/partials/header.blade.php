<div>
    <a class="{{Route::currentRouteName() === 'home' ? 'activePage' : ''}}" href="{{route('home')}}">Home::all()</a>
    <a class="{{Route::currentRouteName() === 'filterOne' ? 'activePage' : ''}}" href="{{route('filterOne')}}">FilterOne</a>
    <a class="{{Route::currentRouteName() === 'filterTwo' ? 'activePage' : ''}}" href="{{route('filterTwo')}}">FilterTwo</a>
    <a class="{{Route::currentRouteName() === 'filterThree' ? 'activePage' : ''}}" href="{{route('filterThree')}}">FilterThree</a>
</div>