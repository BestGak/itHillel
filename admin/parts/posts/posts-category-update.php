<h2>Обновленные данных о посте</h2>
<form action="">
<table>
    <tr>
        <td>ID</td>
        <td><input name="ID" placeholder="int" value="<?= $data['id'] ?>"></td>
    </tr>
    <tr>
        <td>Заголовок</td>
        <td><input name="image_name" placeholder="text" value="<?= $data['title'] ?>"></td>
    </tr>
    <tr>
        <td>Описание</td>
        <td><input name="image_url" placeholder="text" value="<?= $data['content'] ?>"></td>
    </tr>
    <tr>
        <td>Название Категории</td>
        <td><input name="category_name" placeholder="text" value="<?= $data['category'] ?>"></td>
    </tr>
    <tr>
        <td>Айди категории</td>
        <td><input name="category_ID" placeholder="int" value="<?= $data['category_id'] ?>"></td>
    </tr>
    <tr>
        <td colspan=2><button type="submit">Обновить картинку</button></td>
    </tr>
</table>
</form>
<a href="/hillel/admin/posts/">Вернутся к постам</a>