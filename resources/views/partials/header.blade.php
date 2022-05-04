<div>
    <div class="centered-container">
        <div class="header-img-container">
        <img src="" alt="dc-logo-header">
    </div>    
        <nav class="header-nav">
        <ul>
            @foreach ($headerNav as $data)           
            <li>
            <a>{{$data['text']}}</a>
            </li>
            @endforeach        
        </ul>
        </nav>
    </div>
    <div class="my-jumbotron">
        <img src="" alt="jumbotron">
    </div>
    <div class="content-goes">
        <div class="my-centered-container">
            <div class="my-card" >
                <img src="" alt="">
            <h4></h4>
        </div>
    </div>
    </div>
</div>