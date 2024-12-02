<h2>Это страница работы с постами</h2>
<a href="/hillel/admin/posts/create">Создать</a>
<table>
    <tr>
        <td>ID</td>
        <td>Заголовок</td>
        <td>Описание</td>
        <td>Название Категории</td>
        <td>Айди категории</td>
    </tr>
    <?php
        foreach ($data as $data_posts_array) 
        { ?>
            <tr>
                <?php if($data_posts_array['id']) : ?>
                    <td><?= $data_posts_array['id'] ?></td>
                <?php endif; ?>
                <?php if($data_posts_array['title']) : ?>
                    <td><?= $data_posts_array['title'] ?></td>
                <?php endif; ?>
                <?php if($data_posts_array['content']) : ?>
                    <td><?= $data_posts_array['content'] ?></td>
                <?php endif; ?>
                <?php if($data_posts_array['category']) : ?>
                    <td><?= $data_posts_array['category'] ?></td>
                <?php endif; ?>
                <?php if($data_posts_array['category_id']) : ?>
                    <td><?= $data_posts_array['category_id'] ?></td>
                <?php endif; ?>   
                <td><a href="/hillel/admin/posts/update?id=<?= $data_posts_array['id'] ?>">Update</a></td>           
                <td><a href="/hillel/admin/posts/delete?id=<?= $data_posts_array['id'] ?>">Delete</a></td>             
            </tr>
    <?php } ?>

</table>