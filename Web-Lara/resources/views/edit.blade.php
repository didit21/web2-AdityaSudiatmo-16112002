@extends('temp.index')
@section('content')
<div id="content">
    <form>
        <table>
            <tr>
                <td valign="top">No. Identitas</td>
                <td valign="top">:</td>
                <td align="right"><input name="noiden"></input>
            </tr>
            <tr>
                <td valign="top">Nama Lengkap</td>
                <td valign="top">:</td>
                <td align="right"><input name="nnama"></input>
            </tr>
            <tr>
                <td valign="top">No. Telepon</td>
                <td valign="top">:</td>
                <td align="right"><input name="ohone"></input>
            </tr>
            <tr>
                <td valign="top">Kritik & Saran</td>
                <td valign="top">:</td>
                <td><textarea name="krisan" rows="3"></textarea>
            </tr>
            <tr>
                <td colspan="3" align="right"><input type="submit" value="Update"></input></td></td>
            </tr>
        </table>
    </form>
</div>
@stop