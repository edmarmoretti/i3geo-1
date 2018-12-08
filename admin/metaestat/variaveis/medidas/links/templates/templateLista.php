<script id="templateLista" type="x-tmpl-mustache">
<div class="list-group-item" id="form-{{id_medida_variavel}}">
	<div class="row-content" >
		<h4 class="list-group-item-heading {{escondido}}">
			<span class="pull-right">&nbsp;&nbsp;</span>
			<a href="javascript:void(0)" onclick="{{onEditar}}('{{id_link}}')" class="btn btn-danger btn-fab btn-fab-mini pull-right" role="button" aria-expanded="false" >
				<i class="material-icons md-18">edit</i>
			</a>
			<span class="pull-right">&nbsp;&nbsp;</span>
			<a href="javascript:void(0)" onclick="{{onExcluir}}('{{id_link}}')" class="btn btn-danger btn-fab btn-fab-mini pull-right" role="button">
				<i class="material-icons md-18">delete_forever</i>
			</a>
			&nbsp;<a href="{{{link}}}" target="_blank" >{{{nome}}}</a>
		</h4>
	</div>
	<div class="list-group-separator"></div>
</div>
</script>
