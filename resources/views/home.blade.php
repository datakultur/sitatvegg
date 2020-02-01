@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="quite-information" style="padding: 10px">
                    <h4>Legg inn et sitat</h4>
                    <p>Her kan du skrive et sitat som folk personer kan gi poeng til</p>
                </div>
                <form method="POST" action="{{route('quote.store')}}">
                    @csrf
                    <div class="quote-sentence" style="padding: 10px">
                        <input name="title" type="text" class="form-control" placeholder="Hva ble sagt?">
                    </div>
                    <div class="quote-speaker" style="padding: 10px">
                        <input name="description" type="text" class="form-control" placeholder="Hvem sa det">
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Send inn</button>
                </form>
            </div>
        </div>
        <div class="col-md-8" style="margin-top: 30px;">
            @foreach($quotes as $quote)
            <div class="media">
                <form method="POST" action="{{route('upvote.store',['quote' => $quote->id])}}">
                    @csrf
                    <button type="submit" class="mr-3" style="background-color: red;">
                        <span style="font-size: 30px; font-weight: 500;padding: 16px">
                            {{$quote->upvotes()->count() ?? 0 }}
                        </span>
                    </button>
                </form>
                <div class="media-body">
                    <h5 class="mt-0">
                        {{$quote->title}}
                    </h5>
                    <span style="color: grey; opacity: 0.6">
                       - {{$quote->description}} ({{$quote->created_at}})
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
