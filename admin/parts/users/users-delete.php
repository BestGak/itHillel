<h2>Вы уверенны что хотите данного пользователя?</h2>
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
        <td>Password</td>
        <td><input name="password" placeholder="text" value="<?= $data['password'] ?>"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input name="category_id" placeholder="email" value="<?= $data['email'] ?>"></td>
    </tr>
    <tr>
        <td colspan=2><button type="submit">Удалить Пользователя</button></td>
    </tr>
</table>
</form>
<a href="/hillel/admin/gallery/">Вернутся в галерею</a>