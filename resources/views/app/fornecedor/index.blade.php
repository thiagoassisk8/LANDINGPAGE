<h3>fornecedor<h3>
{{-- @dd($fornecedores) --}}

@if(count($fornecedores)>0 && count($fornecedores)<10)
    <h3>Existem alguns fornecedores<h3>
@elseif(count($fornecedores)>10)
<h3>Existem vários fornecedores cadastrados<h3>
@else
<h3>Ainda não existem fornecedores cadastrados<h3>
@endif