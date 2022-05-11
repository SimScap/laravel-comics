@extends('layouts.base')


@section ('main-content')
<div class="blue-div"></div>
<div class="actionCard">
    <img src="{{$headerProduct['thumb']}}" alt="">
</div>   

<div class="comic-container">
    <div class="info-container">
        <h2>{{$headerProduct['title']}}</h2>
        <div class="comic-info">
            <div class="info-price">
                <span>U.S Price: {{$headerProduct['price']}}</span>
                <span>AVAILABLE</span>
            </div>
            <div class="comic-price">
                <h5>Check Availability v</h5>
            </div>
        </div>
        <p>{{$headerProduct['description']}}</p>
    </div>
    <div class="adv-container">
        <h5>ADVERTISEMENT</h5>
        <div class="adv-img">
            <img src="{{asset("images/adv.jpg")}}" alt="adv">
        </div>
    </div>
</div>

<div class="comic-resume">
    <div class="talent">
        <div>
            <h5>Talent</h5>
            <span>Art by:</span>
            @foreach ($headerProduct['artists'] as $artist)
            <span>{{$artist}}</span>
            @endforeach
        </div>  
        <div>
            <span>Written by:</span>
            @foreach ($headerProduct['writers'] as $writer)
            <span>{{$writer}}</span>
            @endforeach
        </div>      
    </div>
    <div class="specs">
        <div>
            <h5>Talent</h5>
            <span>Series</span>
            <span>{{$headerProduct['series']}}</span>
        </div>  
        <div>
            <span>U.S. Price:</span>
            <span>{{$headerProduct['price']}}</span>
        </div>
        <div>
            <span>On Sale Date:</span>
            <span>{{$headerProduct['sale_date']}}</span>
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
