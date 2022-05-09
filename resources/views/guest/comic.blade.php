@extends('layouts.base')


@section ('main-content')
<div class="blue-div"></div>
<div class="actionCard">
</div>   

<div class="comic-container">
    <div class="info-container">
        <h2>Text cc</h2>
        <div class="comic-info">
            <div class="info-price"></div>
            <div class="comic-price"></div>
        </div>
    </div>
    <div class="adv-container">
        <h5>ADVERTISEMENT</h5>
        <div class="adv-img">
            <img src="{{asset("images/adv.jpg")}}" alt="adv">
        </div>
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
