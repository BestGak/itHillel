<h2>This is Admin Gallery page</h2>
<a href="/hillel/admin/gallery/create">Добавить Картинку</a>
<table>
    <tr>
        <td>ID</td>
        <td>Заголовок</td>
        <td>Описание</td>
        <td>Айди категории</td>
    </tr>
    <?php
        foreach ($data as $data_gallery_array) 
        { ?>
            <tr>
                <?php if($data_gallery_array['id']) : ?>
                    <td><?= $data_gallery_array['id'] ?></td>
                <?php endif; ?>
                <?php if($data_gallery_array['name']) : ?>
                    <td><?= $data_gallery_array['name'] ?></td>
                <?php endif; ?>
                <?php if($data_gallery_array['url']) : ?>
                    <td><?= $data_gallery_array['url'] ?></td>
                <?php endif; ?>
                <?php if($data_gallery_array['category_id']) : ?>
                    <td><?= $data_gallery_array['category_id'] ?></td>
                <?php endif; ?>   
                <td><a href="/hillel/admin/gallery/update?id=<?= $data_gallery_array['id'] ?>">Update</a></td>           
                <td><a href="/hillel/admin/gallery/delete?id=<?= $data_gallery_array['id'] ?>">Delete</a></td>             
            </tr>
            <?php } ?>

</table>