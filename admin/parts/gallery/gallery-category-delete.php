<h2>Вы уверенны что хотите удалить данную категорию картинок?</h2>
<form action="">
<table>
    <tr>
        <td>ID</td>
        <td><input name="ID" placeholder="int" value="<?= $data['id'] ?>"></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input name="name" placeholder="text" value="<?= $data['name'] ?>"></td>
    </tr>
    <tr>
        <td colspan=2><button type="submit">Удалить Категорию</button></td>
    </tr>
</table>
</form>
<a href="/hillel/admin/categorygallery/">Вернутся к категориям</a>