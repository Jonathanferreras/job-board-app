<?php include 'inc/header.php'; ?>

  <h2 class="page-header">
    <?php echo $job->job_title; ?>
    (<?php echo $job->location; ?>)
  </h2>
  <small>
    Posted by <?php echo $job->contact_user; ?>
    on <?php echo $job->post_date; ?>
  </small>
  <hr>
  <p class="lead">
    <?php echo $job->description; ?>
    <ul class="list-group">
      <li class="list-group-item">
        <strong>Company:</strong>
        <?php echo $job->company; ?>
      </li>
      <li class="list-group-item">
        <strong>Salary:</strong>
        <?php echo $job->salary; ?>
      </li>
      <li class="list-group-item">
        <strong>Email:</strong>
        <?php echo $job->contact_email; ?>
      </li>
    </ul>
    <a href="index.php" class="btn btn-default">Go back</a>
  </p>

<?php include 'inc/footer.php'; ?>
