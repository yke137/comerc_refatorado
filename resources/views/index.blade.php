@extends('layout.principal')

@section('conteudo')

    <!-- Begin page content -->
    <div class="container">
	    <div>
			    <div class="col-xs-12 col-sm-4 col-md-4" style="width: 65%;">
			        <div class="bloco">
			            <h2><a style="color: #7485f6; font-family: 'NeoSansStdRegular','Ropa Sans', sans-serif;" target='_blank' href="{{$feed->get_permalink()}}">{{$feed->get_title()}}</a></h2>
	<!--
	Here, we'll loop through all of the items in the feed, and $item represents the current item in the loop.
	-->
	@foreach ($feed->get_items() as $item)
		<div class="container_bloco_rss">
            <div class="bloco_rss">
                <h4>{{$item->get_title()}}</h4>
				<p>{{$item->get_description()}}</p>
				<p><small>Posted on {{$item->get_date('j F Y | g:i a')}}</small></p>
	        </div>
	        <button class="veja-mais-home" onclick="window.open('{{$item->get_permalink();?>');return false;" <img src="http://www.comerc.com.br/comerc/images/icones/seta.gif" alt="seta" class="img"> Veja Mais</button>
        </div>
	@endforeach
	<div style="clear: both;"></div>
			        </div>
			    </div>
			     <div class="col-xs-12 col-sm-4 col-md-4" style="margin-top: 5%;">
		            <div class="bloco">
		                <iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" height="200" src="http://www.tempoagora.com.br/ta-widgets?cidades=SaoPaulo-SP&amp;tipo=horizontal"></iframe>
		            </div>
			    </div>
		    </div>
    </div>

@stop