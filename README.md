# Programmation_Web-Project
# <?php echo wp_get_attachment_image_url(45, 'full'); ?>

SELECT ID, post_title, post_name, guid 
FROM wp_posts 
WHERE post_type = 'attachment' 
ORDER BY ID DESC;
