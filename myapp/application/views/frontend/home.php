<style type="text/css">
	
.banner-home{
	height: 200px;
	background: #f0f0f0;
	margin-bottom: 20px;
}

</style>


	<div class="col-sm-12 text-center banner-home">
		<h1>BEM-VINDO</h1>
	</div>

	<div class="row">

		<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">ultimas o.s</div>
			<div class="panel-body" id="ordem-servico"> ...	</div>
		</div>
		</div>

		<div class="col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">ultimas entradas</div>
			<div class="panel-body" id="caixa">...</div>
		</div>
		</div>

	</div>


<script type="text/javascript">
	

	function get_ordem_servico(){
	$.ajax({
	    url: 'home/get_ordem_servico',
	    success: function(data){
	        $('#ordem-servico').html(data);
	    }
	});
	}    

	function get_caixa(){
	$.ajax({
	    url: 'home/get_caixa',
	    success: function(data){
	        $('#caixa').html(data);
	    }
	});
	}

	get_ordem_servico();
	get_caixa();
	
</script>