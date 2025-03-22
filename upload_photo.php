<form action="process_upload_photo.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="album_id" value="<?= $_GET['album_id']; ?>">
    <input type="file" name="photo" required>
    <button type="submit">Tải Ảnh Lên</button>
</form>
