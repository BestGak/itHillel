<h2>Обновленные данных о пользователе</h2>
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
        <td><input name="email" placeholder="int" value="<?= $data['email'] ?>"></td>
    </tr>
    <tr>
        <td colspan=2><button type="submit">Обновить пользователя</button></td>
    </tr>
</table>
</form>
<a href="/hillel/admin/users/">Вернутся к пользователям</a>