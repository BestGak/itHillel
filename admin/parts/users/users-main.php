<h2>This is Admin Users page</h2>
<a href="/hillel/admin/users/create">Добавить пользователя</a>
<table>
    <tr>
        <td>ID</td>
        <td>Имя</td>
        <td>Пароль</td>
        <td>Почта</td>
    </tr>
    <?php
        foreach ($data as $data_users_array) 
        { ?>
            <tr>
                <?php if($data_users_array['id']) : ?>
                    <td><?= $data_users_array['id'] ?></td>
                <?php endif; ?>
                <?php if($data_users_array['name']) : ?>
                    <td><?= $data_users_array['name'] ?></td>
                <?php endif; ?>
                <?php if($data_users_array['password']) : ?>
                    <td><?= $data_users_array['password'] ?></td>
                <?php endif; ?>
                <?php if($data_users_array['email']) : ?>
                    <td><?= $data_users_array['email'] ?></td>
                <?php endif; ?>   
                <td><a href="/hillel/admin/users/update?id=<?= $data_users_array['id'] ?>">Update</a></td>           
                <td><a href="/hillel/admin/users/delete?id=<?= $data_users_array['id'] ?>">Delete</a></td>             
            </tr>
            <?php } ?>

</table>