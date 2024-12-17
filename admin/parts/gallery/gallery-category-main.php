<h2>This is Admin Category Gallery page</h2>
<a href="/hillel/admin/categorygallery/create">Добавить категорию картинок</a>
<table>
    <tr>
        <td>ID</td>
        <td>Название</td>
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
                <td><a href="/hillel/admin/categorygallery/update?id=<?= $data_gallery_array['id'] ?>">Update</a></td>           
                <td><a href="/hillel/admin/categorygallery/delete?id=<?= $data_gallery_array['id'] ?>">Delete</a></td>             
            </tr>
            <?php } ?>

</table>