<?php 
echo "<h1>Produtos</h1>";
echo "<ol>";
echo "<li>Notebook</li>";
echo "<li>Impressora</li>";
echo "<li>Mouse</li>";
echo "</ol>";
?>
<div>
    <a href="{{route('app');}}">App</a>
    <a href="{{route('app.user');}}">User</a>
    <a href="{{route('app.profile');}}">Profile</a>
    <a href="{{route('meusprodutos')}}">Produtos</a>
</div>