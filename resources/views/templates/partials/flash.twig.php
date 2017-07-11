{%  if flash.getMessage('welcome') %}

<div class="alert alert-info" style="margin-top: 80px">

                Message: {{ flash.getMessage('welcome') | first  }}
</div>

{%  endif  %}

{%  if flash.getMessage('info') %}

<div class="alert alert-info" style="margin-top: 80px">

                Message: {{ flash.getMessage('info') | first  }}
</div>

{%  endif  %}

{%  if flash.getMessage('error') %}

<div class="alert alert-warning" style="margin-top: 80px">

                Message: {{ flash.getMessage('error') | first  }}
</div>

{%  endif  %}