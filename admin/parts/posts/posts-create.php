<h2>Добавление поста</h2>
<form method="POST">
<table>
    <tr>
        <td>Заголок</td>
        <td><input name="title" placeholder="text"></td>
    </tr>
    <tr>
        <td>Контент</td>
        <td><input name="content" placeholder="text"></td>
    </tr>
    <tr>
        <td>Автор айди</td>
        <td><input name="author_id" placeholder="int"></td>
    </tr>
    <tr>
        <td>Айди Категории</td>
        <td><input name="category_id" placeholder="int"></td>
    </tr>
    <tr>
        <td colspan=2><button type="submit">Добавить пост</button></td>
    </tr>
</table>
</form>
<a href="/hillel/admin/posts/">Вернутся к постам</a>