<h2>Это страница работы с категориями постов</h2>
<a href="/hillel/admin/categoryposts/create">Создать</a>
<table>
    <tr>
        <td>ID</td>
        <td>Название</td>
    </tr>
    <?php
        foreach ($data as $data_posts_array) 
        { ?>
            <tr>
                <?php if($data_posts_array['id']) : ?>
                    <td><?= $data_posts_array['id'] ?></td>
                <?php endif; ?>
                <?php if($data_posts_array['name']) : ?>
                    <td><?= $data_posts_array['name'] ?></td>
                <?php endif; ?>
                <td><a href="/hillel/admin/categoryposts/update?id=<?= $data_posts_array['id'] ?>">Update</a></td>           
                <td><a href="/hillel/admin/categoryposts/delete?id=<?= $data_posts_array['id'] ?>">Delete</a></td>             
            </tr>
    <?php } ?>

</table>