<h2>This is Gallery page</h2>
<a href="/hillel/Gallery/create/">Create</a>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Image Url</td>
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
                <?php if($data_image_array['url']) : ?>
                    <td><?= $data_image_array['url'] ?></td>
                <?php endif; ?>
                <?php if($data_image_array['category_id']) : ?>
                    <td><?= $data_image_array['category_id'] ?></td>
                <?php endif; ?>   
         
            </tr>
    <?php } ?>

</table>