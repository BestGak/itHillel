<h2>This is Gallery page</h2>
<a href="/hillel/Gallery/create/">Create</a>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Image Url</td>
        <td>Category Name</td>
        <td>Category ID</td>
    </tr>
    <?php
        foreach ($data as $data_image_array) 
        { ?>
            <tr>
                <?php if($data_image_array['id']) : ?>
                    <td><?= $data_image_array['id'] ?></td>
                <?php endif; ?>
                <?php if($data_image_array['name']) : ?>
                    <td><?= $data_image_array['name'] ?></td>
                <?php endif; ?>
                <?php if($data_image_array['image_url']) : ?>
                    <td><?= $data_image_array['image_url'] ?></td>
                <?php endif; ?>
                <?php if($data_image_array['category']) : ?>
                    <td><?= $data_image_array['category'] ?></td>
                <?php endif; ?>
                <?php if($data_image_array['category_id']) : ?>
                    <td><?= $data_image_array['category_id'] ?></td>
                <?php endif; ?>   
                <td><a href="/hillel/Gallery/update?id=<?= $data_image_array['id'] ?>">Update</a></td>           
                <td><a href="/hillel/Gallery/delete?id=<?= $data_image_array['id'] ?>">Delete</a></td>             
            </tr>
    <?php } ?>

</table>