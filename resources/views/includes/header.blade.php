<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"> 

<div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">{{$title}}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{__('header.Home')}}</a></li>
                        <li class="breadcrumb-item"><a href="#">{{__('header.Pages')}}</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{__('header.About_Us')}}</li> 
                    </ol>
                </nav>
            </div>
        </div>
        