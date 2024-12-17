<style>
    table {
        border: 1px solid aqua;
        padding: 12px;
        border-radius: 12px;
        background: rgb(0,0,0, .4);
        margin: 20px 0;
    }
    td,th {
        padding: 10px 12px;
    }
    a {
        text-decoration: none;
        color: blue;
    }
</style>
<h2>Это страница работы с постами</h2>
<a href="/hillel/admin/posts/create">Создать</a>
<table>
    <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Описание</th>
        <th>Категория</th>
        <th>Автор</th>
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
                <?php if($data_posts_array['name_category']) : ?>
                    <td><?= $data_posts_array['name_category'] ?></td>
                <?php endif; ?>
                <?php if($data_posts_array['name']) : ?>
                    <td><?= $data_posts_array['name'] ?></td>
                <?php endif; ?>   
                <td><a href="/hillel/admin/posts/update?id=<?= $data_posts_array['id'] ?>">Update</a></td>           
                <td><a href="/hillel/admin/posts/delete?id=<?= $data_posts_array['id'] ?>">Delete</a></td>             
            </tr>
    <?php } ?>

</table>