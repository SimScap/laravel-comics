@extends('layouts.base')

@section('main-content')
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