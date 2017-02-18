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
                <td colspan="3" align="right"><input type="submit" value="Post"></input></td></td>
            </tr>
        </table>
    </form>
    <hr>
    Semua Kritik dan Saran :<br>
    <table border="1">
        <tr>
            <td align="center" width="25">No</td>
            <td align="center" width="100">No. Identitas</td>
            <td align="center" width="120">Nama Lengkap</td>
            <td align="center" width="100">No. Telpon</td>
            <td align="center" width="300">Kritik & Saran</td>
            <td align="center" width="200" colspan="2">Aksi</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td width="70">Edit</td>
            <td width="75">Delete</td>
        </tr>
    </table>
</div>
@stop