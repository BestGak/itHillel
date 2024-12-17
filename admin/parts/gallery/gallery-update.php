<h2>Обновленные данных о картинке</h2>
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
        <td>URL</td>
        <td><input name="url" placeholder="text" value="<?= $data['url'] ?>"></td>
    </tr>
    <tr>
        <td>Category ID</td>
        <td><input name="category_ID" placeholder="int" value="<?= $data['category_id'] ?>"></td>
    </tr>
    <tr>
        <td colspan=2><button type="submit">Обновить картинку</button></td>
    </tr>
</table>
</form>
<a href="/hillel/admin/gallery/">Вернутся в галерею</a>