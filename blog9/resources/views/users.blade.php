<html>
    
    <body>
    <h1>Hello, this is users.blade.php view file.</h1>
    <!-- <h3>Welcome, //</h3> -->
    

    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/hello">Hello</a>
    
    <h5>Blade Template example</h5>
    <!-- <p>User 
        @if ($users=='aditi')
        <b>Hello, {{$users}}</b>
        @elseif($users=='anita')
        <i>Hello,{{$users}}</i>
        @endif;
     -->
    
    <!-- <h4>For each</h4>
    @for($i=0;$i<10;$i++)
    <h4>{{$i}}</h4>
    @endfor -->

    @foreach($users as $user)
        <h4>{{$user}}</h4>
    @endforeach

    <?php echo "This core php code " ?>
    </body> 


</html>