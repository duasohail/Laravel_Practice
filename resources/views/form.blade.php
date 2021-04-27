<style>
*{
    margin:0px;
    padding: 0px;
}
.container{
    background-color: black;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.wrapper{
    text-align: center;
    width: 26%;
    height: 310px;
    background-color: blueviolet;
}
h1{
    margin: 20px 0px 40px 0px;
}

input{
    width: 300px;
    height: 40px;
    margin: 10px 0px 8px 0px;
    padding: 0px 0px 0px 10px;
}
button{
    width:120px;
    height: 40px;
    border-radius: 30px;
    margin: 20px 0px 20px 0px;
}
</style>



<div class="container">
<div class="wrapper">
<form action="users" method="POST">
    @csrf
    <h1>Login Form</h1>
    <input type="email" placeholder="Enter Email" name="email"><br>
    <span>@error('email'){{$message}} @enderror</span>

    <input type="password" placeholder="password" name="password"><br>
    <span>@error('password'){{$message}} @enderror</span><br>
    <button type="submit">Submit</button>
</form>
</div>
</div>