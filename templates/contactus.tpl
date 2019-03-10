{include file="header.tpl" title="Welcome to Home"}


{for $foo=0 to 2}
<h1>{$myname[$foo]}</h1>

{/for}


{foreach $myname as $name}
	<h1>{$name}</h1>
{/foreach}



{include file="footer.tpl"}