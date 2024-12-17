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
        <td>
            <select name="author_id"> 
                <?php foreach ($user as $row) :?>                  
                    <option value="<?=$row['id'] ?>"><?=$row['name'] ?></option>                
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Айди Категории</td>
        <td><select name="category_id"> 
            <?php foreach ($category as $row) :?>                  
                <option value="<?=$row['id'] ?>"><?=$row['name_category'] ?></option>                
            <?php endforeach; ?>
        </select></td>
    </tr>
    <tr>
        <td colspan=2><button type="submit">Добавить пост</button></td>
    </tr>
</table>
</form>
<a href="/hillel/admin/posts/">Вернутся к постам</a>