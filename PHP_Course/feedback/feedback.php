<?php include 'inc/header.php'; ?>

<?php
  $sql = 'SELECT * FROM feedback';
  $stmt = $conn->query($sql);
  $feedback = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

   
  <h2>Outros Comentários</h2>

  <?php if (empty($feedback)): ?>
    <p class="lead mt-3">Não existem comentários</p>
  <?php endif; ?>

  <?php foreach ($feedback as $item): ?> 
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
        <div class="text-secondary mt-2">By <?php echo $item['nome']; ?> on <?php echo date_format(date_create($item['data']),'g:ia \o\n l jS F Y'); ?></div>
     </div>
   </div>
  <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>
