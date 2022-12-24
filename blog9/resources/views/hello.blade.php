
<x-header data="Hello Page"/>

<h1>Hello file</h1>
<h3></h3>

    
    <p>{{URL::current()}}</p>

    <p>{{URL::previous()}}</p>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    
    <form action="{{URL::to('contact/save_data')}}">
        <input type="text" name="name">
        <button type='Submit' name='submit' value="submit">

    </form>