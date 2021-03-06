@extends('layouts.base')

@section('main-content')


<div class="content-goes">
    <div class="my-centered-container">
        @foreach ($headerProduct as $key => $item )                          
        <div class="my-card" >
        <a href="/comic/{{$key}}"><img src="{{$item['thumb']}}" alt="{{$item['type']}}"></a>    
        <h4>{{$item['series']}}</h4>
    </div>
        @endforeach
</div>
</div>


<div class="main-background">
    <div class="centered-container">
        <div class="main-list">                               
            <ul>
                <li><h4>DC COMICS</h4></li>
                @foreach ($mainDcComicsList as $data)
                <li>{{$data['text']}}</li>                   
                @endforeach
            </ul>                                  
            <ul>
                <li><h4>SHOP</h4></li>
                @foreach ($mainDcShopList as $item)
                <li>{{$item['text']}}</li>    
                @endforeach
            </ul>                                              
            <ul>
                <li><h4>DC</h4></li>
                @foreach ($mainDcList as $list)
                <li>{{$list['text']}}</li>    
                @endforeach
            </ul>  
            <ul>
                <li><h4>SITES</h4></li>
                @foreach ($mainSitesList as $list)
                <li>{{$list['text']}}</li>    
                @endforeach
            </ul>            
        </div>
        <div class="logo-list">           
    </div>
    </div>         
</div>
@endsection 