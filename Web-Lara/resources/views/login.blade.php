@extends('temp.index')
@section('content')
<div id="content">
    <form>
        <table id="table">
            <tr>
                <td colspan="3" align="center">LOGIN SITES</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="user"></input><br></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass"></input></td>
            </tr>
            <tr>
                <td colspan="3" align="right"><input type="submit" value="Login"></input></td>
            </tr>
            <tr>
                <td colspan="3" align="center">Login Area For Show The Websites</td>
            </tr>
        </table>
    </form>
</div>
@stop