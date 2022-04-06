@extends('Frontend.master')


<style>
    .search-container{
        position: relative;
    }
    .search-container button {
        padding: 10px;
        margin-right: 16px;
        background: #F7941D;
        color: #fff;
        font-size: 17px;
        border: none;
        cursor: pointer;
        position: absolute;
        top: 0;right: -15px;
    }
    .search-container button:hover {
        background: rgb(0, 0, 0);
        color: #fff;
    }
    input[type=text]{
        padding: 5px 65px;
    }

</style>
@section('frontend-content')            
    <section class="container py-5" style="margin-top: 40px;min-height:70vh">


        <div class="search-container d-flex justify-content-between">
            <h3 class="">Search Your Identity</h3> 
            <form action="{{ route('verify_id') }}" method="GET">
                <input type="text" placeholder="SEACRH BY JOB ID" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <hr>
        
    </section>
@endsection