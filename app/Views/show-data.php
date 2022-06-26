<section class="hero-section py-3 py-md-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12 pt-3 mb-5 mb-lg-0">

<h5>Data On this Server:</h5>
<div class="table-responsive my-4">
  <table class="table table-bordered">
    <tbody>
      <?php foreach ($datas as $data) {?>
        <tr>
          <th class="theme-bg-light"><a class="theme-link" href="#"><?php echo $data->id;?></a></th>
          <td><?php echo $data->data_key;?></td>
          <td><?php echo $data->data_value;?></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</section>
