<h2>Обновленные данных о посте</h2>
<form action="">
<table>
        <input name="id" type="hidden" value="<?= $data[0]['id'] ?>">
    <tr>
        <td>Заголовок</td>
        <td><input name="title" placeholder="text" value="<?= $data[0]['title'] ?>"></td>
    </tr>
    <tr>
        <td>Описание</td>
        <td><input name="content" placeholder="text" value="<?= $data[0]['content'] ?>"></td>
    </tr>
    <tr>
        <td>Название Категории</td>
        <td><input name="name_category" placeholder="text" value="<?= $data[0]['name_category'] ?>"></td>
    </tr>
    <tr>
        <td>Автор</td>
        <td><input name="name" placeholder="int" value="<?= $data[0]['name'] ?>"></td>
    </tr>
    <tr>
        <td colspan=2><button type="submit">Обновить пост</button></td>
    </tr>
</table>
</form>
<a href="/hillel/admin/posts/">Вернутся к постам</a>